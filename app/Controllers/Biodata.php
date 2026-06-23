<?php

namespace App\Controllers;

use App\Models\Usermodels;

class Biodata extends BaseController
{
    public function index()
    {
        return view('biodata');
    }

    public function simpan_biodata()
    {
        $userModel = new Usermodels();

        // Mengambil ID dari session register (Pastikan namanya sesuai dengan saat set session di Register)
        $userId = session()->get('id_user'); 

        // Proteksi jika user langsung akses URL tanpa melewati halaman register
        if (!$userId) {
            return redirect()->to('/register')->with('error', 'Sesi pendaftaran tidak ditemukan, silakan daftar kembali.');
        }

        $foto = $this->request->getFile('foto_profil');
        $fotoBlob = null;

        // Validasi dan konversi gambar ke Blob
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $fotoBlob = file_get_contents($foto->getTempName());
        }

        // Update data biodata ke tabel users
        $userModel->update($userId, [
            'nama'          => $this->request->getPost('nama_instansi'),
            'nomor_telepon' => $this->request->getPost('no_telepon'),
            'alamat'        => $this->request->getPost('alamat'),
            'file_foto'     => $fotoBlob
        ]);

        // Bersihkan session registrasi agar aman
        session()->destroy();

        // Redirect ke login dengan pesan sukses
        session()->setFlashdata('pesan', 'Biodata berhasil disimpan. Silakan masuk menggunakan akun Anda.');
        return redirect()->to('/login');
    }
}