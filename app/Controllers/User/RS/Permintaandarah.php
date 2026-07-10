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
        
        if ($status == 'aktif') {
            $model->whereIn('status', ['Baru', 'Proses']);
        } elseif ($status == 'selesai') {
            $model->where('status', 'Selesai');
        } elseif ($status == 'draft') {
            $model->where('status', 'Draft');
        }
    
        $data['permintaan_darah_all'] = $model->findAll();
        
        return view('Tampilan_RS/permintaan_darah', $data);
    }
}