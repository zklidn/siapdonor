<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // 1. Cek apakah user sudah login
        if (! $session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // 2. Cek apakah ada hak akses khusus yang diminta oleh rute
        if ($arguments !== null) {
            $userRole = $session->get('role'); // Ambil role dari session

            // Jika role user saat ini TIDAK ADA di dalam daftar yang diizinkan rute
            if (! in_array($userRole, $arguments)) {
                
                // Lempar mereka kembali ke dashboard masing-masing sesuai role-nya
                if ($userRole == 'admin') return redirect()->to('/admin');
                if ($userRole == 'pmi') return redirect()->to('/pmi');
                if ($userRole == 'rs') return redirect()->to('/rs');
                
                // Fallback jika role tidak dikenali
                return redirect()->to('/login'); 
            }
        }
    }

    // METHOD INI WAJIB ADA MESKIPUN KOSONG
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Jangan dihapus, biarkan kosong saja
    }
}