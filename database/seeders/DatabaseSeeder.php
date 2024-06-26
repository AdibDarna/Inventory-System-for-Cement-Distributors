<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ria Anjelina',
            'email' => 'ria19si@mahasiswa.pcr.ac.id',
            'alamat' => 'Jl. Sultan Hasanudin - dumai',
            'telephone' => '082391852977',
            'password' => Hash::make('ria19si@mahasiswa.pcr.ac.id'),
            'status' => 'admin',
        ]);

        \App\Models\Semen::create([
            'id_semen' => 999999,
            'merek_semen' => 'Tidak Ada',
            'jumlah' => 0,
            'harga_beli' => 0,
            'harga_jual' => 0,
            'eoq' => 0,
            'rop' => 0,
            'safety_stock' => 0,
        ]);

        \App\Models\Supplier::create([
            'kode_supplier' => 999999,
            'supplier' => 'Tidak Ada',
            'alamat' => '-',
            'telepon' => '-',
        ]);

        \App\Models\Supir::create([
            'kode_supir' => 999999,
            'nama_supir' => 'Tidak Ada',
            'no_hp' => '-',
            'alamat' => '-',
            'no_sim' => '-',
            'ktp' => null,
            'sim' => null

        ]);

        \App\Models\Mobil::create([
            'kode_mobil' => 999999,
            'status_kepemilikan' => '-',
            'transportir' => '-',
            'plat_nomor' => 'Tidak Ada',
            'jenis_truk' => '-',
            'merek_truk' => '-',
            'kapasitas' => 0,
            'nomor_stnk' => 0,
            'nomor_rangka' => '-',
            'nomor_gps' => '-',
            'mobil' => null,
            'stnk' => null,
        ]);
        \App\Models\Agen::create([
            'kode_agen' => 999999,
            'nama_agen' => 'Tidak Ada',
            'nama_toko' => 'Tidak Ada',
            'alamat' => '-',
            'no_hp' => 0,
            'ktp' => null,
            'toko' => null

        ]);
    }


}
