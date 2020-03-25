<?php

use App\Models\Team;
use App\Models\User;
use App\Models\Message;
use App\Models\MessageCategory;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    public function run()
    {
        // Create some random internal messages
        $me = User::firstWhere('email', 'bradmadigan@gmail.com');
        $currentTeam = $me->currentTeam();
        $staff = User::firstWhere('email', 'brad@wessa.com');

        // Create some categories
        $c1 = factory(MessageCategory::class)->create(['team_id' => $currentTeam->id, 'category_name' => 'Question']);
        $c2 = factory(MessageCategory::class)->create(['team_id' => $currentTeam->id, 'category_name' => 'FYI']);
        $c3 = factory(MessageCategory::class)->create(['team_id' => $currentTeam->id, 'category_name' => 'Annoucement']);

        // Create some messages
        factory(Message::class)->create(['created_by' => $me->id, 'team_id' => $currentTeam->id, 'category_id' => $c1->id]);
        factory(Message::class)->create(['created_by' => $me->id, 'team_id' => $currentTeam->id]);
        factory(Message::class)->create(['created_by' => $staff->id, 'team_id' => $currentTeam->id, 'category_id' => $c2->id]);
        factory(Message::class)->create(['created_by' => $me->id, 'team_id' => $currentTeam->id, 'category_id' => $c2->id]);
        factory(Message::class)->create(['created_by' => $me->id, 'team_id' => $currentTeam->id, 'category_id' => $c3->id]);
        factory(Message::class)->create(['created_by' => $staff->id, 'team_id' => $currentTeam->id, 'category_id' => $c1->id]);

        // Random messages from random users
        factory(Message::class, 15)->create()->each(function ($message) {
            $u = factory(User::class)->create();
            $message->created_by = $u->id;
            $message->team_id = $u->current_team_id;
            $message->save();
        });
    }
}
