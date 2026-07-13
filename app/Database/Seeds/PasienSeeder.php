<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PasienSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'no_rm'          => 'RM-0001',
                'nama_pasien'    => 'Andi Saputra',
                'golongan_darah' => 'O',
                'rhesus'         => '+',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'no_rm'          => 'RM-0002',
                'nama_pasien'    => 'Siti Nurhaliza',
                'golongan_darah' => 'A',
                'rhesus'         => '+',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'no_rm'          => 'RM-0003',
                'nama_pasien'    => 'Muh. Rizki',
                'golongan_darah' => 'B',
                'rhesus'         => '+',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'no_rm'          => 'RM-0004',
                'nama_pasien'    => 'Rina Melati',
                'golongan_darah' => 'AB',
                'rhesus'         => '-',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'no_rm'          => 'RM-0005',
                'nama_pasien'    => 'Budi Santoso',
                'golongan_darah' => 'O',
                'rhesus'         => '-',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ]
        ];

        $this->db->table('pasien')->insertBatch($data);
    }
}