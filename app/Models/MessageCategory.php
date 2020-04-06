<?php

namespace App\Models;

use Dyrynda\Database\Support\GeneratesUuid;

class MessageCategory extends Model
{
    use GeneratesUuid;

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
