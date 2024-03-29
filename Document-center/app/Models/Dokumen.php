<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_dokumen',
        'kategori',
        'user_id',
        'divisi',
        'nama_dokumen',
        'revisi',
        'keterangan',
        'file',
    ];
    public function kategoris(){
        return $this->belongsTo('App\Models\Kategori');
    }
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
    public function divisis(){
        return $this->belongsTo('App\Models\Divisi');
    }

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['revisi'])
        ->format('d, M Y');
    }

}