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
                'nama_pasien'    => 'Budi Santoso',
                'no_rm'          => 'RM-100200',
                'ruangan'        => 'UGD',
                'diagnosis'      => 'Operasi caesar darurat',
                'golongan_darah' => 'O',
                'rhesus'         => '+',
                'jumlah_kantong' => 2,
                'prioritas'      => 'Urgent',
                'status'         => 'Diproses',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                // id_permintaan = 2 (otomatis)
                'id_user'        => 8, // RSUD Undata Palu
                'nama_pasien'    => 'Siti Aminah',
                'no_rm'          => 'RM-100201',
                'ruangan'        => 'Ruang Anak',
                'diagnosis'      => 'Transfusi pasien thalasemia',
                'golongan_darah' => 'AB',
                'rhesus'         => '+',
                'jumlah_kantong' => 3,
                'prioritas'      => 'Normal',
                'status'         => 'Selesai',
                'created_at'     => date('Y-m-d H:i:s', strtotime('-2 days')),
                'updated_at'     => date('Y-m-d H:i:s', strtotime('-2 days')),
            ],
            [
                // id_permintaan = 3 (otomatis)
                'id_user'        => 9, // RSUD Anutapura Palu
                'nama_pasien'    => 'Andi Wijaya',
                'no_rm'          => 'RM-200300',
                'ruangan'        => 'ICU',
                'diagnosis'      => 'Persiapan operasi jantung',
                'golongan_darah' => 'A',
                'rhesus'         => '+',
                'jumlah_kantong' => 4,
                'prioritas'      => 'Tinggi',
                'status'         => 'Diproses',
                'created_at'     => date('Y-m-d H:i:s', strtotime('-1 day')),
                'updated_at'     => date('Y-m-d H:i:s', strtotime('-1 day')),
            ],
        ];

        $this->db->table('permintaan_darah')->insertBatch($data);
    }
}