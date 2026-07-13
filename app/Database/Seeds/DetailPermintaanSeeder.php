<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DetailPermintaanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_permintaan'  => 1, // Mengarah ke permintaan Andi
                'jenis_darah'    => 'Whole Blood',
                'jumlah_kantong' => 3,
                'prioritas'      => 'Urgent',
                'created_at'     => date('Y-m-d H:i:s', strtotime('-5 days')),
                'updated_at'     => date('Y-m-d H:i:s', strtotime('-5 days')),
            ],
            [
                'id_permintaan'  => 2, // Mengarah ke permintaan Siti
                'jenis_darah'    => 'Packed Red Cell',
                'jumlah_kantong' => 2,
                'prioritas'      => 'Tinggi',
                'created_at'     => date('Y-m-d H:i:s', strtotime('-2 days')),
                'updated_at'     => date('Y-m-d H:i:s', strtotime('-2 days')),
            ],
            [
                'id_permintaan'  => 3, // Mengarah ke permintaan Rizki
                'jenis_darah'    => 'Fresh Frozen Plasma',
                'jumlah_kantong' => 4,
                'prioritas'      => 'Normal',
                'created_at'     => date('Y-m-d H:i:s', strtotime('-1 days')),
                'updated_at'     => date('Y-m-d H:i:s', strtotime('-1 days')),
            ],
            [
                'id_permintaan'  => 4, // Mengarah ke permintaan Rina
                'jenis_darah'    => 'Whole Blood',
                'jumlah_kantong' => 2,
                'prioritas'      => 'Urgent',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'id_permintaan'  => 5, // Mengarah ke permintaan Budi
                'jenis_darah'    => 'Thrombocyte Concentrate',
                'jumlah_kantong' => 1,
                'prioritas'      => 'Rendah',
                'created_at'     => date('Y-m-d H:i:s', strtotime('-10 days')),
                'updated_at'     => date('Y-m-d H:i:s', strtotime('-10 days')),
            ]
        ];

        $this->db->table('detail_permintaan')->insertBatch($data);
    }
}