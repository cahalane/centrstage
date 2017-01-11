<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{

	protected $table = 'streams';

    protected $fillable = ['title', 'date', 'time'];

}
