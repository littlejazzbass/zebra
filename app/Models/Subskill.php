<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Subskill extends Model
{
    public function getFormattedUpdatedDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['updated_at'])->format('Y/m/d');
    }


    public function performances()
    {
        $this->hasMany('App\Models\Performance');
    }
}
