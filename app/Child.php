<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends TheParent
{
    public $timestamps = false;
    protected $table = 'children';

    public function parent(){
        return $this->morphOne('TheParent', 'parentable');
    }
}
