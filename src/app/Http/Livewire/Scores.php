<?php

namespace App\Http\Livewire;

use App\User;
use App\Match;
use Livewire\Component;

class Scores extends DashboardTile
{
    public $active = true;
    public $playerScores = [];

    protected $tileName = 'scores';
    protected $tileBaseOrder = 6;

    protected $listeners = [
        'setContentActive' => 'activate'
    ];

    public function render()
    {
        // static points. This is all non performant bollocks anyway
        // but for the sake  of presentation...
        $this->playerScores = User::with('matches')->get()
            ->filter(fn (User $u) => $u->matches->count() != 0)
            ->map(fn (User $u) => [
                'name' => $u->name,
                'matches' => $u->matches->count(),
                'wins' => $u->matches->filter(fn (Match $m) =>
                    $m->points_one > $m->points_two ?
                        $m->pivot->team == 1 :
                        $m->pivot->team == 2 && $m->points_one != $m->points_two,
                )->count()
            ])->map(function($u){
                $new = $u;
                $new['score'] = $u['wins'] * 3;
                return $new;
            })
            ->sort(fn ($a, $b) => $a['score'] <= $b['score'] ? 1 : -1)
            ->values()
            ->toArray();

        return view('livewire.scores');
    }
}
