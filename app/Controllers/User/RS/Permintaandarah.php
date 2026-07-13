<?php



namespace App\Controllers\User\RS;



use App\Controllers\BaseController;

use App\Models\PermintaanDarahModel;



class PermintaanDarah extends BaseController

{

    public function index()

    {

        $status = $this->request->getGet('status') ?? 'aktif';

        $model = new PermintaanDarahModel();

       

        // 1. Gunakan Query Builder untuk menggabungkan (JOIN) ke-3 tabel

        $builder = $model->builder();

        $builder->select('permintaan_darah.*, pasien.nama_pasien, pasien.no_rm, pasien.golongan_darah, pasien.rhesus, detail_permintaan.jumlah_kantong, detail_permintaan.prioritas');

       

        $builder->join('pasien', 'pasien.id_pasien = permintaan_darah.id_pasien');

        $builder->join('detail_permintaan', 'detail_permintaan.id_permintaan = permintaan_darah.id_permintaan');

       

        // 2. Filter berdasarkan status (Sesuaikan dengan ENUM di database baru)

        if ($status == 'aktif') {

            // Asumsi 'aktif' berarti masih diproses atau donor sudah ditemukan

            $builder->whereIn('permintaan_darah.status', ['Diproses', 'Donor Ditemukan']);

        } elseif ($status == 'selesai') {

            $builder->where('permintaan_darah.status', 'Selesai');

        } elseif ($status == 'draft') {

            // Karena di DB baru tidak ada 'Draft', kita gunakan 'Dibatalkan'

            // (atau kamu bisa sesuaikan nanti jika tabel diubah)

            $builder->where('permintaan_darah.status', 'Dibatalkan');

        }

   

        // 3. Eksekusi query dan kirim ke view

        $data['permintaan_darah_all'] = $builder->get()->getResultArray();

       

        return view('Tampilan_RS/permintaan_darah', $data);

    }

}