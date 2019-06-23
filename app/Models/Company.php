<?php

namespace Models\App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function groups()
    {
        return $this->hasMany('App\Group');
    }
}
