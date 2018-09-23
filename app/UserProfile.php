<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{

    protected $table = 'profile';
    public $primaryKey = 'id';
    public $timestamps = false;

}
