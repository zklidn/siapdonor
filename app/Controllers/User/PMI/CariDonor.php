<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;
use App\Models\DonorModel;

class CariDonor extends BaseController
{
    public function pendonor()
    {
        $donorModel = new DonorModel();

        // mengambil data kecamatan untuk combobox
        $data['wilayah_list'] = $donorModel
            ->select('kecamatan')
            ->groupBy('kecamatan')
            ->findAll();

        $builder = $donorModel;

        // Filter Golongan Darah
        if ($this->request->getGet('gol_darah')) {
            $builder->where('golongan_darah', $this->request->getGet('gol_darah'));
        }

        // // Filter Rhesus
        // if ($this->request->getGet('rhesus')) {
        //     $builder->where('rhesus', $this->request->getGet('rhesus'));
        // }

        // Filter Wilayah
        if ($this->request->getGet('kecamatan')) {
            $builder->where('kecamatan', $this->request->getGet('kecamatan'));
        }

        // hanya donor aktif
        $builder->where('status', 'Aktif');
        

        $data['hasil_pencarian'] = $builder->paginate(10);
        $data['pager'] = $builder->pager;


        return view('Tampilan_PMI/cari_donor', $data);
    }

    public function detail($id)
    {
        $donorModel = new DonorModel();

        $data['donor'] = $donorModel->find($id);

        if (!$data['donor']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data donor tidak ditemukan');
        }

        return view('Tampilan_PMI/detail_donor', $data);
    }
}