<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JackStudentDetail extends Model
{
    //
    protected $table = "jack_studentdetails";
    const CREATED_AT = 'dateRegistered';

    public function setUpdatedAtAttribute($value)
	{
	    // to Disable updated_at
	}
}
