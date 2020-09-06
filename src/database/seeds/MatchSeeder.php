<?php

use Illuminate\Database\Seeder;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\User::get();
        if($users->count() < 6){
            $users = factory(\App\User::class, 6)->create();
        }

        /** @var \App\Match $m1 */
        $m1 = \App\Match::create([
            'points_one' => 9,
            'points_two' => 2
        ]);

        $m1->users()->save($users[0], ['team' => 1]);
        $m1->users()->save($users[1], ['team' => 2]);

        $m2 = \App\Match::create([
            'points_one' => 4,
            'points_two' => 9
        ]);

        $m2->users()->save($users[2], ['team' => 1]);
        $m2->users()->save($users[3], ['team' => 1]);
        $m2->users()->save($users[4], ['team' => 2]);
        $m2->users()->save($users[5], ['team' => 2]);
    }
}
