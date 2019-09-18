<?php

namespace App\Http\Controllers;

use App\Peserta;
use App\User;
use App\Kelompok;
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
      $items = [
        'peserta' => [
          'title' => 'Peserta',
          'value' => Peserta::all()->count(),
        ],
        'admin' => [
          'title' => 'Admin',
          'value' => User::all()->count(),
        ],
        'kelompok' => [
          'title' => 'Kelompok',
          'value' => Kelompok::all()->count(),
        ],
      ];

        return view('home', [
          'items' => $items,
        ]);
    }
}
