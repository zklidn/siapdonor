ini routes :

 */
//$routes->get('/home', 'Home::index');
//$routes->get('/about_us', 'Home::about_us'); 

// // Jalur untuk lihat halaman Home (http://localhost:8080/)
// $routes->get('/', function() { 
//     return view('home'); 
// });

// // Jalur untuk lihat halaman Verifikasi (http://localhost:8080/verifikasi)
// $routes->get('/verifikasi', function() { 
//     return view('verifikasi'); 
// });

// // Jalur untuk lihat halaman Dashboard (http://localhost:8080/dashboard)
// $routes->get('/dashboard', function() { 
//     // Ini cara backend memanggil template dan menyisipkan file dashboard
//     $data = ['nama_file' => 'dashboard'];
//     return view('layout/template', $data); 
// });


ini template :

<?php 
/* <?= $this->include('layout/footer') ?>

<?= $this->include('layout/header') ?>

<?= $this->include($nama_file) ?>

<?= $this->include('layout/footer') ?>
*/ 
?>


ini footer : 

<!-- </main>
    </div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('active');
        }
    </script>
</body>
</html> -->


ini header :

<!-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SiapDonor</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { background-color: #f3f4f6; display: flex; flex-direction: column; height: 100vh; overflow: hidden; }
        
        /* Top Header */
        .top-header { background-color: #8b0000; color: white; padding: 0 20px; height: 60px; display: flex; justify-content: space-between; align-items: center; flex-shrink: 0; }
        .header-left { display: flex; align-items: center; gap: 20px; }
        .menu-toggle { cursor: pointer; font-size: 20px; }
        .brand-header { display: flex; align-items: center; gap: 10px; font-weight: 700; font-size: 18px; }
        .user-profile { display: flex; align-items: center; gap: 10px; font-size: 14px; }
        .user-avatar { width: 32px; height: 32px; border-radius: 50%; background-color: #fff; color: #8b0000; display: flex; justify-content: center; align-items: center; font-weight: bold; overflow: hidden; }
        .user-avatar img { width: 100%; height: 100%; object-fit: cover; }

        .main-container { display: flex; flex: 1; overflow: hidden; }

        /* Sidebar */
        .sidebar { width: 250px; background-color: white; border-right: 1px solid #e5e7eb; display: flex; flex-direction: column; transition: 0.3s; }
        .sidebar-menu { padding: 20px 0; list-style: none; flex: 1; }
        .sidebar-menu li { margin-bottom: 5px; }
        .sidebar-menu a { display: flex; align-items: center; gap: 15px; padding: 12px 24px; color: #4b5563; text-decoration: none; font-size: 14px; font-weight: 500; border-left: 4px solid transparent; }
        .sidebar-menu a:hover { background-color: #f9fafb; color: #8b0000; }
        .sidebar-menu a.active { background-color: #fff0f0; color: #8b0000; border-left-color: #8b0000; }
        .sidebar-menu i { font-size: 16px; width: 20px; text-align: center; }

        /* Content Area Base */
        .content { flex: 1; padding: 24px; overflow-y: auto; }

        @media (max-width: 768px) {
            .sidebar { position: fixed; left: -250px; height: calc(100vh - 60px); z-index: 50; }
            .sidebar.active { left: 0; }
        }
    </style>
</head>
<body>

    <header class="top-header">
        <div class="header-left">
            <i class="fa-solid fa-bars menu-toggle" onclick="toggleSidebar()"></i>
            <div class="brand-header"><i class="fa-solid fa-droplet"></i> SiapDonor</div>
        </div>
        <div class="user-profile">
            <div class="user-avatar">
                <i class="fa-solid fa-user"></i>
            </div>
            <span>Admin Utama</span>
        </div>
    </header>

    <div class="main-container">
        <aside class="sidebar" id="sidebar">
            <ul class="sidebar-menu">
                <li><a href="/dashboard" class="active"><i class="fa-solid fa-house"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa-solid fa-users"></i> Data Donor</a></li>
                <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i> Cari Donor</a></li>
                <li><a href="#"><i class="fa-solid fa-file-medical"></i> Permintaan Darah</a></li>
                <li><a href="#"><i class="fa-solid fa-clock-rotate-left"></i> Riwayat</a></li>
            </ul>
            <ul class="sidebar-menu" style="flex: none; border-top: 1px solid #e5e7eb;">
                <li><a href="/login"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
            </ul>
        </aside>
        
        <main class="content"> -->