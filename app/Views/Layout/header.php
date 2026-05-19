<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SiapDonor Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { display: flex; flex-direction: column; min-height: 100vh; background: #f9fafb; overflow-x: hidden; }
        
        /* 1. HEADER FULL MERAH */
        .topbar { 
            background: #8b0000; 
            color: white; 
            height: 70px; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            padding: 0 30px; 
            z-index: 10;
        }
        
        /* Kiri: Logo & Toggle */
        .topbar-left { display: flex; align-items: center; gap: 30px; }
        .logo-area { font-size: 22px; font-weight: 700; display: flex; align-items: center; gap: 10px; }
        .toggle-btn { cursor: pointer; font-size: 20px; transition: 0.2s; }
        .toggle-btn:hover { opacity: 0.8; }

        /* Kanan: Notif & Profil */
        .topbar-right { display: flex; align-items: center; gap: 25px; }
        .notification { position: relative; cursor: pointer; }
        .notif-badge { position: absolute; top: -6px; right: -6px; background: white; color: #8b0000; font-size: 10px; font-weight: bold; width: 16px; height: 16px; display: flex; justify-content: center; align-items: center; border-radius: 50%; }
        
        .user-area { display: flex; align-items: center; gap: 12px; cursor: pointer; }
        .user-text { text-align: right; }
        .user-text .name { font-size: 14px; font-weight: 600; }
        .user-text .role { font-size: 11px; color: #ffcccc; }

        /* 2. AREA BAWAH */
        .main-wrapper { display: flex; flex: 1; }
        
        /* 3. SIDEBAR PUTIH (Bisa Buka Tutup) */
        .sidebar { 
            width: 250px; 
            background: white; 
            border-right: 1px solid #e5e7eb; 
            padding: 20px 15px; 
            transition: margin-left 0.3s ease; /* Animasi mulus saat buka tutup */
        }
        .sidebar.hidden { margin-left: -250px; } /* Kelas ini yang bikin sidebar ngumpet */
        
        .menu-item { display: flex; align-items: center; gap: 12px; padding: 12px 15px; color: #4b5563; text-decoration: none; border-radius: 8px; margin-bottom: 5px; transition: 0.2s; font-size: 14px; font-weight: 500;}
        .menu-item i { font-size: 18px; width: 20px; text-align: center; color: #9ca3af; }
        .menu-item:hover { background: #fef2f2; color: #8b0000; }
        .menu-item:hover i { color: #8b0000; }
        .menu-active { background: #fef2f2; color: #8b0000; font-weight: 600; }
        .menu-active i { color: #8b0000; }
        
        /* 4. KONTEN DASHBOARD */
        .content-area { flex: 1; padding: 30px; transition: 0.3s; width: 100%; }
    </style>
</head>
<body>

    <header class="topbar">
        <div class="topbar-left">
            <div class="logo-area"><i class="fa-solid fa-droplet"></i> SiapDonor</div>
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
                    <div class="role">Admin</div>
                </div>
                <i class="fa-solid fa-circle-user fa-2xl"></i>
                <i class="fa-solid fa-chevron-down fa-xs" style="margin-left: 5px;"></i>
            </div>
        </div>
    </header>

    <div class="main-wrapper">
        
        <aside class="sidebar" id="sidebar">
            <a href="#" class="menu-item menu-active"><i class="fa-solid fa-gauge"></i> Dashboard</a>
            <a href="#" class="menu-item"><i class="fa-solid fa-users"></i> Data Donor</a>
            <a href="#" class="menu-item"><i class="fa-solid fa-magnifying-glass"></i> Cari Donor</a>
            <a href="#" class="menu-item"><i class="fa-solid fa-file-medical"></i> Permintaan Darah</a>
            <a href="#" class="menu-item"><i class="fa-solid fa-clock-rotate-left"></i> Riwayat</a>
            <a href="#" class="menu-item"><i class="fa-solid fa-user-gear"></i> Pengguna</a>
            <div style="margin-top: 40px; padding-top: 20px; border-top: 1px solid #e5e7eb;">
                <a href="#" class="menu-item"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
        </aside>

        <script>
            document.getElementById('sidebarToggle').addEventListener('click', function() {
                document.getElementById('sidebar').classList.toggle('hidden');
            });
        </script>

        <main class="content-area">