<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Merchant extends Model
{
    protected $fillable = ['business_name','business_phone','business_email','country','external_merchant_id'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
