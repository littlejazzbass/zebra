<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Skill;

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

    public function getSubskills(User $user, Skill $skill)
    {
        $performances = self::query()
        ->select([
            'subskills.id as subskill_id',
            'subskills.name as subskill_name',
            'performances.evaluation',
            'performances.created_at',
            'performances.updated_at',
        ])
        ->join('performances', 'performances.subskill_id', '=', 'subskills.id')
        ->join('users', 'performances.user_id', '=', 'users.id')
        ->join('skills', 'subskills.skill_id', '=', 'skills.id')
        ->where('users.id', '=', $user->toArray()['id'])
        ->where('skills.id', '=', $skill->toArray()['id'])
        ->get();

        return $performances;
    }
}
