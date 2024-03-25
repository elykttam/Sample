<?php

namespace App\Models;

use Database\Factories\StudentRegistrationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return StudentRegistrationFactory::new();
    }
}
