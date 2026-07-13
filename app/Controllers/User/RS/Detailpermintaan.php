<?php

namespace App\Controllers\User\RS;

use App\Controllers\BaseController;
use App\Models\PermintaanDarahModel;

class DetailPermintaan extends BaseController
{
    // Variabel $id akan otomatis terisi dari URL saat tombol detail diklik
    public function index($id)
    {
        $model = new PermintaanDarahModel();
        
        // Ambil data SPESIFIK berdasarkan ID yang diklik
        $builder = $model->select('permintaan_darah.*, pasien.no_rm, pasien.nama_pasien, pasien.golongan_darah, pasien.rhesus, detail_permintaan.jenis_darah, detail_permintaan.jumlah_kantong, detail_permintaan.prioritas')
            ->join('pasien', 'pasien.id_pasien = permintaan_darah.id_pasien')
            ->join('detail_permintaan', 'detail_permintaan.id_permintaan = permintaan_darah.id_permintaan')
            ->where('permintaan_darah.id_permintaan', $id);

        // Gunakan getRowArray() karena kita hanya butuh 1 baris data
        $data['detail'] = $builder->get()->getRowArray();

        // Jika user iseng memasukkan ID yang tidak ada di URL, kembalikan ke riwayat
        if (empty($data['detail'])) {
            return redirect()->to(base_url('rs/riwayat_permintaan'))->with('error', 'Data tidak ditemukan.');
        }

        return view('Tampilan_RS/detail_permintaan', $data);
    }
}