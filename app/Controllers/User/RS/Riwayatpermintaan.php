<?php

namespace App\Controllers\User\RS;

use App\Controllers\BaseController;
use App\Models\PermintaanDarahModel;

class RiwayatPermintaan extends BaseController
{
    public function index()
    {
        $model = new PermintaanDarahModel();
        
        // 1. Tangkap inputan dari form pencarian/filter
        $keyword   = $this->request->getGet('keyword');
        $status    = $this->request->getGet('status');
        $prioritas = $this->request->getGet('prioritas');
        
        $builder = $model->select('permintaan_darah.*, pasien.nama_pasien, pasien.golongan_darah, pasien.rhesus, detail_permintaan.jumlah_kantong, detail_permintaan.prioritas')
            ->join('pasien', 'pasien.id_pasien = permintaan_darah.id_pasien')
            ->join('detail_permintaan', 'detail_permintaan.id_permintaan = permintaan_darah.id_permintaan');

        // 2. Logika Pencarian (Berdasarkan ID atau Nama Pasien)
        if (!empty($keyword)) {
            // Hilangkan kata 'REQ-' jika user mengetiknya agar ID tetap terbaca sebagai angka
            $cleanKeyword = str_ireplace('REQ-', '', $keyword); 
            $builder->groupStart()
                    ->like('permintaan_darah.id_permintaan', $cleanKeyword)
                    ->orLike('pasien.nama_pasien', $keyword)
                    ->groupEnd();
        }

        // 3. Logika Filter Status
        if (!empty($status) && $status != 'Semua Status') {
            $builder->where('permintaan_darah.status', $status);
        }

        // 4. Logika Filter Prioritas
        if (!empty($prioritas) && $prioritas != 'Semua Prioritas') {
            $builder->where('detail_permintaan.prioritas', $prioritas);
        }

        $builder->orderBy('permintaan_darah.created_at', 'DESC');

        // Eksekusi data
        $data['riwayat_permintaan'] = $builder->paginate(5, 'riwayat');
        $data['pager'] = $model->pager;
        
        // Kirim kembali nilai inputan ke View agar kolom tidak tereset setelah mencari
        $data['keyword']   = $keyword;
        $data['stt_aktif'] = $status;
        $data['prio_aktif']= $prioritas;
        
        return view('Tampilan_RS/riwayat_permintaan', $data);
    }
}