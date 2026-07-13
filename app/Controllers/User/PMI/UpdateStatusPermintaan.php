<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;
use App\Models\PermintaanDarahModel;

class UpdateStatusPermintaan extends BaseController 
{
    // Fungsi untuk menampilkan halaman update
    public function Update()
    {
        // Tangkap ID dari URL (contoh: ?id_permintaan=1)
        $id_permintaan = $this->request->getGet('id_permintaan');
        $permintaanModel = new PermintaanDarahModel();

        // Lakukan JOIN agar nama pasien, RS, dan darah terbaca
        if ($id_permintaan) {
            $data['permintaan'] = $permintaanModel
                ->select('permintaan_darah.*, 
                          users.nama AS nama_rs, 
                          pasien.nama_pasien, pasien.golongan_darah, pasien.rhesus, 
                          detail_permintaan.prioritas, detail_permintaan.jumlah_kantong')
                ->join('users', 'users.id = permintaan_darah.id_user', 'left')
                ->join('pasien', 'pasien.id_pasien = permintaan_darah.id_pasien')
                ->join('detail_permintaan', 'detail_permintaan.id_permintaan = permintaan_darah.id_permintaan')
                ->where('permintaan_darah.id_permintaan', $id_permintaan)
                ->first();
        } else {
            // Jika tidak ada ID di URL, kembalikan ke halaman sebelumnya
            return redirect()->to(base_url('pmi/permintaan_masuk'));
        }

        // Variabel riwayat dikosongkan sementara karena kita belum membuat tabel riwayat di database
        $data['riwayat_status'] = []; 

        return view('Tampilan_PMI/update_status_permintaan', $data);
    }

    // Fungsi untuk mengeksekusi penyimpanan ke database saat tombol ditekan
    public function simpanStatus()
    {
        $id_permintaan = $this->request->getPost('id_permintaan');
        $status        = $this->request->getPost('status');
        
        // (Catatan: Kolom 'catatan_pmi' tidak saya masukkan query karena di tabel 
        // permintaan_darah kamu sebelumnya belum ada kolom untuk menyimpannya)

        if ($id_permintaan && $status) {
            $permintaanModel = new PermintaanDarahModel();
            
            // Update statusnya di tabel permintaan_darah
            $permintaanModel->update($id_permintaan, [
                'status' => $status
            ]);
        }

        // Setelah berhasil disimpan, kembalikan user ke halaman Permintaan Masuk
        return redirect()->to(base_url('pmi/permintaan_masuk'));
    }
}