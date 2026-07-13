<?php

namespace App\Controllers\User\RS;

use App\Controllers\BaseController;
use App\Models\PermintaanDarahModel;
use App\Models\DetailPermintaanModel;
use App\Models\PasienModel;

class BuatPermintaan extends BaseController
{
    // Ini fungsi untuk memunculkan form jika user mengakses rute GET
    public function index()
    {
        return view('Tampilan_RS/permintaan_darah'); 
    }

    // Ini fungsi untuk memproses form saat disubmit (POST)
    public function simpan()
    {
        $pasienModel     = new PasienModel();
        $permintaanModel = new PermintaanDarahModel();
        $detailModel     = new DetailPermintaanModel();

        // 1. Tangkap inputan sesuai atribut "name" di HTML kamu
        $no_rm          = $this->request->getPost('no_rm');
        $nama_pasien    = $this->request->getPost('nama_pasien');
        $gol_darah      = $this->request->getPost('gol_darah'); // Menyesuaikan HTML
        $rhesus         = $this->request->getPost('rhesus');
        
        $ruangan        = $this->request->getPost('ruangan');
        $diagnosis      = $this->request->getPost('diagnosis');
        
        $jumlah_kantong = $this->request->getPost('jumlah_kantong');
        $prioritas      = $this->request->getPost('prioritas');
        
        $id_user = session()->get('id_user') ?? 1;

        // 2. SIMPAN KE TABEL PASIEN
        $cekPasien = $pasienModel->where('no_rm', $no_rm)->first();
        if ($cekPasien) {
            $id_pasien = $cekPasien['id_pasien'];
        } else {
            $pasienModel->insert([
                'no_rm'          => $no_rm,
                'nama_pasien'    => $nama_pasien,
                'golongan_darah' => $gol_darah,
                'rhesus'         => $rhesus,
            ]);
            $id_pasien = $pasienModel->getInsertID();
        }

        // 3. SIMPAN KE TABEL PERMINTAAN DARAH
        $permintaanModel->insert([
            'id_user'   => $id_user,
            'id_pasien' => $id_pasien,
            'ruangan'   => $ruangan,
            'diagnosis' => $diagnosis,
            'status'    => 'Diproses',
        ]);
        $id_permintaan = $permintaanModel->getInsertID();

        // 4. SIMPAN KE TABEL DETAIL PERMINTAAN
        $detailModel->insert([
            'id_permintaan'  => $id_permintaan,
            'jenis_darah'    => 'Whole Blood', 
            'jumlah_kantong' => $jumlah_kantong,
            'prioritas'      => $prioritas,
        ]);

        // 5. KEMBALI KE FORM & MUNCULKAN POP-UP SUKSES
       // Sesuaikan dengan nama rute halaman form kamu
        return redirect()->to(base_url('rs/permintaan_darah'))->with('success', 'Permintaan darah berhasil dikirim!');
    }
}