<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - SiapDonor</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="<?= base_url('style_tentang_kami.css') ?>">
</head>
<body>

    <nav class="navbar">
        <a href="<?= base_url('/') ?>" class="brand">
            <img src="<?= base_url('logo.jpg') ?>" alt="Logo SiapDonor" class="logo-nav">
            <div class="brand-text">
                <strong>SiapDonor</strong>
                <span>Sistem Informasi Donor Darah</span>
            </div>
        </a>
        <div class="nav-links">
            <a href="<?= base_url('tentang_kami') ?>">Tentang Kami</a>
            <a href="<?= base_url('login') ?>" class="btn-outline">Masuk</a>
            <a href="<?= base_url('register') ?>" class="btn-solid">Daftar Akun</a>
        </div>
    </nav>

    <section class="hero-tentang" style="background-image: url('<?= base_url("awalan.png") ?>');">
        <div class="hero-tentang-content">
            <h1>Tentang Kami</h1>
            <p>SiapDonor adalah sistem informasi yang menghubungkan PMI, Rumah Sakit, dan<br>Donor untuk kebutuhan darah yang lebih cepat dan tepat.</p>
        </div>
    </section>

    <section class="siapa-kami">
        <h2>Siapa Kami</h2>
        <p class="subtitle">SiapDonor hadir sebagai solusi digital untuk mempermudah proses donor darah, mulai dari pencarian kebutuhan darah, pendaftaran donor, hingga manajemen stok darah di PMI dan Rumah Sakit.</p>
        
        <div class="cards-container">
            <div class="card">
                <div class="icon-circle">
                    <i class="fa-solid fa-droplet"></i>
                </div>
                <h3>Misi Kami</h3>
                <p>Meningkatkan kepedulian masyarakat terhadap donor darah melalui teknologi yang mudah diakses dan terpercaya.</p>
            </div>
            
            <div class="card">
                <div class="icon-circle">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
                <h3>Visi Kami</h3>
                <p>Menjadi platform informasi donor darah terkemuka di Indonesia yang menghubungkan semua pihak terkait.</p>
            </div>
            
            <div class="card">
                <div class="icon-circle">
                    <i class="fa-solid fa-handshake-angle"></i>
                </div>
                <h3>Komitmen Kami</h3>
                <p>Memberikan informasi yang akurat, cepat, dan aman untuk mendukung ketersediaan darah di Indonesia.</p>
            </div>
            
            <div class="card">
                <div class="icon-circle">
                    <i class="fa-solid fa-users"></i>
                </div>
                <h3>Untuk Siapa</h3>
                <p>Untuk PMI, Rumah Sakit, dan seluruh masyarakat yang ingin berkontribusi dalam menyelamatkan nyawa.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div>&copy; 2026 SiapDonor. All rights reserved.</div>
    </footer>

</body>
</html>