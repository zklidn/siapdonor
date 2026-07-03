<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DonorSeeder extends Seeder
{
    public function run()
    {
        // Kosongkan dulu data lama supaya tidak terjadi duplicate entry
        // saat seeder ini dijalankan berkali-kali
        $this->db->query('SET FOREIGN_KEY_CHECKS = 0');
        $this->db->table('donor')->truncate();
        $this->db->query('SET FOREIGN_KEY_CHECKS = 1');

        $data = [
            [
                'id_user'        => 1, // Petugas PMI Kota Palu
                'nik'            => '7371012345670001',
                'nama'           => 'Budi Santoso',
                'tempat_lahir'   => 'Palu',
                'tanggal_lahir'  => '1995-03-12',
                'jenis_kelamin'  => 'Laki-laki',
                'golongan_darah' => 'O',
                'rhesus'         => '+',
                'kecamatan'      => 'Palu Selatan',
                'status'         => 'Aktif',
                'no_hp'          => '081298765432',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'id_user'        => 2, // Petugas PMI Kota Palu
                'nik'            => '7371012345670002',
                'nama'           => 'Rina Wulandari',
                'tempat_lahir'   => 'Palu',
                'tanggal_lahir'  => '1998-07-25',
                'jenis_kelamin'  => 'Perempuan',
                'golongan_darah' => 'AB',
                'rhesus'         => '+',
                'kecamatan'      => 'Palu Timur',
                'status'         => 'Aktif',
                'no_hp'          => '081298765433',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'id_user'        => 3, // Petugas PMI Kabupaten Sigi
                'nik'            => '7371012345670003',
                'nama'           => 'Andi Pratama',
                'tempat_lahir'   => 'Sigi',
                'tanggal_lahir'  => '1997-11-02',
                'jenis_kelamin'  => 'Laki-laki',
                'golongan_darah' => 'B',
                'rhesus'         => '+',
                'kecamatan'      => 'Palu Utara',
                'status'         => 'Aktif',
                'no_hp'          => '081298765434',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'id_user'        => 4, // Petugas PMI Kota Palu
                'nik'            => '7371012345670004',
                'nama'           => 'Muhammad Iqbal',
                'tempat_lahir'   => 'Palu',
                'tanggal_lahir'  => '1993-05-18',
                'jenis_kelamin'  => 'Laki-laki',
                'golongan_darah' => 'A',
                'rhesus'         => '+',
                'kecamatan'      => 'Palu Barat',
                'status'         => 'Aktif',
                'no_hp'          => '081298765435',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'id_user'        => 5, // Petugas PMI Kota Palu
                'nik'            => '7371012345670005',
                'nama'           => 'Fitriani Amir',
                'tempat_lahir'   => 'Palu',
                'tanggal_lahir'  => '1999-09-30',
                'jenis_kelamin'  => 'Perempuan',
                'golongan_darah' => 'O',
                'rhesus'         => '-',
                'kecamatan'      => 'Tatanga',
                'status'         => 'Aktif',
                'no_hp'          => '081298765436',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'id_user'        => 6, // Petugas PMI Kabupaten Sigi
                'nik'            => '7371012345670006',
                'nama'           => 'Yusuf Hidayat',
                'tempat_lahir'   => 'Sigi',
                'tanggal_lahir'  => '1996-01-14',
                'jenis_kelamin'  => 'Laki-laki',
                'golongan_darah' => 'B',
                'rhesus'         => '-',
                'kecamatan'      => 'Biromaru',
                'status'         => 'Aktif',
                'no_hp'          => '081298765437',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'id_user'        => 7, // Petugas PMI Kabupaten Sigi
                'nik'            => '7371012345670007',
                'nama'           => 'Nurul Hasanah',
                'tempat_lahir'   => 'Sigi',
                'tanggal_lahir'  => '2000-04-22',
                'jenis_kelamin'  => 'Perempuan',
                'golongan_darah' => 'AB',
                'rhesus'         => '-',
                'kecamatan'      => 'Dolo',
                'status'         => 'Nonaktif',
                'no_hp'          => '081298765438',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'id_user'        => 8, // Petugas PMI Kota Palu
                'nama'           => 'Ahmad Zulkarnain',
                'nik'            => '7371012345670008',
                'tempat_lahir'   => 'Palu',
                'tanggal_lahir'  => '1994-12-08',
                'jenis_kelamin'  => 'Laki-laki',
                'golongan_darah' => 'A',
                'rhesus'         => '-',
                'kecamatan'      => 'Mantikulore',
                'status'         => 'Aktif',
                'no_hp'          => '081298765439',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'id_user'        => 9, // Petugas PMI Kabupaten Sigi
                'nik'            => '7371012345670009',
                'nama'           => 'Wulan Sari',
                'tempat_lahir'   => 'Sigi',
                'tanggal_lahir'  => '1998-06-27',
                'jenis_kelamin'  => 'Perempuan',
                'golongan_darah' => 'O',
                'rhesus'         => '+',
                'kecamatan'      => 'Marawola',
                'status'         => 'Aktif',
                'no_hp'          => '081298765440',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'id_user'        => 10, // Petugas PMI Kota Palu
                'nik'            => '7371012345670010',
                'nama'           => 'Reza Firmansyah',
                'tempat_lahir'   => 'Palu',
                'tanggal_lahir'  => '1992-02-19',
                'jenis_kelamin'  => 'Laki-laki',
                'golongan_darah' => 'B',
                'rhesus'         => '+',
                'kecamatan'      => 'Ulujadi',
                'status'         => 'Aktif',
                'no_hp'          => '081298765441',
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('donor')->insertBatch($data);
    }
}
