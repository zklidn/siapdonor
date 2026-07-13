<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;
use App\Models\DonorModel;

class TambahDonor extends BaseController
{
    public function tambah()
    {
        return view('Tampilan_PMI/tambah_pendonor');
    }

    public function simpan()
    {
        $donorModel = new DonorModel();

        // 1. Setup Aturan Validasi (Cek NIK Unik & Validasi File Foto)
        $rules = [
            'nik' => [
                'rules'  => 'required|is_unique[donor.nik]',
                'errors' => ['is_unique' => 'Mohon maaf, No. NIK/KTP sudah terdaftar sebelumnya.']
            ],
            'foto' => [
                'rules'  => 'max_size[foto,2048]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran foto maksimal 2MB.',
                    'is_image' => 'File yang diunggah harus berupa gambar.',
                    'mime_in'  => 'Format foto harus JPG, JPEG, atau PNG.'
                ]
            ]
        ];

        // 2. Jalankan Validasi
        if (!$this->validate($rules)) {
            $validation = \Config\Services::validation();
            // Ambil error pertama untuk ditampilkan sebagai flashdata
            $errorMsg = $validation->hasError('nik') ? $validation->getError('nik') : $validation->getError('foto');
            
            return redirect()->back()->withInput()->with('error', $errorMsg);
        }

        // 3. Handle Upload Foto
        $fileFoto = $this->request->getFile('foto');
        $namaFoto = 'default.png'; // Fallback jika tidak ada foto yang diunggah

        // Cek apakah ada file yang diunggah dan valid
        if ($fileFoto && $fileFoto->isValid() && !$fileFoto->hasMoved()) {
            $namaFoto = $fileFoto->getRandomName(); // Generate nama unik (misal: 168234.jpg)
            $fileFoto->move('uploads/avatar_donor', $namaFoto);
        }

        // 4. Simpan ke Database
        $donorModel->save([
            'id_user'        => session()->get('id_user'), // Pastikan session id_user sedang aktif
            'nik'            => $this->request->getPost('nik'),
            'nama'           => $this->request->getPost('nama'),
            'tempat_lahir'   => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir'  => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin'  => $this->request->getPost('jenis_kelamin'),
            'golongan_darah' => $this->request->getPost('golongan_darah'),
            'rhesus'         => $this->request->getPost('rhesus'),
            'no_hp'          => $this->request->getPost('no_hp'),
            'kecamatan'      => $this->request->getPost('kecamatan'),
            'alamat'         => $this->request->getPost('alamat'),
            'status'         => $this->request->getPost('status'),
            'foto'           => $namaFoto
        ]);

        return redirect()->to(base_url('pmi/cari_donor'))
                         ->with('success', 'Data Pendonor berhasil ditambahkan');
    }
}