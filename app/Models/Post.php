<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $table = 'post';
    protected $dates = ['deleted_at'];
    // dates is a built-in Laravel Property
    protected $fillable = [
        'title',
        'content'
    ];
}
