<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Divisi;
class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisis')->insert([
            'nama' => ('IT')
        ]);
        DB::table('divisis')->insert([
            'nama' => ('HCM')
        ]);
    }
}
