<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class kategori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            'name' => 'Petunjuk Organisasi '
        ],[
            'name' => 'SOP'
        ], [
            'name' => 'Standard Organisasi'
        ], [
            'name' => 'Manajemen Risiko'
        ], [
            'name' => 'IOAL'
        ], [
            'name' => 'IBPR'
        ]);
    }
}
