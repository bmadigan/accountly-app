<?php

use App\Models\Team;
use App\Models\User;
use App\Models\Message;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    public function run()
    {
        // Create some random internal messages
        $me = User::firstWhere('email', 'bradmadigan@gmail.com');
        $currentTeam = $me->currentTeam();
        $staff = User::firstWhere('email', 'brad@wessa.com');

        factory(Message::class)->create(['created_by' => $me->id, 'team_id' => $currentTeam->id]);
        factory(Message::class)->create(['created_by' => $me->id, 'team_id' => $currentTeam->id]);
        factory(Message::class)->create(['created_by' => $staff->id, 'team_id' => $currentTeam->id]);

        // Random messages from random users
        factory(Message::class, 15)->create()->each(function ($message) {
            $u = factory(User::class)->create();
            $message->created_by = $u->id;
            $message->team_id = $u->current_team_id;
            $message->save();
        });
    }
}
