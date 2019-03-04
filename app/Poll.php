<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Poll extends Model
{
    use SoftDeletes;

    protected $fillable = ['score', 'commentary'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
