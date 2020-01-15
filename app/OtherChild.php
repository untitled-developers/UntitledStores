<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherChild extends TheParent
{
    public $timestamps = false;
    protected $table = 'other_children';

    public function parent(){
        return $this->morphOne('TheParent', 'parentable');
    }
}
