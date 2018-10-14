<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{

    protected $table = 'user_profile';
    public $primaryKey = 'profile_ID';

    public function user(){
       return $this->belongsTo('App\User');
   }
}
