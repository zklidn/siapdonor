<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PasienSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_permintaan'  => 1, // permintaan RSUD Undata Palu
                'nama'           => 'Siti Aminah',
                'umur'           => '28',
                'diagnosa'       => 'Pendarahan pasca operasi caesar',
                'golongan_darah' => 'O',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'id_permintaan'  => 2, // permintaan RSUD Undata Palu
                'nama'           => 'Ahmad Fauzi',
                'umur'           => '15',
                'diagnosa'       => 'Thalasemia mayor',
                'golongan_darah' => 'AB',
                'created_at'     => date('Y-m-d H:i:s', strtotime('-2 days')),
                'updated_at'     => date('Y-m-d H:i:s', strtotime('-2 days')),
            ],
            [
                'id_permintaan'  => 3, // permintaan RSUD Anutapura Palu
                'nama'           => 'Dedi Kurniawan',
                'umur'           => '52',
                'diagnosa'       => 'Persiapan operasi bypass jantung',
                'golongan_darah' => 'A',
                'created_at'     => date('Y-m-d H:i:s', strtotime('-1 day')),
                'updated_at'     => date('Y-m-d H:i:s', strtotime('-1 day')),
            ],
        ];

        $this->db->table('pasien')->insertBatch($data);
    }
}