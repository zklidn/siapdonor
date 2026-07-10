<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 1. Panggil tabel-tabel Master yang tidak bergantung pada tabel lain
        $this->call('UserSeeder');
        $this->call('DonorSeeder');
        $this->call('PermintaanDarahSeeder'); // Dipindah ke atas agar ID-nya dibuat lebih dulu

        // 2. Panggil tabel yang menggunakan ID dari tabel di atas
        $this->call('PasienSeeder');          // Bergantung pada PermintaanDarah
        $this->call('DetailPermintaanSeeder'); // Bergantung pada PermintaanDarah / Donor

        // 3. Panggil tabel pelengkap
        $this->call('LogAktivitasSeeder');
        $this->call('NotifikasiSeeder');
    }
}