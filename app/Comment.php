<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    public $timestamps = false;

    public function postRef()
    {
        return $this->belongsTo('App\Post','post_id');
    }
}
