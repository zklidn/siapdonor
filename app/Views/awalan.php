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
        
        /* CSS Pengatur Ukuran Logo Navbar */
        .logo-nav { height: 40px; width: auto; object-fit: contain; }

        .brand-text { display: flex; flex-direction: column; }
        .brand-text strong { font-size: 18px; color: #333; }
        .brand-text span { font-size: 10px; color: #6b7280; }
        .nav-links { display: flex; gap: 20px; align-items: center; }
        .nav-links a { text-decoration: none; color: #333; font-weight: 500; font-size: 14px; }
        .btn-outline { border: 1px solid #8b0000; color: #8b0000; padding: 8px 20px; border-radius: 6px; font-weight: 600; text-decoration: none; transition: 0.2s; }
        .btn-outline:hover { background: #fff0f0; }
        .btn-solid { background: #8b0000; color: white !important; padding: 8px 20px; border-radius: 6px; font-weight: 600; text-decoration: none; transition: 0.2s; }
        .btn-solid:hover { background: #6b0000; }

        /* Hero Section - Full Background Style */
        .hero { 
            display: flex; 
            align-items: center; /* Teks otomatis ke tengah vertikal */
            padding: 0 5%; 
            min-height: calc(100vh - 80px); /* Mengisi tinggi layar sisa dari navbar */
            
            /* Foto jadi background penuh */
            background-image: url('<?= base_url("awalan.png") ?>'); 
            background-size: cover; /* Foto otomatis memenuhi area */
            background-position: center right; /* Fokus ke tangan di sebelah kanan */
            background-repeat: no-repeat;
            position: relative;
            overflow: hidden;
        }

        /* Gradient Overlay: Agar teks hitam kamu tetap terbaca jelas di atas foto */
        .hero::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            /* Gradasi putih transparan dari kiri ke kanan */
            background: linear-gradient(to right, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.6) 40%, transparent 100%);
            z-index: 1;
        }

        .hero-text { 
            position: relative;
            z-index: 2; /* Memastikan teks ada di atas efek gradasi */
            width: 100%;
            max-width: 500px; /* Membatasi lebar teks agar tetap rapi di sebelah kiri */
            padding: 60px 0; /* Jarak vertikal */
        }
        
        /* Teks Asli Kamu */
        .hero-text h1 { font-size: 42px; font-weight: 700; color: #111827; line-height: 1.2; margin-bottom: 20px; }
        .hero-text p { font-size: 16px; color: #4b5563; line-height: 1.6; margin-bottom: 30px; }
        .hero-buttons { display: flex; gap: 15px; }

        /* Footer */
        .footer { background: #8b0000; color: white; padding: 20px 5%; display: flex; justify-content: space-between; align-items: center; font-size: 13px; }

        @media (max-width: 768px) {
            .hero { 
                background-position: center center; /* Rata tengah di HP */
                text-align: center; 
                padding: 40px 5%; 
                justify-content: center;
            }
            /* Overlay penuh di HP agar teks terbaca */
            .hero::before {
                background: rgba(255,255,255,0.8);
            }
            .hero-text {
                max-width: 100%;
            }
            .hero-buttons { justify-content: center; }
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
            <p>SiapDonor adalah sistem informasi yang menghubungkan PMI, Rumah Sakit, dan Donor untuk kebutuhan darah yang lebih cepat dan tepat.</p>
            <div class="hero-buttons">
                <a href="/login" class="btn-solid"><i class="fa-solid fa-arrow-right-to-bracket"></i> Masuk</a>
                <a href="/register" class="btn-outline">Daftar Akun</a>
            </div>
        </div>
        </section>

    <footer class="footer" style="justify-content: center;">
        <div>&copy; 2026 SiapDonor. All rights reserved.</div>
    </footer>

</body>
</html>