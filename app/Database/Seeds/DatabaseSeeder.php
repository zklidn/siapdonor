<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 1. Panggil tabel-tabel Master (Induk) yang berdiri sendiri
        $this->call('UserSeeder');
        $this->call('DonorSeeder');
        $this->call('PasienSeeder'); // Pindah ke sini: Pasien harus lahir duluan!

        // 2. Panggil tabel Transaksi (Anak) yang menggunakan ID dari tabel Master
        $this->call('PermintaanDarahSeeder');  // Butuh id_user dan id_pasien
        
        // 3. Panggil tabel Detail Transaksi (Cucu)
        $this->call('DetailPermintaanSeeder'); // Butuh id_permintaan

        // 4. Panggil tabel pelengkap
        $this->call('LogAktivitasSeeder');
        $this->call('NotifikasiSeeder');
    }
}