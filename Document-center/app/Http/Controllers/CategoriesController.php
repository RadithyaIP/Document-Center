<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Dokumen;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Divisi;
use PDF;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function kategori($id, Request $request)
    {
        
        $realCount = Dokumen::count();
        $users = auth()->user();
        $kategoris = Kategori::where('id', $id)->first();
        $kateg = Kategori::all();
        $divisis = Divisi::all();
        $dokumens = Dokumen::all();
        return view('Categories.View', compact ('users','kateg', 'kategoris', 'divisis', 'dokumens', 'realCount'));
    }

    //Download file
    public function download($file_name)
    {
        $file = $file_name;
        $path = public_path('file/'. $file_name);
        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($path, $file, $headers);
        
    }
    public function view($file_name)
    {
        $file = $file_name;
        $path = public_path('file/'. $file_name);
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::file($path);
        
    }

    public function print()
    {
        $dokumens = Dokumen::all();
        $kategoris=Kategori::all();
        $pdf = PDF::loadview('Categories.print-all', compact('dokumens','kategoris'));
        return $pdf->stream();
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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