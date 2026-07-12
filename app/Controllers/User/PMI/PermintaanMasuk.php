<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;
use App\Models\PermintaanDarahModel;

class PermintaanMasuk extends BaseController
{
    public function permintaan()
    {
        $permintaan = new PermintaanDarahModel();

        $data['permintaan_masuk_db'] = $permintaan
            ->select('permintaan_darah.*, users.nama AS nama_rs')
            ->join('users', 'users.id = permintaan_darah.id_user')
            ->orderBy('permintaan_darah.created_at', 'DESC')
            ->findAll();

        return view('Tampilan_PMI/permintaan_masuk', $data);
    }

    public function detail($id)
    {
        $permintaanModel = new PermintaanDarahModel();

        $data['permintaan'] = $permintaanModel
            ->select('permintaan_darah.*, users.nama AS nama_rs')
            ->join('users', 'users.id = permintaan_darah.id_user')
            ->where('permintaan_darah.id_permintaan', $id)
            ->first();

        if (!$data['permintaan']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data tidak ditemukan');
        }

        return view('Tampilan_PMI/detail_permintaan', $data);
    }
}