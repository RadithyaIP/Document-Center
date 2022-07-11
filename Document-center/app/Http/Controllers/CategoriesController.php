<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Dokumen;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Divisi;

class CategoriesController extends Controller
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
        return view('Categories.PetunjukOrganisasi', compact ('users', 'kategoris', 'divisis', 'dokumens'));
    }

    public function Sop()
    {
        $users = auth()->user();
        $kategoris = Kategori::all();
        $divisis = Divisi::all();
        $dokumens = Dokumen::all();
        
        return view('Categories.SOP', compact ('users', 'kategoris', 'divisis', 'dokumens'));
    }

    public function StandartOrganisasi()
    {
        $users = auth()->user();
        $kategoris = Kategori::all();
        $divisis = Divisi::all();
        $dokumens = Dokumen::all();
        return view('Categories.StandartOrganisasi', compact ('users', 'kategoris', 'divisis', 'dokumens'));
    }
    public function ManagementRisk()
    {
        $users = auth()->user();
        $kategoris = Kategori::all();
        $divisis = Divisi::all();
        $dokumens = Dokumen::all();
        return view('Categories.ManagementRisk', compact ('users', 'kategoris', 'divisis', 'dokumens'));
    }
    public function IAOL()
    {
        $users = auth()->user();
        $kategoris = Kategori::all();
        $divisis = Divisi::all();
        $dokumens = Dokumen::all();
        return view('Categories.IAOL', compact ('users', 'kategoris', 'divisis', 'dokumens'));
    }
    public function IBPR()
    {
        $users = auth()->user();
        $kategoris = Kategori::all();
        $divisis = Divisi::all();
        $dokumens = Dokumen::all();
        return view('Categories.IBPR', compact ('users', 'kategoris', 'divisis', 'dokumens'));
    }

    //Download file
    public function download($file_name)
    {
        $path = public_path('file\$file_name');
        $fileName = '$file_name';

        return Response::download($path, $fileName, ['Content-Type: application/zip']);
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