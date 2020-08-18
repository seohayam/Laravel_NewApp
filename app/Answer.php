<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $regurded = array('id');

    protected $fillable = ['user_id','post_id','answer'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function post()
    {
        return $this->belongsTo('App\Post', 'post_id');
    }
        
}
