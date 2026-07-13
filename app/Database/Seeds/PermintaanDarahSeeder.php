<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PermintaanDarahSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_user'    => 1, // Asumsi ID Rumah Sakit adalah 1
                'id_pasien'  => 1, // Mengambil data Andi Saputra
                'ruangan'    => 'ICU',
                'diagnosis'  => 'Demam Berdarah Dengue (DBD)',
                'status'     => 'Selesai',
                'created_at' => date('Y-m-d H:i:s', strtotime('-5 days')),
                'updated_at' => date('Y-m-d H:i:s', strtotime('-4 days')),
            ],
            [
                'id_user'    => 1,
                'id_pasien'  => 2, // Siti Nurhaliza
                'ruangan'    => 'IGD',
                'diagnosis'  => 'Pendarahan Pasca Trauma',
                'status'     => 'Donor Ditemukan',
                'created_at' => date('Y-m-d H:i:s', strtotime('-2 days')),
                'updated_at' => date('Y-m-d H:i:s', strtotime('-2 days')),
            ],
            [
                'id_user'    => 1,
                'id_pasien'  => 3, // Muh. Rizki
                'ruangan'    => 'Rawat Inap',
                'diagnosis'  => 'Anemia Kronis',
                'status'     => 'Diproses',
                'created_at' => date('Y-m-d H:i:s', strtotime('-1 days')),
                'updated_at' => date('Y-m-d H:i:s', strtotime('-1 days')),
            ],
            [
                'id_user'    => 1,
                'id_pasien'  => 4, // Rina Melati
                'ruangan'    => 'IGD',
                'diagnosis'  => 'Kecelakaan Lalu Lintas',
                'status'     => 'Diproses',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_user'    => 1,
                'id_pasien'  => 5, // Budi Santoso
                'ruangan'    => 'ICU',
                'diagnosis'  => 'Operasi Mayor',
                'status'     => 'Dibatalkan',
                'created_at' => date('Y-m-d H:i:s', strtotime('-10 days')),
                'updated_at' => date('Y-m-d H:i:s', strtotime('-10 days')),
            ]
        ];

        $this->db->table('permintaan_darah')->insertBatch($data);
    }
}