<?php

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

function gravatar_url($email)
{
    $email = md5($email);

    return "https://gravatar.com/avatar/${email}?" . http_build_query([
        's' => 60,
        //'d' => 'https://s3.amazonaws.com/laracasts/images/default-square-avatar.jpg',
        'd' => 'https://ui-avatars.com/api/' . auth()->user()->name . '/50/ffffff/718096',
    ]);
}


function dateLongFormat($dt)
{
    return Carbon::parse($dt)->format(config('accountly.date_long_format'));
}

function dateShortFormat($dt)
{
    return Carbon::parse($dt)->format(config('accountly.date_short_format'));
}

function timeFormat($dt)
{
    return Carbon::parse($dt)->format(config('accountly.time_format'));
}

function dateTimeFormat($dt)
{
    return Carbon::parse($dt)->format(config('accountly.date_time_format'));
}

function dateTimeHuman($dt)
{
    return Carbon::parse($dt)->diffForHumans();
}

function truncateWords($stringText, $length = 10)
{
    $length = abs((int) $length);

    if (strlen($stringText) > $length) {
        $stringText = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $stringText) . '...';
    }

    return ($stringText);
}

function truncate($string, $length = 20)
{
    return trim(substr($string, 0, $length) . '...');
}

function strPlural($string, $count)
{
    return Str::plural($string, $count);
}
