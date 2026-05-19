<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiapDonor - Bersama Selamatkan Nyawa</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { background-color: #fcfcfc; color: #333; display: flex; flex-direction: column; min-height: 100vh; }
        
        /* Navbar */
        .navbar { display: flex; justify-content: space-between; align-items: center; padding: 20px 5%; background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 100; }
        .brand { display: flex; align-items: center; gap: 10px; text-decoration: none; }
        
        /* CSS Pengatur Ukuran Logo Baru */
        .logo-nav { height: 40px; width: auto; object-fit: contain; }
        .logo-footer { height: 30px; width: auto; object-fit: contain; filter: brightness(0) invert(1); }

        .brand-text { display: flex; flex-direction: column; }
        .brand-text strong { font-size: 18px; color: #333; }
        .brand-text span { font-size: 10px; color: #6b7280; }
        .nav-links { display: flex; gap: 20px; align-items: center; }
        .nav-links a { text-decoration: none; color: #333; font-weight: 500; font-size: 14px; }
        .btn-outline { border: 1px solid #8b0000; color: #8b0000; padding: 8px 20px; border-radius: 6px; font-weight: 600; text-decoration: none; transition: 0.2s; }
        .btn-outline:hover { background: #fff0f0; }
        .btn-solid { background: #8b0000; color: white !important; padding: 8px 20px; border-radius: 6px; font-weight: 600; text-decoration: none; transition: 0.2s; }
        .btn-solid:hover { background: #6b0000; }

        /* Hero Section */
        .hero { display: flex; align-items: center; justify-content: space-between; padding: 60px 5%; flex: 1; background-color: #fffafb; }
        .hero-text { flex: 1; padding-right: 40px; }
        .hero-text h1 { font-size: 42px; font-weight: 700; color: #111827; line-height: 1.2; margin-bottom: 20px; }
        .hero-text p { font-size: 16px; color: #4b5563; line-height: 1.6; margin-bottom: 30px; }
        .hero-buttons { display: flex; gap: 15px; }
        .hero-image { flex: 1; display: flex; justify-content: center; }
        .hero-image img { max-width: 100%; height: auto; }

        /* Footer */
        .footer { background: #8b0000; color: white; padding: 20px 5%; display: flex; justify-content: space-between; align-items: center; font-size: 13px; }

        @media (max-width: 768px) {
            .hero { flex-direction: column-reverse; text-align: center; padding: 40px 5%; }
            .hero-text { padding-right: 0; margin-top: 30px; }
            .hero-buttons { justify-content: center; }
            .nav-links .btn-outline { display: none; }
        }
    </style>
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
            <a href="/login" class="btn-outline">Masuk</a>
            <a href="/register" class="btn-solid">Daftar Akun</a>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-text">
            <h1>Bersama, Selamatkan Lebih Banyak Nyawa</h1>
            <p>SiapDonor adalah sistem informasi yang menghubungkan PMI, Rumah Sakit, and Donor untuk kebutuhan darah yang lebih cepat dan tepat.</p>
            <div class="hero-buttons">
                <a href="/login" class="btn-solid"><i class="fa-solid fa-arrow-right-to-bracket"></i> Masuk</a>
                <a href="/register" class="btn-outline">Daftar Akun</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="/img/hero-illustration.png" alt="Ilustrasi Donor Darah">
        </div>
    </section>

    <footer class="footer">
        <div class="brand" style="color: white;">
            <img src="<?= base_url('logo.jpeg') ?>" alt="Logo SiapDonor" class="logo-footer">
            <span style="font-weight: 600; margin-left: 5px;">SiapDonor</span>
        </div>
        <div>&copy; 2026 SiapDonor. All rights reserved.</div>
        <a href="#" style="color: white; text-decoration: none;">Tentang Kami</a>
    </footer>

</body>
</html>