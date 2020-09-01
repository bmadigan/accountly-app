<?php

namespace App\Actions;

use App\Models\Comment;

class CreateCommentAction {

    public function execute(array $attributes)
    {
        return Comment::create([
            'body'       => $attributes['body'],
            'message_id' => $attributes['message']['id'],
            'owner_id'   => auth()->user()->id,
        ]);
    }

}
