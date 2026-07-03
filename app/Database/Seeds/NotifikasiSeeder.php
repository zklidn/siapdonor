<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NotifikasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_user'    => 8, // RSUD Undata Palu
                'judul'      => 'Permintaan Darah Diproses',
                'pesan'      => 'Permintaan darah golongan O sedang diproses oleh PMI.',
                'tanggal'    => date('Y-m-d H:i:s'),
                'status'     => 'Belum Dibaca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_user'    => 5, // Petugas PMI Kota Palu
                'judul'      => 'Donor Baru Terdaftar',
                'pesan'      => 'Ada 2 pendonor baru yang mendaftar hari ini.',
                'tanggal'    => date('Y-m-d H:i:s'),
                'status'     => 'Dibaca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_user'    => 1, // Admin (admin1@pmi.go.id)
                'judul'      => 'Laporan Bulanan Tersedia',
                'pesan'      => 'Laporan aktivitas donor bulan ini sudah dapat diunduh.',
                'tanggal'    => date('Y-m-d H:i:s'),
                'status'     => 'Belum Dibaca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('notifikasi')->insertBatch($data);
    }
}