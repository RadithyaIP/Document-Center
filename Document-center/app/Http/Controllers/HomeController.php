<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Divisi;

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
        $users = auth()->user();
        $kategoris = Kategori::all();
        $divisis = Divisi::all();
        $dokumens = Dokumen::all();
        return view('Dokumen.index', compact ('users', 'kategoris', 'divisis', 'dokumens'));
    }
}
