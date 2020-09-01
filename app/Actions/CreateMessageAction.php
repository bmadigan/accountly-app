<?php

namespace App\Actions;

use App\Models\Message;

class CreateMessageAction {

    public function execute(array $attributes)
    {
        return Message::create([
            'created_by' => auth()->user()->id,
            'team_id'    => auth()->user()->currentTeam()->id,
            'title'      => $attributes['title'],
            'body'       => $attributes['body'],
        ]);
    }

}
