<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
	protected $fillable = ['firstName', 'lastName', 'email'];

    protected $table = 'signups';
}
