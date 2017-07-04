<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
