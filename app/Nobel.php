<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nobel extends Model
{
    protected $fillable = ['name', 'reason_nobel'];
}
