<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DetailPermintaanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_permintaan'  => 1, // Menghubungkan ke tabel induk
                'tanggal'        => '2025-05-20 10:30:00',
                'nama_pasien'    => 'Andi Saputra',
                'golongan_darah' => 'O+',
                'jenis_darah'    => 'Whole Blood',
                'jumlah_kantong' => 3,
                'prioritas'      => 'URGENT',
                'status'         => 'Diproses',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'id_permintaan'  => 2,
                'tanggal'        => '2025-05-19 09:15:00',
                'nama_pasien'    => 'Siti Nurhaliza',
                'golongan_darah' => 'A+',
                'jenis_darah'    => 'Packed Red Cell',
                'jumlah_kantong' => 2,
                'prioritas'      => 'TINGGI',
                'status'         => 'Diproses',
                'created_at'     => date('Y-m-d H:i:s', strtotime('-2 days')),
                'updated_at'     => date('Y-m-d H:i:s', strtotime('-2 days')),
            ],
            [
                'id_permintaan'  => 3,
                'tanggal'        => '2025-05-18 14:20:00',
                'nama_pasien'    => 'Muh. Rizki',
                'golongan_darah' => 'B+',
                'jenis_darah'    => 'Fresh Frozen Plasma',
                'jumlah_kantong' => 4,
                'prioritas'      => 'NORMAL',
                'status'         => 'Donor Ditemukan',
                'created_at'     => date('Y-m-d H:i:s', strtotime('-1 day')),
                'updated_at'     => date('Y-m-d H:i:s', strtotime('-1 day')),
            ],
        ];

        // Memasukkan data secara massal ke tabel detail_permintaan
        $this->db->table('detail_permintaan')->insertBatch($data);
    }
}