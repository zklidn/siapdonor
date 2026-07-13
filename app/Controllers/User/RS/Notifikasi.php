<?php

namespace App\Controllers\User\RS;

use App\Controllers\BaseController;
use App\Models\NotifikasiModel;

class Notifikasi extends BaseController
{
    public function index()
    {
        $model = new NotifikasiModel();
        
        // Mengambil ID User dari session. 
        // Jika belum ada session, kita beri nilai default 1.
        // (Pastikan di database kamu ada notifikasi dengan id_user = 1)
        $id_user = session()->get('id_user') ?? 1; 

        // Tangkap pilihan filter dari dropdown (Semua, Dibaca, Belum Dibaca)
        $filter = $this->request->getGet('filter');

        // Mulai menyusun query
        $builder = $model->where('id_user', $id_user);

        // Jika filter dipilih dan bukan opsi "Semua Notifikasi"
        if (!empty($filter) && $filter != 'Semua Notifikasi') {
            $builder->where('status', $filter);
        }

        // Urutkan berdasarkan waktu pembuatan dari yang paling baru (DESC)
        $builder->orderBy('created_at', 'DESC');

        // Tampilkan 5 data per halaman, dengan nama grup paginasi 'notif'
        $data['notifikasi'] = $builder->paginate(5, 'notif');
        $data['pager']      = $model->pager;
        
        // Kirim kembali nilai filter agar dropdown tidak ter-reset kembali ke atas
        $data['filter_aktif'] = $filter;
        
        // Hitung total data notifikasi untuk ditampilkan di sudut kiri bawah
        $data['total_data'] = $model->where('id_user', $id_user)->countAllResults();

        // Tampilkan ke halaman view
        return view('Tampilan_RS/notifikasi', $data);
    }

    // Fungsi untuk tombol "Tandai semua sebagai dibaca"
    public function tandaiSemuaDibaca()
    {
        $model = new NotifikasiModel();
        
        // Pastikan ID User sama dengan yang sedang login
        $id_user = session()->get('id_user') ?? 1;

        // Memanggil fungsi khusus yang sudah kamu buat di NotifikasiModel.php
        $model->tandaiSemuaDibaca($id_user);

        // Kembali ke halaman sebelumnya dengan membawa pesan flashdata
        return redirect()->back()->with('success', 'Semua notifikasi telah ditandai sebagai dibaca!');
    }
}