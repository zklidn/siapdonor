<?php

namespace App\Controllers;

use App\Models\Usermodels;

class Biodata extends BaseController
{


     public function index(){
        echo view('biodata');

    }
    public function simpan_biodata()
    {
        $userModel = new Usermodels();

        $userId = session()->get('user_id');

        $foto = $this->request->getFile('foto_profil');

        $fotoBlob = null;

        if ($foto && $foto->isValid()) {
            $fotoBlob = file_get_contents($foto->getTempName());
        }

        $userModel->update($userId, [
            'nama_instansi' => $this->request->getPost('nama_instansi'),
            'nomor_telepon' => $this->request->getPost('no_telepon'),
            'alamat'        => $this->request->getPost('alamat'),
            'file_foto'     => $fotoBlob
        ]);

        return redirect()->to('/login');
    }
}