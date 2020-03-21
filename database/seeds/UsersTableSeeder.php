<?php

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create some random teams with users
        factory(Team::class, 5)->create()->each(function ($team) {
            $users = factory(User::class, 2)->create();
            $users->map(function ($user) use ($team) {
                $team->users()->save($user);
            });
        });

        // Create a test account for me
        $myTeam = factory(Team::class)->create(['name' => 'BradsTeam']);
        $me = factory(User::class)->create([
            'name' => 'Brad Mad',
            'email' => 'bradmadigan@gmail.com',
            'current_team_id' => $myTeam->id,
        ]);
        $myTeam->users()->attach($me);
    }
}
