<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissingTeamController extends Controller
{
    public function __invoke()
    {
        return view('teams.missing');
    }
}
