<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN = 1;
    const MERCHANT = 2;
    const USER = 3;
    public $timestamps = false;
}
