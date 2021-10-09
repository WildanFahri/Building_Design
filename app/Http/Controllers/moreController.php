<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\design;

class moreController extends Controller
{
    public function index()
    {
        $data = design::all(); // Mengambil semua isi tabel
        $posts = design::orderBy('id', 'desc')->paginate(5);
        return view('more', [ 'data' => $data]);
    }
}
