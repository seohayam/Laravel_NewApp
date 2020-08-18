<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Comment extends Model
{
    protected $regurded = array('id');

    protected $fillable = ['post_id','user_id','comment'];


    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

}
