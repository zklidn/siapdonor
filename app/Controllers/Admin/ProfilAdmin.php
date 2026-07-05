<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\UserModels;

class ProfilAdmin extends BaseController
{
    public function profil_admin()
    {
        $userModel = new UserModels();

        $user = $userModel->find(session()->get('id_user'));

        return view('Tampilan_Admin/settings', ['user' => $user]);
    }

    public function update_profil()
    {
        
        $userModel = new UserModels();

        $idUser = session()->get('id_user');

        $data = [
            'nama'  => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
        ];

        $foto = $this->request->getFile('foto_profil');

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {

            // Maksimal 2 MB
            if ($foto->getSize() > 2 * 1024 * 1024) {
                return redirect()->back()->with('error', 'Ukuran foto maksimal 2 MB.');
            }

            // Simpan gambar ke BLOB
            $data['file_foto'] = file_get_contents($foto->getTempName());
        }

        if ($userModel->update($idUser, $data)) {

            return redirect()->back()
                        ->with('success', 'Profil berhasil diperbarui.');
        } else {
            
            return redirect()->back()
                        ->with('error', 'Profil gagal diperbarui.');
        }
    }
}