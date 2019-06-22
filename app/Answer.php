<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function getAllPosts()
    {
        return  Blog::all();
    }
}
