<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'username',
        'caption',
        'image',
        'position',
        'title',
        'name',
        'surname',
        'summary'
    ];
}
