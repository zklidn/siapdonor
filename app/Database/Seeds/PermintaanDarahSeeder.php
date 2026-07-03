<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PermintaanDarahSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                // id_permintaan = 1 (otomatis)
                'id_user'        => 8, // RSUD Undata Palu
                'golongan_darah' => 'O',
                'tgl_permintaan' => date('Y-m-d'),
                'kebutuhan'      => 'Operasi caesar darurat',
                'status'         => 'Diproses',
                'jumlah_kantong' => 2,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                // id_permintaan = 2 (otomatis)
                'id_user'        => 8, // RSUD Undata Palu
                'golongan_darah' => 'AB',
                'tgl_permintaan' => date('Y-m-d', strtotime('-2 days')),
                'kebutuhan'      => 'Transfusi pasien thalasemia',
                'status'         => 'Selesai',
                'jumlah_kantong' => 3,
                'created_at'     => date('Y-m-d H:i:s', strtotime('-2 days')),
                'updated_at'     => date('Y-m-d H:i:s', strtotime('-2 days')),
            ],
            [
                // id_permintaan = 3 (otomatis)
                'id_user'        => 9, // RSUD Anutapura Palu
                'golongan_darah' => 'A',
                'tgl_permintaan' => date('Y-m-d', strtotime('-1 day')),
                'kebutuhan'      => 'Persiapan operasi jantung',
                'status'         => 'Diproses',
                'jumlah_kantong' => 4,
                'created_at'     => date('Y-m-d H:i:s', strtotime('-1 day')),
                'updated_at'     => date('Y-m-d H:i:s', strtotime('-1 day')),
            ],
        ];

        $this->db->table('permintaan_darah')->insertBatch($data);
    }
}