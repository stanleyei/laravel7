<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    protected $fillable = ['title','date','img','content','name','email','phone'];
}
