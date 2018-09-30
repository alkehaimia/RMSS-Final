<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{

    protected $table = 'user_profile';
    public $primaryKey = 'id';
    public $timestamps = false;

}
