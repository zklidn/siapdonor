<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiapDonor Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { display: flex; flex-direction: column; min-height: 100vh; background: #f4f6f9; overflow-x: hidden; }
        
        /* 1. HEADER MERAH KONSISTEN */
        .topbar { 
            background: #8b0000; 
            color: white; 
            height: 70px; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            padding: 0 30px; 
            z-index: 10;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        /* Kiri: Logo Asli & Toggle */
        .topbar-left { display: flex; align-items: center; gap: 20px; }
        .logo-area { display: flex; align-items: center; gap: 12px; text-decoration: none; color: white; }
        .logo-img { height: 38px; width: auto; object-fit: contain; filter: brightness(0) invert(1); } /* Mengubah logo jadi putih polos elegan di atas merah */
        .logo-text { display: flex; flex-direction: column; line-height: 1.2; }
        .logo-text strong { font-size: 18px; font-weight: 700; }
        .logo-text span { font-size: 10px; color: #ffcccc; font-weight: 400; }

        .toggle-btn { cursor: pointer; font-size: 18px; transition: 0.2s; padding: 10px; border-radius: 6px; }
        .toggle-btn:hover { background: rgba(255,255,255,0.1); }

        /* Kanan: Notif & Profil */
        .topbar-right { display: flex; align-items: center; gap: 25px; }
        .notification { position: relative; cursor: pointer; padding: 8px; border-radius: 50%; transition: 0.2s; }
        .notification:hover { background: rgba(255,255,255,0.1); }
        .notif-badge { position: absolute; top: 2px; right: 2px; background: white; color: #8b0000; font-size: 10px; font-weight: bold; width: 16px; height: 16px; display: flex; justify-content: center; align-items: center; border-radius: 50%; box-shadow: 0 2px 5px rgba(0,0,0,0.2); }
        
        .user-area { display: flex; align-items: center; gap: 12px; cursor: pointer; padding: 6px 12px; border-radius: 8px; transition: 0.2s; }
        .user-area:hover { background: rgba(255,255,255,0.05); }
        .user-text { text-align: right; }
        .user-text .name { font-size: 14px; font-weight: 600; }
        .user-text .role { font-size: 11px; color: #ffcccc; }

        /* 2. AREA BAWAH */
        .main-wrapper { display: flex; flex: 1; }
        
        /* 3. SIDEBAR PUTIH MODERN */
        .sidebar { 
            width: 260px; 
            background: white; 
            border-right: 1px solid #e5e7eb; 
            padding: 24px 16px; 
            transition: margin-left 0.3s ease; 
            display: flex;
            flex-direction: column;
        }
        .sidebar.hidden { margin-left: -260px; }
        
        .menu-item { display: flex; align-items: center; gap: 12px; padding: 12px 16px; color: #4b5563; text-decoration: none; border-radius: 10px; margin-bottom: 6px; transition: all 0.2s; font-size: 14px; font-weight: 500;}
        .menu-item i { font-size: 16px; width: 20px; text-align: center; color: #9ca3af; transition: 0.2s; }
        
        .menu-item:hover { background: #fff5f5; color: #8b0000; }
        .menu-item:hover i { color: #8b0000; }
        
        .menu-active { background: #fff5f5; color: #8b0000; font-weight: 600; }
        .menu-active i { color: #8b0000; }
        
        /* 4. KONTEN DASHBOARD */
        .content-area { flex: 1; padding: 35px; transition: 0.3s; width: 100%; }
    </style>
</head>
<body>

    <header class="topbar">
        <div class="topbar-left">
            <a href="#" class="logo-area">
                <img src="<?= base_url('logo.jpeg') ?>" alt="Logo" class="logo-img">
                <div class="logo-text">
                    <strong>SiapDonor</strong>
                    <span>Sistem Informasi Donor</span>
                </div>
            </a>
            <i class="fa-solid fa-bars toggle-btn" id="sidebarToggle"></i>
        </div>

        <div class="topbar-right">
            <div class="notification">
                <i class="fa-solid fa-bell fa-lg"></i>
                <span class="notif-badge">3</span>
            </div>
            
            <div class="user-area">
                <div class="user-text">
                    <div class="name">Admin Utama</div>
                    <div class="role">Admin Sistem</div>
                </div>
                <i class="fa-solid fa-circle-user fa-2xl" style="color: #f3f4f6;"></i>
                <i class="fa-solid fa-chevron-down fa-xs" style="color: #ffcccc;"></i>
            </div>
        </div>
    </header>

    <div class="main-wrapper">
        
        <aside class="sidebar" id="sidebar">
            <a href="#" class="menu-item menu-active"><i class="fa-solid fa-chart-pie"></i> Dashboard</a>
            <a href="#" class="menu-item"><i class="fa-solid fa-folder-open"></i> Data Donor</a>
            <a href="#" class="menu-item"><i class="fa-solid fa-magnifying-glass"></i> Cari Donor</a>
            <a href="#" class="menu-item"><i class="fa-solid fa-file-invoice-dollar"></i> Permintaan Darah</a>
            <a href="#" class="menu-item"><i class="fa-solid fa-clock-rotate-left"></i> Riwayat</a>
            <a href="#" class="menu-item"><i class="fa-solid fa-user-gear"></i> Pengguna</a>
            
            <div style="margin-top: auto; padding-top: 20px; border-top: 1px solid #e5e7eb;">
                <a href="#" class="menu-item" style="color: #dc2626;"><i class="fa-solid fa-right-from-bracket" style="color: #dc2626;"></i> Logout</a>
            </div>
        </aside>

        <script>
            document.getElementById('sidebarToggle').addEventListener('click', function() {
                document.getElementById('sidebar').classList.toggle('hidden');
            });
        </script>

        <main class="content-area">