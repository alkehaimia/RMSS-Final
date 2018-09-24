<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class createJob extends Model
{
    protected $table = 'job';

    public $primaryKey = 'id';

    public $timestamps = false;
}
