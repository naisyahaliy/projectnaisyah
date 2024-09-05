<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
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
        User::create([
            'name' => 'Nai',
            'email' => 'nai@gmail.com',
            'password' => bcrypt ('1234')
        ]);
        Produk::create([
            'nama' => 'Parfume Dior',
            'kategori' => 'blablabla',
            'harga' => 250000,
            'jumlah' => 2,
            'stok' => 20,
            'foto' => ''
        ]);
        Produk::create([
            'nama' => 'Parfume Sauvage',
            'kategori' => 'blablabla',
            'harga' => 300000,
            'jumlah' => 1,
            'stok' => 50,
            'foto' => ''
        ]);

    }
}
