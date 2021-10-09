<?php

namespace App\Http\Controllers;

use App\Models\design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
    // public function dashboard()
    // {
    //     return view('dashboard');
    // }
    public function index()
    {
        $data = design::all(); // Mengambil semua isi tabel
        $posts = design::orderBy('id', 'desc')->paginate(5);
        return view('home', [ 'data' => $data]);
    }
}
