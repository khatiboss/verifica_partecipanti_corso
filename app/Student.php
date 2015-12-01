<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable = ['fist_name', 'last_name', 'email', 'phone'];
}
