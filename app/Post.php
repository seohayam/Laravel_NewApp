<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    protected $regurded = array('id');

    protected $fillable = ['user_id','opinion','image'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment', 'post_id', 'id');
    }

    public function answer()
    {
        return $this->hasMany('App\Answer', 'post_id', 'id');
    }
}
