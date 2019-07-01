<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=[

        "FirstMidName", "LastName", "HomePhoneNumber", "WorkPhoneNumber", "MobilePhoneNumber", "Address",
        "Email", "Password", "IsSignedIn", "Enabled"
    ];



}
