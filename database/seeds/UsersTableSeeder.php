<?php

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
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

        // Create a 2nd Test account for Karen
        $karen = factory(User::class)->create([
            'name' => 'Karen Madigan',
            'email' => 'karen@madigan.com',
            'current_team_id' => $myTeam->id,
        ]);
        $myTeam->users()->attach($karen);

        $staff = factory(User::class)->create([
            'name' => 'Brad Wessa',
            'email' => 'brad@wessa.com',
            'staff' => true,
        ]);
        $myTeam->users()->attach($staff);

        // Create one more for Aryeo
        $aryeoTeam = factory(Team::class)->create(['name' => 'Aryeo']);

        $aryeoUser = factory(User::class)->create([
            'name' => 'Branick Weix',
            'email' => 'aryeo-team@aryeo.com',
            'current_team_id' => $aryeoTeam->id,
        ]);
        $aryeoTeam->users()->attach($aryeoUser);

        $aryeoStaff = factory(User::class)->create([
            'name' => 'The Ninja Guy',
            'email' => 'aryeo-staff@aryeo.com',
            'current_team_id' => $aryeoTeam->id,
        ]);
        $aryeoTeam->users()->attach($aryeoStaff);

    }
}
