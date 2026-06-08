<?php

namespace App\Controllers;

use App\Models\usermodels;
use App\Models\DonorModel;
use App\Models\PermintaanDarahModel;
use App\Models\DetailPermintaanModel;

class DashboardAdmin extends BaseController
{
    protected $userModel;
    protected $donorModel;
    protected $permintaanModel;
    protected $detailPermintaanModel;

    public function __construct()
    {
        $this->userModel = new usermodels();
        $this->donorModel = new DonorModel();
        $this->permintaanModel = new PermintaanDarahModel();
        $this->detailPermintaanModel = new DetailPermintaanModel();
    }


    public function admin()
    {
        $data['totalUser'] = $this->userModel->countAllResults();

        $data['totalDonor'] = $this->donorModel->countAllResults();

        $data['totalPermintaan'] = $this->permintaanModel->countAllResults();

        $data['totalAktivitas'] = $this->detailPermintaanModel->countAllResults();

        $data['aktivitasTerbaru'] = $this->permintaanModel
            ->select('permintaan_darah.*, users.nama')
            ->join('users', 'users.id = permintaan_darah.id_user')
            ->orderBy('permintaan_darah.created_at', 'DESC')
            ->findAll(5);

        return view('Tampilan_Admin/dashboard', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }


    // Fungsi untuk halaman data donor
    public function data_donor()
    {
        // Memanggil file: app/Views/Tampilan_Admin/data_donor.php
        return view('Tampilan_Admin/data_donor');
    }


     // Fungsi untuk halaman kelola user
    public function kelola_user()
    {
        // Memanggil file: app/Views/Tampilan_Admin/kelola_user.php
        return view('Tampilan_Admin/kelola_user');
    }

    public function riwayat()
    {
        // Memanggil file: app/Views/Tampilan_Admin/kelola_user.php
        return view('Tampilan_Admin/riwayat_aktifitas');
    }
}