<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class createJob extends Model
{
    protected $table = 'job_listing';

    public $primaryKey = 'Job_Listing_id';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
