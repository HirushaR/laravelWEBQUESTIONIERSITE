<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    public function getId()
    {
        return $this->id;
    }
}
