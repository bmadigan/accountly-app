<?php

namespace App\Models;

use Dyrynda\Database\Support\GeneratesUuid;

class Message extends Model
{
    use GeneratesUuid;

    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
