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
        $keyword = $this->request->getGet('keyword');
        $status = $this->request->getGet('status');
        $prioritas = $this->request->getGet('prioritas');

        $builder = $permintaan
            ->select('permintaan_darah.*, users.nama AS nama_rs')
            ->join('users', 'users.id = permintaan_darah.id_user');

        // Filter pencarian
        if (!empty($keyword)) {
            $builder->groupStart()
                ->like('permintaan_darah.id_permintaan', $keyword)
                ->orLike('permintaan_darah.nama_pasien', $keyword)
                ->orLike('users.nama', $keyword)
                ->groupEnd();
        }

        // Filter status
        if (!empty($status)) {
            $builder->where('permintaan_darah.status', $status);
        }

        // Filter prioritas
        if (!empty($prioritas)) {
            $builder->where('permintaan_darah.prioritas', $prioritas);
        }

        $data['permintaan_masuk_db'] = $builder
            ->orderBy('permintaan_darah.created_at', 'DESC')
            ->findAll();

        // Kirim nilai filter ke view
        $data['keyword'] = $keyword;
        $data['status'] = $status;
        $data['prioritas'] = $prioritas;

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