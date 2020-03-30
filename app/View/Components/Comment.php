<?php

namespace App\View\Components;

use App\Models\Comment as CommentModel;
use Illuminate\View\Component;

class Comment extends Component
{
    public $comment;

    public function __construct(CommentModel $comment)
    {
        $this->comment = $comment;
    }

    public function render()
    {
        return view('components.comment');
    }
}
