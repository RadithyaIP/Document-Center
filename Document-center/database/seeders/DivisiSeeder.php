<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $divisis=[
            [
            'id' => 1,
            'name' => 'IT',
        ],
        [
            'id' => 2,
            'name' => 'AK',
        ],
    ];
    }
}
