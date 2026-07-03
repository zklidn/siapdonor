<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DetailPermintaanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_permintaan' => 1, // permintaan RSUD Undata Palu
                'jenis_darah'   => 'Whole Blood',
                'jumlah'        => 2,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id_permintaan' => 2, // permintaan RSUD Undata Palu
                'jenis_darah'   => 'Packed Red Cell',
                'jumlah'        => 3,
                'created_at'    => date('Y-m-d H:i:s', strtotime('-2 days')),
                'updated_at'    => date('Y-m-d H:i:s', strtotime('-2 days')),
            ],
            [
                'id_permintaan' => 3, // permintaan RSUD Anutapura Palu
                'jenis_darah'   => 'Fresh Frozen Plasma',
                'jumlah'        => 4,
                'created_at'    => date('Y-m-d H:i:s', strtotime('-1 day')),
                'updated_at'    => date('Y-m-d H:i:s', strtotime('-1 day')),
            ],
        ];

        $this->db->table('detail_permintaan')->insertBatch($data);
    }
}