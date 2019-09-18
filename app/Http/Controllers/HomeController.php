<?php

namespace App\Http\Controllers;

use App\Peserta;
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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Peserta::all()->count();

        return view('welcome', [
          'users' => $users,
        ]);
    }
}
