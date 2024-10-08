<?php

namespace App\Models;


use MongoDB\Laravel\Eloquent\Model;

class UserData extends Model
{

    protected $connection = 'tech_DB'; // Specify MongoDB connection
    protected $collection = 'userdata'; // MongoDB collection

    protected $fillable = [
       'username',
       'about',
       'photo',
       'firstname',
       'lastname',
       'email',
       'country',
       'street',
       'city',
       'state',
       'zip',
    ];
}
