<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LogAktivitasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_user'    => 1, // Admin (admin1@pmi.go.id)
                'aktivitas'  => 'Login ke sistem',
                'keterangan' => 'Admin berhasil login',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_user'    => 8, // RSUD Undata Palu
                'aktivitas'  => 'Membuat permintaan darah',
                'keterangan' => 'Permintaan darah golongan O untuk pasien Siti Aminah',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_user'    => 5, // Petugas PMI Kota Palu
                'aktivitas'  => 'Menambahkan data donor baru',
                'keterangan' => 'Pendonor Budi Santoso berhasil didaftarkan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('log_aktivitas')->insertBatch($data);
    }
}