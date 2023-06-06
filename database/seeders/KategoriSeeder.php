<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     *
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('kategori')->insert([
            [
                'id' => 1,
                'nama' => 'Minuman'
            ],
            [
                'id' => 2,
                'nama' => 'Elektronik'
            ],
            [
                'id' => 3,
                'nama' => 'Makanan'
            ],
        ]);
    }
}
