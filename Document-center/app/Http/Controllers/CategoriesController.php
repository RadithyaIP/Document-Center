<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        
        return view('Categories.SOP');
    }

    public function StandartOrganisasi()
    {
        return view('Categories.StandartOrganisasi');
    }
    public function ManagementRisk()
    {
        return view('Categories.ManagementRisk');
    }
    public function IAOL()
    {
        return view('Categories.IAOL');
    }
    public function IBPR()
    {
        return view('Categories.IBPR');
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