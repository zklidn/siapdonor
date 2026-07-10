<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiapDonor - Bersama Selamatkan Nyawa</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="<?= base_url('style_awalan.css') ?>">
</head>
<body>

    <nav class="navbar">
        <a href="#" class="brand">
            <img src="<?= base_url('logo.jpg') ?>" alt="Logo SiapDonor" class="logo-nav">
            <div class="brand-text">
                <strong>SiapDonor</strong>
                <span>Sistem Informasi Donor Darah</span>
            </div>
        </a>
        <div class="nav-links">
            <a href="#">Tentang Kami</a>
            <a href="<?= base_url('login') ?>" class="btn-outline">Masuk</a>
            <a href="<?= base_url('register') ?>" class="btn-solid">Daftar Akun</a>
        </div>
    </nav>

    <section class="hero" style="background-image: url('<?= base_url("awalan.png") ?>');">
        <div class="hero-text">
            <h1>Bersama, Selamatkan Lebih Banyak Nyawa</h1>
            <p>SiapDonor adalah sistem informasi yang menghubungkan PMI, Rumah Sakit, dan Donor untuk kebutuhan darah yang lebih cepat dan tepat.</p>
            <div class="hero-buttons">
                <a href="<?= base_url('login') ?>" class="btn-solid"><i class="fa-solid fa-arrow-right-to-bracket"></i> Masuk</a>
                <a href="<?= base_url('register') ?>" class="btn-outline">Daftar Akun</a>
            </div>
        </div>
    </section>

    <footer class="footer" style="justify-content: center;">
        <div>&copy; 2026 SiapDonor. All rights reserved.</div>
    </footer>

</body>
</html>