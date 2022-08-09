<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Dokumen;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Divisi;
use DB;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kategoris = Kategori::where([
            ['id', '!=', null, 'OR', 'kategoris.nama', '!=', null], //ketika form search kosong, maka request akan null. Ambil semua data di database
            [function ($query) use ($request) {
                if (($keyword = $request->keyword)) {
                    $query->orWhere('id', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('nama_dokumen', 'LIKE', '%' . $keyword . '%')->get(); //ketika form search terisi, request tidak null. Ambil data sesuai keyword
                }
            }]
        ]);
        $users = auth()->user();
        $kategori = Kategori::all();
        $divisis = Divisi::all();
        $kategoris = Kategori::leftjoin('dokumens', 'dokumens.kategori_id','=','kategoris.id')
                    ->select("kategoris.nama")
                    ->selectRaw('count(dokumens.id) as total_doc')
                    ->groupBy('kategoris.id')
                    ->get();
        $divisis = Divisi::all();
        $dokumens = Dokumen::latest()->paginate(5);
        return view('Dokumen.index', compact ('users', 'kategoris','kategori', 'divisis', 'dokumens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = auth()->user();
        $kategoris = Kategori::all();
        $divisis = Divisi::all();
        return \view('Dokumen.create', compact ('users', 'kategoris', 'divisis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf',
        ]);
        $nama_dokumen = $request->input('nama_dokumen');
        $no_dokumen = $request->input('no_dokumen');
        $fileName = $no_dokumen . '_' . $nama_dokumen . '.' . $request->file->extension();
        $request->file->move(public_path('file'), $fileName);
        
        //Database
        $dokumens = new Dokumen;
        $dokumens->no_dokumen = $no_dokumen;
        $dokumens->kategori_id = $request->kategori;
        $dokumens->user_id = $request->user_id;
        $dokumens->divisi = $request->divisi;
        $dokumens->nama_dokumen = $nama_dokumen;
        $dokumens->revisi = $request->input('revisi');
        $dokumens->keterangan = $request->input('keterangan');
        
        $dokumens->file_name = $fileName;

        $dokumens->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = auth()->user();
        $kategoris = Kategori::all();
        $divisis = Divisi::all();
        $dokumens = Dokumen::with('kategoris', 'divisis')->where('id', $id)->first();
        
        return \view('Categories.View' , compact('users', 'kategoris', 'divisis', 'dokumens'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = auth()->user();
        $kategoris = Kategori::where('id', $id)->first();
        $divisis = Divisi::all();
        $dokumens = DB::table('dokumens')->where('id', $id)->first();
        return view('Categories.View', compact ('users', 'kategoris', 'divisis', 'dokumens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dokumens=Dokumen::where('id', $id)->first();
        
        $dokumens->nama_dokumen = $request->get('nama_dokumen');
        $dokumens->no_dokumen = $request->get('no_dokumen');
        $dokumens->kategori_id = $request->get('kategori');
        $dokumens->nama_dokumen = $request->get('nama_dokumen');
        $dokumens->keterangan = $request->get('keterangan');
        $dokumens->revisi = $request->get('revisi');

        $dokumens->save();

        //dd($request->get('nama_dokumen'));

        return redirect()->route('viewKategori', $request->get('kategori'));
    }

    /**
     * Remove the specified resource from storage.
     *s
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokumen = Dokumen::find($id);
        $dokumen->is_active = '0';
        $dokumen->is_deleted = '1';
        $dokumen->save();
        return redirect()->route('Dokumen.index');

        //fungsi eloquent untuk menghapus data
        // Dokumen::find($id)->delete();
        // return redirect()->route('Dokumen.index')
        //     -> with('success', 'Mahasiswa Berhasil Dihapus');

    }
}