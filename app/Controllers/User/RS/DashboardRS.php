<?php

namespace App\Controllers\User\RS; 
use App\Controllers\BaseController; 
use App\Models\PermintaanDarahModel;
use App\Models\DetailPermintaanModel;
use App\Models\PasienModel;

class DashboardRS extends BaseController
{
    public function index()
    {
        $permintaanModel = new PermintaanDarahModel();
        $detailModel     = new DetailPermintaanModel();

        // --- 1. Ringkasan Status ---
        $total_permintaan = $permintaanModel->countAllResults();
        $total_proses     = $permintaanModel->where('status', 'Diproses')->countAllResults();
        $total_ditemukan  = $permintaanModel->where('status', 'Donor Ditemukan')->countAllResults();
        $total_selesai    = $permintaanModel->where('status', 'Selesai')->countAllResults();

        // --- 2. Tabel Permintaan Terbaru (JOIN 3 Tabel) ---
        $builder = $permintaanModel->builder();
        $builder->select('permintaan_darah.id_permintaan, permintaan_darah.created_at, permintaan_darah.status, 
                          pasien.nama_pasien, pasien.golongan_darah, pasien.rhesus, 
                          detail_permintaan.jumlah_kantong, detail_permintaan.prioritas');
        
        $builder->join('pasien', 'pasien.id_pasien = permintaan_darah.id_pasien');
        $builder->join('detail_permintaan', 'detail_permintaan.id_permintaan = permintaan_darah.id_permintaan');
        
        $builder->orderBy('permintaan_darah.created_at', 'DESC');
        $builder->limit(5);
        
        $permintaan_terbaru = $builder->get()->getResultArray();

        // --- 3. Kebutuhan Darah Mendesak ---
        $builderMendesak = $detailModel->builder();
        $builderMendesak->select('pasien.golongan_darah, pasien.rhesus, SUM(detail_permintaan.jumlah_kantong) as total');
        
        $builderMendesak->join('permintaan_darah', 'permintaan_darah.id_permintaan = detail_permintaan.id_permintaan');
        $builderMendesak->join('pasien', 'pasien.id_pasien = permintaan_darah.id_pasien');
        
        $builderMendesak->whereIn('permintaan_darah.status', ['Diproses', 'Donor Ditemukan']); 
        $builderMendesak->groupBy('pasien.golongan_darah, pasien.rhesus');
        
        $kebutuhan = $builderMendesak->get()->getResultArray();
        
        // Memetakan kebutuhan ke format agar tampilan tetap 5 kolom
        $kebutuhan_mendesak = ['O+' => 0, 'B+' => 0, 'A+' => 0, 'AB+' => 0, 'O-' => 0];
        foreach ($kebutuhan as $k) {
            $gol_rhesus = $k['golongan_darah'] . $k['rhesus']; 
            if (isset($kebutuhan_mendesak[$gol_rhesus])) {
                $kebutuhan_mendesak[$gol_rhesus] = $k['total'];
            }
        }

        // --- 4. Kirim ke View ---
        $data = [
            'total_permintaan'   => $total_permintaan,
            'total_proses'       => $total_proses,
            'total_ditemukan'    => $total_ditemukan,
            'total_selesai'      => $total_selesai,
            'permintaan_terbaru' => $permintaan_terbaru,
            'kebutuhan_mendesak' => $kebutuhan_mendesak
        ];

        return view('Tampilan_RS/dashboard_RS', $data); 
    }
}