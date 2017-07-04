<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function candidates(){
        return $this->hasMany(Candidate::class);
    }
}
