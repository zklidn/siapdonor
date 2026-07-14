<?php

namespace App\Controllers\User\PMI;

use App\Controllers\BaseController;
use App\Models\NotifikasiModel;

class Notifikasi extends BaseController
{
    // Nama fungsinya HARUS notifikasi() karena di routes.php kita panggil Notifikasi::notifikasi
    public function notifikasi()
    {
        $model = new NotifikasiModel();
        
        // Sesuaikan ID user dan filter seperti di RS
        $id_user = session()->get('id_user') ?? 1; 
        $filter = $this->request->getGet('filter');

        $builder = $model->where('id_user', $id_user);

        if (!empty($filter) && $filter != 'Semua Notifikasi') {
            $builder->where('status', $filter);
        }

        $builder->orderBy('created_at', 'DESC');

        $data['notifikasi'] = $builder->paginate(5, 'notif');
        $data['pager']      = $model->pager;
        $data['filter_aktif'] = $filter;
        $data['total_data'] = $model->where('id_user', $id_user)->countAllResults();

        // Pastikan ini diarahkan ke view PMI
        return view('Tampilan_PMI/notifikasi', $data);
    }
}