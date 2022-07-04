<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategorisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            'nama' => ('Petunjuk Organisasi')
        ]);
        DB::table('kategoris')->insert([
            'nama' => ('SOP')
        ]);
        DB::table('kategoris')->insert([
            'nama' => ('Standard Organisasi')
        ]);
        DB::table('kategoris')->insert([
            'nama' => ('Manajemen Risiko')
        ]);
        DB::table('kategoris')->insert([
            'nama' => ('IAOL')
        ]);
        DB::table('kategoris')->insert([
            'nama' => ('IBPR')
        ]);
    }
}
