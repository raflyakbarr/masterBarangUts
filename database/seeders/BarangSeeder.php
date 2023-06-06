<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('barang')->insert([

            [
                'kode_barang' => 'BRG0001',
                'nama_barang' => 'Aqua',
                'id_kategori' => 1,
                'harga' => '2500',
                'jumlah' => 50,
                'deskripsi' => 'Ini Aqua'
            ],
            [
                'kode_barang' => 'BRG0002',
                'nama_barang' => 'Speaker',
                'id_kategori' => 2,
                'harga' => '50000',
                'jumlah' => 2,
                'deskripsi' => 'Ini speaker'
            ]
        ]);
    }
}
