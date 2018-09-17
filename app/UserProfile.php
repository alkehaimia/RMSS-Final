<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
  public $table = "profile_skills";
  public $fillable = ['skill']
}
