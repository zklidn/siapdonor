<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;
use App\Models\DonorModel;
use App\Models\PermintaanDarahModel; // Tambahkan ini untuk membaca data pasien

class CariDonor extends BaseController
{
    public function pendonor()
    {
        $donorModel = new DonorModel();
        $builder = $donorModel;

        // Mengambil data wilayah untuk combobox
        $data['wilayah_list'] = $donorModel
            ->select('kecamatan')
            ->groupBy('kecamatan')
            ->findAll();

        // 1. Tangkap data dari URL
        $id_permintaan = $this->request->getGet('id_permintaan');
        $gol_darah     = $this->request->getGet('gol_darah');
        $rhesus        = $this->request->getGet('rhesus');
        $kecamatan     = $this->request->getGet('kecamatan');

        // 2. FITUR PINTAR: Jika datang dari halaman Detail Permintaan (dan belum menekan tombol cari)
        if ($id_permintaan && empty($gol_darah)) {
            $permintaanModel = new PermintaanDarahModel();
            $pasien = $permintaanModel
                ->select('pasien.golongan_darah, pasien.rhesus')
                ->join('pasien', 'pasien.id_pasien = permintaan_darah.id_pasien')
                ->where('permintaan_darah.id_permintaan', $id_permintaan)
                ->first();

            if ($pasien) {
                // Setel otomatis ke golongan darah pasien
                $gol_darah = $pasien['golongan_darah'];
                $rhesus    = $pasien['rhesus'];
            }
        }

        // 3. Proses Filter Pencarian
        if (!empty($gol_darah)) {
            $builder->where('golongan_darah', $gol_darah);
        }

        if (!empty($rhesus)) {
            $builder->where('rhesus', $rhesus); // Filter Rhesus sudah diaktifkan!
        }

        if (!empty($kecamatan)) {
            $builder->where('kecamatan', $kecamatan);
        }

        // Hanya tampilkan donor yang statusnya Aktif
        $builder->where('status', 'Aktif');
        
        $data['hasil_pencarian'] = $builder->paginate(10);
        $data['pager']           = $builder->pager;

        // Kirim variabel ke tampilan agar dropdown terpilih otomatis
        $data['sel_gol_darah'] = $gol_darah;
        $data['sel_rhesus']    = $rhesus;

        return view('Tampilan_PMI/cari_donor', $data);
    }

    public function detail($id)
    {
        $donorModel = new DonorModel();
        $data['donor'] = $donorModel->find($id);

        if (!$data['donor']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data donor tidak ditemukan');
        }

        // PERBAIKAN DI SINI: Kembalikan namanya menjadi detail_donor
        return view('Tampilan_PMI/detail_donor', $data); 
    }
}