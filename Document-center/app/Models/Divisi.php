<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_dokumen',
        'nama_dokumen',
        'keterangan',
    ];
    public function users(){
        return $this->hasMany('App\Models\User');
    }
}