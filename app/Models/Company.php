<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function groups()
    {
        return $this->hasMany('App\Models\Group');
    }
}
