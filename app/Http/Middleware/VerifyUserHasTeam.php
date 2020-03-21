<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUserHasTeam
{
    public function handle($request, Closure $next)
    {
        if ($request->user() && ! $request->user()->hasTeams()) {
            return redirect()->route('teams.missing');
        }

        return $next($request);
    }
}
