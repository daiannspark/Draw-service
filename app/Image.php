<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = array('fullname', 'email', 'phone', 'image', 'comments');
}
