<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'          => 'Admin',
                'email'         => 'admin1@pmi.go.id',
                'password'      => password_hash('password123', PASSWORD_DEFAULT),
                'nomor_telepon' => '081234567890',
                'alamat'        => 'Jl. Sudirman No. 1, Jakarta',
                'role'          => 'admin',
                'file_foto'     => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'nama'          => 'Admin',
                'email'         => 'admin2@pmi.go.id',
                'password'      => password_hash('password123', PASSWORD_DEFAULT),
                'nomor_telepon' => '081234567893',
                'alamat'        => 'Jl. Gatot Subroto No. 5, Jakarta',
                'role'          => 'admin',
                'file_foto'     => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'nama'          => 'Admin',
                'email'         => 'admin3@pmi.go.id',
                'password'      => password_hash('password123', PASSWORD_DEFAULT),
                'nomor_telepon' => '081234567894',
                'alamat'        => 'Jl. Urip Sumoharjo, Makassar',
                'role'          => 'admin',
                'file_foto'     => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'nama'          => 'Admin',
                'email'         => 'admin4@pmi.go.id',
                'password'      => password_hash('password123', PASSWORD_DEFAULT),
                'nomor_telepon' => '081234567895',
                'alamat'        => 'Jl. Veteran Selatan, Makassar',
                'role'          => 'admin',
                'file_foto'     => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'nama'          => 'Petugas PMI Kota Palu',
                'email'         => 'pmi.palu@pmi.go.id',
                'password'      => password_hash('password123', PASSWORD_DEFAULT),
                'nomor_telepon' => '081234567891',
                'alamat'        => 'Jl. Setia Budi, Palu',
                'role'          => 'pmi',
                'file_foto'     => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'nama'          => 'Petugas PMI Kabupaten Sigi',
                'email'         => 'pmi.sigi@pmi.go.id',
                'password'      => password_hash('password123', PASSWORD_DEFAULT),
                'nomor_telepon' => '081234567896',
                'alamat'        => 'Jl. Poros Palu-Kulawi, Sigi',
                'role'          => 'pmi',
                'file_foto'     => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'nama'          => 'Petugas PMI Kabupaten Donggala',
                'email'         => 'pmi.donggala@pmi.go.id',
                'password'      => password_hash('password123', PASSWORD_DEFAULT),
                'nomor_telepon' => '081234567897',
                'alamat'        => 'Jl. Trans Sulawesi, Donggala',
                'role'          => 'pmi',
                'file_foto'     => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'nama'          => 'RSUD Undata Palu',
                'email'         => 'admin@rsudundata.go.id',
                'password'      => password_hash('password123', PASSWORD_DEFAULT),
                'nomor_telepon' => '081234567892',
                'alamat'        => 'Jl. RE Martadinata, Palu',
                'role'          => 'rumah_sakit',
                'file_foto'     => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'nama'          => 'RSUD Anutapura Palu',
                'email'         => 'admin@rsudanutapura.go.id',
                'password'      => password_hash('password123', PASSWORD_DEFAULT),
                'nomor_telepon' => '081234567898',
                'alamat'        => 'Jl. Kangkung No. 1, Palu',
                'role'          => 'rumah_sakit',
                'file_foto'     => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'nama'          => 'RS Woodward Palu',
                'email'         => 'admin@rswoodwardpalu.com',
                'password'      => password_hash('password123', PASSWORD_DEFAULT),
                'nomor_telepon' => '081234567899',
                'alamat'        => 'Jl. L.H. Woodward No. 1, Palu',
                'role'          => 'rumah_sakit',
                'file_foto'     => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}