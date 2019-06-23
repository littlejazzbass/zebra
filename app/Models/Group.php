<?php

namespace Models\App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    public function users()
    {
        return $this->belongsToMany('App\User','group_user');
    }
    public function skills()
    {
        return $this->belongsToMany('App\Skill','group_skill');
    }
}
