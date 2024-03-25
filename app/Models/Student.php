<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'birthdate',
        'grades',
        'address_1',
        'address_2',
        'zipcode',
        'province',
        'city',
    ];

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => sprintf("%s %s", $this->first_name, $this->last_name)
        ); 
    }

    protected function age(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->birthdate)->age
        ); 
    }

    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class);
    }

    public function registration(): HasOne
    {
        return $this->hasOne(StudentRegistration::class);
    }

    public function media(): MorphOne
    {
        return $this-> morphOne(Media::class, 'model');
    }
}
