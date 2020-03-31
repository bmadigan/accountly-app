<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUserHasTeam
{
    public function handle($request, Closure $next)
    {
        // Check for regular user belongs to a team
        if ($request->user() && !$request->user()->hasTeams()) {
            return redirect()->route('teams.missing');
        }

        return $next($request);
    }
}
