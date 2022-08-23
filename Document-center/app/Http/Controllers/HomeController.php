<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Divisi;
use DB;

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
        
        $kategoris = Kategori::leftjoin('dokumens', 'dokumens.kategori_id','=','kategoris.id')
                    ->where('dokumens.is_active', '=', 1)
                    ->select("kategoris.nama")
                    ->selectRaw('count(dokumens.id) as total_doc')
                    ->groupBy('kategoris.id')
                    ->get();
        $divisis = Divisi::all();
        $dokumens = Dokumen::all();
        $dokumens = Dokumen::latest()->paginate(5);
        //DB::enableQueryLog();
        // $dokumens = Dokumen::select("*")
        // ->selectRaw('count(*) as total_doc')
        // ->groupBy('kategori_id')
        // ->get();
        //dd(DB::getQueryLog());
        
        return view('Dokumen.index', compact ('users', 'kategoris', 'divisis', 'dokumens'));
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$dokumens = DB::table('dokumens')
		->where('nama_dokumen','like',"%".$cari."%")
		->paginate(5);
 
    		// mengirim data pegawai ke view index
		return view('Dokumen.index',['dokumens' => $dokumens]);
 
	}
}
