<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheParent extends Model
{
    protected $table = 'parents';

    public function parentable(){
        return $this->morphTo();
    }
}
