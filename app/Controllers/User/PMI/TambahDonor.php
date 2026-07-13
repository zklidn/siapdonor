<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;

use App\Models\UserModels;
use App\Models\DonorModel;

class TambahDonor extends BaseController
{
    public function tambah()
    {
        return view('Tampilan_PMI/tambah_pendonor');
    }

    public function simpan()
    {
        $donor = new DonorModel();

        //cek apakah nik sudah ada
        $cekNik = $donor->where('nik', $this->request->getPost('nik'))->first();

        if ($cekNik){
            return redirect()->back()
                ->withInput()
                ->with('error', 'Mohon maaf, No. NIK/KTP sudah terdaftar sebelumnya.');
        }

        $donor->save([
                'id_user'          => session()->get('id_user'),
                'nik'              => $this->request->getPost('nik'),
                'nama'             => $this->request->getPost('nama'),
                'tempat_lahir'     => $this->request->getPost('tempat_lahir'),
                'tanggal_lahir'    => $this->request->getPost('tanggal_lahir'),
                'jenis_kelamin'    => $this->request->getPost('jenis_kelamin'),
                'golongan_darah'   => $this->request->getPost('golongan_darah'),
                'rhesus'           => $this->request->getPost('rhesus'),
                'kecamatan'        => $this->request->getPost('kecamatan'),
                'status'           => $this->request->getPost('status'),
                'no_hp'            => $this->request->getPost('no_hp'),
        ]);

        return redirect()->to(base_url('pmi/cari_donor'))
                        ->with('succes', 'Data Pendonor berhasil ditambahkan');

    }
}