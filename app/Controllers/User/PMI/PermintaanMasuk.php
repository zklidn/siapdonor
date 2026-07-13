<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;
use App\Models\PermintaanDarahModel;

class PermintaanMasuk extends BaseController
{
    public function permintaan()
    {
        $permintaan = new PermintaanDarahModel();

        // Ambil nilai filter dari URL
        $keyword   = $this->request->getGet('keyword');
        $status    = $this->request->getGet('status');
        $prioritas = $this->request->getGet('prioritas');

        // Melakukan JOIN 4 Tabel (permintaan_darah, users, pasien, detail_permintaan)
        $builder = $permintaan
            ->select('permintaan_darah.*, 
                      users.nama AS nama_rs, 
                      pasien.nama_pasien, pasien.golongan_darah, pasien.rhesus, 
                      detail_permintaan.prioritas')
            ->join('users', 'users.id = permintaan_darah.id_user', 'left')
            ->join('pasien', 'pasien.id_pasien = permintaan_darah.id_pasien')
            ->join('detail_permintaan', 'detail_permintaan.id_permintaan = permintaan_darah.id_permintaan');

        // Filter pencarian
        if (!empty($keyword)) {
            $builder->groupStart()
                ->like('permintaan_darah.id_permintaan', $keyword)
                ->orLike('pasien.nama_pasien', $keyword) // <-- Diubah agar mencari di tabel pasien
                ->orLike('users.nama', $keyword)
                ->groupEnd();
        }

        // Filter status
        if (!empty($status)) {
            $builder->where('permintaan_darah.status', $status);
        }

        // Filter prioritas
        if (!empty($prioritas)) {
            $builder->where('detail_permintaan.prioritas', $prioritas); // <-- Diubah ke tabel detail_permintaan
        }

        $data['permintaan_masuk_db'] = $builder
            ->orderBy('permintaan_darah.created_at', 'DESC')
            ->findAll();

        // Kirim nilai filter ke view
        $data['keyword']   = $keyword;
        $data['status']    = $status;
        $data['prioritas'] = $prioritas;

        return view('Tampilan_PMI/permintaan_masuk', $data);
    }

    public function detail($id)
    {
        $permintaanModel = new PermintaanDarahModel();

        // Query final yang sudah 100% sinkron dengan database kamu
        $data['permintaan'] = $permintaanModel
            ->select('permintaan_darah.*, 
                      permintaan_darah.diagnosis AS diagnosa, 
                      users.nama AS nama_rs, 
                      pasien.nama_pasien, pasien.golongan_darah, pasien.rhesus, pasien.no_rm, 
                      detail_permintaan.prioritas, detail_permintaan.jumlah_kantong, detail_permintaan.jenis_darah')
            ->join('users', 'users.id = permintaan_darah.id_user', 'left')
            ->join('pasien', 'pasien.id_pasien = permintaan_darah.id_pasien')
            ->join('detail_permintaan', 'detail_permintaan.id_permintaan = permintaan_darah.id_permintaan')
            ->where('permintaan_darah.id_permintaan', $id)
            ->first();

        if (!$data['permintaan']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data tidak ditemukan');
        }

        return view('Tampilan_PMI/detail_permintaan', $data);
    }
}