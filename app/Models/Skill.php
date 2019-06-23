<?php

namespace Models\App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function subskills()
    {
        return $this->hasMany('App\Subskill');
    }
}
