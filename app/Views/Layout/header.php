<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SiapDonor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS KAMU SAMA PERSIS, TIDAK ADA YANG DIUBAH */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { display: flex; flex-direction: column; min-height: 100vh; background: #f9fafb; overflow-x: hidden; color: #111827; }
        
        .topbar { background: #8b0000; color: white; height: 70px; display: flex; justify-content: space-between; align-items: center; padding-right: 30px; padding-left: 0; z-index: 10; }
        .topbar-left { display: flex; align-items: center; gap: 20px; }
        
        .logo-area { background: #8b0000; color: white; width: 250px; height: 70px; display: flex; align-items: center; padding-left: 20px; gap: 12px; transition: all 0.3s ease; border-right: 1px solid transparent; }
        .logo-icon { display: block; font-size: 24px; }
        .logo-img { display: none; height: 35px; width: auto; }
        .logo-text-wrapper { display: flex; flex-direction: column; justify-content: center; }
        .logo-title { font-size: 22px; font-weight: 700; line-height: 1.1; }
        .logo-subtitle { display: none; font-size: 11px; font-weight: 500; margin-top: 2px; } 
        
        .toggle-btn { cursor: pointer; font-size: 20px; transition: 0.2s; color: white; }

        .topbar-right { display: flex; align-items: center; gap: 25px; }
        .notification { position: relative; cursor: pointer; }
        .notif-badge { position: absolute; top: -6px; right: -6px; background: white; color: #8b0000; font-size: 10px; font-weight: bold; width: 16px; height: 16px; display: flex; justify-content: center; align-items: center; border-radius: 50%; }
        .user-area { position: relative; display: flex; align-items: center; gap: 12px; cursor: pointer; padding: 5px 10px; border-radius: 8px; transition: 0.2s; }
        .user-area:hover { background: rgba(255,255,255,0.1); }
        .user-text { text-align: right; }
        .user-text .name { font-size: 14px; font-weight: 600; }
        .user-text .role { font-size: 11px; color: #ffcccc; text-transform: capitalize; }

        .profile-dropdown { position: absolute; top: 110%; right: 0; background: white; border: 1px solid #e5e7eb; border-radius: 8px; width: 160px; display: none; flex-direction: column; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); z-index: 100; }
        .profile-dropdown.show { display: flex; } 
        .dropdown-item { display: flex; align-items: center; gap: 10px; padding: 12px 15px; color: #4b5563; text-decoration: none; font-size: 14px; transition: 0.2s; }
        .dropdown-item:hover { background: #fef2f2; color: #8b0000; }
        .dropdown-item i { color: #9ca3af; width: 16px; text-align: center; }
        .dropdown-item:hover i { color: #8b0000; }

        .main-wrapper { display: flex; flex: 1; width: 100%; background: #f9fafb; }
        .sidebar { width: 250px; background: #8b0000; margin-left: -250px; padding: 20px 15px; transition: all 0.3s ease; }
        .menu-item { display: flex; align-items: center; gap: 12px; padding: 12px 15px; color: #fecaca; text-decoration: none; border-radius: 8px; margin-bottom: 5px; transition: 0.2s; font-size: 14px; font-weight: 500; }
        .menu-item i { font-size: 18px; width: 20px; text-align: center; color: #fecaca; }
        .menu-item:hover, .menu-active { background: #7f1d1d; color: white; font-weight: 600; }
        .menu-item:hover i, .menu-active i { color: white; }
        
        .content-area { flex: 1; padding: 30px; transition: 0.3s; width: 100%; background: #f9fafb; color: #111827; }

        body.ubah-tema .sidebar { margin-left: 0; }
        body.ubah-tema .logo-area { background: white; color: #8b0000; border-right: 1px solid #e5e7eb; }
        body.ubah-tema .logo-subtitle { display: block; }
        body.ubah-tema .logo-icon { display: none; } 
        body.ubah-tema .logo-img { display: block; } 
    </style>
</head>
<body>

    <?php 
        // 1. Ambil role dari session, jadikan huruf kecil semua agar mudah dicek
        $userRole = strtolower(session()->get('role'));
        
        // 2. Buat variabel untuk awalan URL
        $urlPrefix = '';
        
        // 3. Tentukan awalan URL berdasarkan role
        if ($userRole == 'admin') {
            $urlPrefix = 'admin';
        } elseif ($userRole == 'pmi') {
            $urlPrefix = 'pmi';
        } elseif ($userRole == 'rumah_sakit' || $userRole == 'rumah sakit') {
            $urlPrefix = 'rs'; // atau 'rumah_sakit', sesuaikan dengan kodingan routes.php kamu
        }
    ?>

    <header class="topbar">
        <div class="topbar-left">
            <div class="logo-area">
                <i class="fa-solid fa-droplet logo-icon"></i>
                <img src="<?= base_url('logo.png') ?>" alt="Logo" class="logo-img">
                <div class="logo-text-wrapper">
                    <span class="logo-title">SiapDonor</span>
                    <span class="logo-subtitle">Sistem Informasi Donor Darah</span>
                </div>
            </div>
            <i class="fa-solid fa-bars toggle-btn" id="sidebarToggle"></i>
        </div>
        
        <div class="topbar-right">
            <a href="<?= base_url($urlPrefix . '/notifikasi') ?>" class="notification" style="text-decoration: none; color: inherit;">
                <i class="fa-solid fa-bell fa-lg"></i>
                <span class="notif-badge">3</span>
            </a>
            
            <div class="user-area" id="profileDropdownToggle">
                <div class="user-text">
                    <div class="name"><?= session()->get('nama') ?></div> 
                    <div class="role"><?= session()->get('role') ?></div> 
                </div>
                <i class="fa-solid fa-circle-user fa-2xl"></i>
                <i class="fa-solid fa-chevron-down fa-xs" style="margin-left: 2px;"></i>

                <div class="profile-dropdown" id="profileDropdown">
                    <a href="<?= base_url($urlPrefix . '/profil') ?>" class="dropdown-item"><i class="fa-solid fa-user-gear"></i> Setting</a>
                    <a href="<?= base_url('/') ?>" class="dropdown-item" style="border-top: 1px solid #f3f4f6; color: #dc2626;"><i class="fa-solid fa-right-from-bracket" style="color: #dc2626;"></i> Logout</a>
                </div>
            </div>
        </div>
    </header>
    
    <div class="main-wrapper">