<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|min:6',
        ];
    }

    public function limiterKey()
    {
        return sprintf('%s-%s', $this->email, $this->ip());
    }

    public function checkIfRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->limiterKey(), 5)) {
            return;
        }

        $seconds = RateLimiter::availableIn($this->limiterKey());
        
        throw ValidationException::withMessages([
            'email' => 'You have been ratelimited for '.$seconds.' seconds',
        ]);
    }

    public function authenticate()
    {
        $this->checkIfRateLimited();

        if (! Auth::attempt($this->only('email', 'password'))) {
            RateLimiter::hit($this->limiterKey());

            throw ValidationException::withMessages([
                'email' => 'Invalid email or password.',
            ]);
        }

        RateLimiter::clear($this->limiterKey());
    }
}
