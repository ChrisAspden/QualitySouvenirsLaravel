<?php



namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable=[

        "name", "HomePhoneNumber", "WorkPhoneNumber", "MobilePhoneNumber", "Email",
    ];
}

