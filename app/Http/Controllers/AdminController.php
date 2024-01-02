<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $today  = Transaction::WhereDate('created_at', Carbon::today())->sum('total_price');
        $yesterday = Transaction::whereDate('created_at', Carbon::yesterday())->sum('total_price');
        $this_month = Transaction::whereMonth('created_at', Carbon::now()->month)->sum('total_price');
        $last_moth = Transaction::whereMonth('created_at', Carbon::now()->subMonth())->sum('total_price');
        return view('Backend.Dashboard.Pages.home', compact('today', 'yesterday', 'this_month', 'last_moth'));
    }
}
