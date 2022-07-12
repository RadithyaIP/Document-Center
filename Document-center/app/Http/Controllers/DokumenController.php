<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Divisi;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = auth()->user();
        $kategoris = Kategori::all();
        $divisis = Divisi::all();
        $dokumens = Dokumen::all();
        return view('Dokumen.index', compact ('users', 'kategoris', 'divisis', 'dokumens'));
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
            'file' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
        ]);
        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('file'), $fileName);
        
        //Database
        $dokumens = new Dokumen;
        $dokumens->no_dokumen = $request->input('no_dokumen');
        $dokumens->kategori_id = $request->kategori;
        $dokumens->user_id = $request->user_id;
        $dokumens->divisi = $request->divisi;
        $dokumens->nama_dokumen = $request->input('nama_dokumen');
        $dokumens->revisi = $request->input('revisi');
        $dokumens->keterangan = $request->input('keterangan');
        
        $dokumens->file_name = $fileName;

        $dokumens->save();

        return redirect()->route('Dokumen.index')->with('success', 'Data berhasil ditambahkan');
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
        
        return \view('Dokumen.details' , compact('users', 'kategoris', 'divisis', 'dokumens'));
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
        $kategoris = Kategori::all();
        $divisis = Divisi::all();
        return \view('Dokumen.edit', compact ('users', 'kategoris', 'divisis'));
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
        return redirect()->route('Dokumen.details')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}