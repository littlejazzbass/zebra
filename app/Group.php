<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    public function users()
    {
        return $this->belongsToMany('App\User','group_user');
    }
    public function subskills()
    {
        return $this->belongsToMany('App\Subskill','group_subskill');
    }
}
