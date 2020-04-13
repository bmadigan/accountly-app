<?php

namespace App\Http\Controllers;

use App\Traits\Currency;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $year = 2020;
        $revenue = 10000;
        $expenses = 9400;
        $profit = $this->calculateProfit($revenue, $expenses);

        return view('home', [
            'year' => $year,
            'revenue' => $revenue,
            'expenses' => $expenses,
            'profit' => $profit,
        ]);
    }

    public function calculateProfit($r, $e)
    {
        if ($this->isProfit($r, $e)) {
            return Currency::subtract($r, $e);
        }
        return '-' . Currency::subtract($e, $r);
    }


    private function isProfit($r, $e)
    {
        if ($r > $e) {
            return true;
        }

        return false;
    }
}
