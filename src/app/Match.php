<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'match_has_users')
            ->withPivot('team');
    }

    public function userTeamOne()
    {
        return $this->belongsToMany(User::class, 'match_has_users')
            ->wherePivot('team', '=', 1);
    }

    public function userTeamTwo()
    {
        return $this->belongsToMany(User::class, 'match_has_users')
            ->wherePivot('team', '=', 2);
    }


}
