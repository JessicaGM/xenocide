<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class LeaderboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
   
    public function leaderboard() {
        $users = DB::table('users')->select('username', 'rank', 'experience', 'created_at')->orderBy('rank','desc')->orderBy('experience','desc')->get();
        return view('leaderboard', ['users' => $users]);
    }
}

