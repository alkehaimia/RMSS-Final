<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{
  public $table = 'contactus';

public $fillable = ['name','email','message'];
/**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */

}
