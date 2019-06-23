<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    public function users()
    {
        return $this->belongsToMany('App\Models\User','group_user');
    }
    public function skills()
    {
        return $this->belongsToMany('App\Models\Skill','group_skill');
    }
}
