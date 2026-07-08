<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SiapDonor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('Layout/header.css') ?>">
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
            $urlPrefix = 'rs'; // Menghubungkan ke routes group 'rs'
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
                    <a href="<?= base_url($urlPrefix == 'rs' ? 'rs/settings' : $urlPrefix . '/profil') ?>" class="dropdown-item"><i class="fa-solid fa-user-gear"></i> Setting</a>
                    <a href="<?= base_url('logout') ?>" class="dropdown-item" style="border-top: 1px solid #f3f4f6; color: #dc2626;"><i class="fa-solid fa-right-from-bracket" style="color: #dc2626;"></i> Logout</a>
                </div>
            </div>
        </div>
    </header>
    
    <div class="main-wrapper">
        <div class="sidebar">
            <div class="sidebar-menu">
                <a href="<?= base_url($urlPrefix == 'rs' ? 'rs' : $urlPrefix . '/dashboard') ?>" class="menu-item menu-active">
                    <i class="fa-solid fa-house"></i> Dashboard
                </a>

                <a href="<?= base_url($urlPrefix == 'rs' ? 'rs/permintaan_darah' : $urlPrefix . '/permintaan') ?>" class="menu-item">
                    <i class="fa-solid fa-hand-holding-drop"></i> Permintaan Darah
                </a>

                <a href="<?= base_url($urlPrefix == 'rs' ? 'rs/riwayat_permintaan' : $urlPrefix . '/riwayat') ?>" class="menu-item">
                    <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Permintaan
                </a>
            </div>
            
            <a href="<?= base_url('logout') ?>" class="menu-item">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </a>
        </div>

        <div class="content-area">
            </div>
    </div>

</body>
</html>