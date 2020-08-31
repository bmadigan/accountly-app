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
        $m1 = factory(Message::class)->create(['created_by' => $me->id, 'team_id' => $currentTeam->id, 'category_id' => $c1->id]);
        $comments = factory(App\Models\Comment::class, rand(1, 4))->make(['message_id' => $m1->id, 'owner_id' => $me->id]);
        $m1->comments()->saveMany($comments);

        $m2 = factory(Message::class)->create(['created_by' => $me->id, 'team_id' => $currentTeam->id]);
        $comments = factory(App\Models\Comment::class, rand(1, 4))->make(['message_id' => $m2->id, 'owner_id' => $staff->id]);
        $m2->comments()->saveMany($comments);

        $m3 = factory(Message::class)->create(['created_by' => $staff->id, 'team_id' => $currentTeam->id, 'category_id' => $c2->id]);
        $comments = factory(App\Models\Comment::class, rand(1, 4))->make(['message_id' => $m3->id, 'owner_id' => $me->id]);
        $m3->comments()->saveMany($comments);

        factory(Message::class)->create(['created_by' => $me->id, 'team_id' => $currentTeam->id, 'category_id' => $c2->id]);
        $m4 = factory(Message::class)->create(['created_by' => $me->id, 'team_id' => $currentTeam->id, 'category_id' => $c3->id]);
        $comments = factory(App\Models\Comment::class, rand(1, 4))->make(['message_id' => $m4->id, 'owner_id' => $me->id]);
        $m4->comments()->saveMany($comments);

        factory(Message::class)->create(['created_by' => $staff->id, 'team_id' => $currentTeam->id, 'category_id' => $c1->id]);

        // Random messages from random users
        factory(Message::class, 45)->create()->each(function ($message) {
            $u = factory(User::class)->create();
            $message->created_by = $u->id;
            $message->team_id = $u->current_team_id;
            $message->save();

            // Seed the relation with 5 comments
            $comments = factory(App\Models\Comment::class, rand(1, 4))->make();
            $message->comments()->saveMany($comments);
        });

        $this->genereateAryeoMessages();
    }

    protected function genereateAryeoMessages()
    {
        // Create some random internal messages
        $user = User::firstWhere('email', 'aryeo-team@aryeo.com');
        $currentTeam = $user->currentTeam();
        $staff = User::firstWhere('email', 'aryeo-staff@aryeo.com');

        // Create some categories
        $c1 = factory(MessageCategory::class)->create(['team_id' => $currentTeam->id, 'category_name' => 'Photo Shoots']);
        $c2 = factory(MessageCategory::class)->create(['team_id' => $currentTeam->id, 'category_name' => 'FYI']);
        $c3 = factory(MessageCategory::class)->create(['team_id' => $currentTeam->id, 'category_name' => 'Upcoming Schedules']);

        $m1 = factory(Message::class)->create(['created_by' => $user->id, 'team_id' => $currentTeam->id, 'category_id' => $c1->id]);
        $comments = factory(App\Models\Comment::class, rand(2, 6))->make(['message_id' => $m1->id, 'owner_id' => $user->id]);
        $m1->comments()->saveMany($comments);

        $m2 = factory(Message::class)->create(['created_by' => $user->id, 'team_id' => $currentTeam->id]);
        $comments = factory(App\Models\Comment::class, rand(2, 7))->make(['message_id' => $m2->id, 'owner_id' => $staff->id]);
        $m2->comments()->saveMany($comments);

        $m3 = factory(Message::class)->create(['created_by' => $staff->id, 'team_id' => $currentTeam->id, 'category_id' => $c2->id]);
        $comments = factory(App\Models\Comment::class, rand(1, 4))->make(['message_id' => $m3->id, 'owner_id' => $user->id]);
        $m3->comments()->saveMany($comments);

        factory(Message::class)->create(['created_by' => $user->id, 'team_id' => $currentTeam->id, 'category_id' => $c2->id]);
        $m4 = factory(Message::class)->create(['created_by' => $user->id, 'team_id' => $currentTeam->id, 'category_id' => $c3->id]);
        $comments = factory(App\Models\Comment::class, rand(1, 4))->make(['message_id' => $m4->id, 'owner_id' => $user->id]);
        $m4->comments()->saveMany($comments);

        factory(Message::class)->create(['created_by' => $staff->id, 'team_id' => $currentTeam->id, 'category_id' => $c1->id]);

    }
}
