<?php

namespace App;

enum UserType: string
{
    case ADMIN = 'Administrator';
    case USER = 'User';
}
