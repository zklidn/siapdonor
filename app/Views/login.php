<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Masuk - SiapDonor</title> <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="<?= base_url('login.css') ?>">

    <style>
        .login-section {
            --bg-image: url('<?= base_url("awalan.png") ?>');
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="/" class="brand">
            <img src="<?= base_url('logo.jpg') ?>" alt="Logo SiapDonor" class="logo-nav"> <div class="brand-text">
                <strong>SiapDonor</strong> <span>Sistem Informasi Donor Darah</span> </div>
        </a>
        <div class="nav-links">
            <a href="#">Tentang Kami</a> <a href="/login" class="btn-solid">Masuk</a> <a href="/register" class="btn-outline">Daftar Akun</a> </div>
    </nav>

    <section class="login-section">
        <div class="auth-card">
            
            <div class="brand-header">
                <div class="brand-logo-container">
                    <img src="<?= base_url('logo.jpg') ?>" alt="Ikon SiapDonor" class="brand-icon"> <span class="brand-name">SiapDonor</span>
                </div>
                <div class="brand-subtitle">Sistem Informasi Donor Darah</div>
            </div>

            <div class="form-header">
                <h2>Masuk ke Akun Anda</h2>
                <p>Silakan masuk untuk melanjutkan</p>
            </div>

            <?php if(session()->getFlashdata('error')) : ?>
                <div style="background:#fee2e2; color:#b91c1c; padding:10px; border-radius:8px; margin-bottom:15px; font-size:13px; font-weight:500;">
                    <?= session()->getFlashdata('error') ?> </div>
            <?php endif; ?>

            <form action="<?= base_url('login/proses') ?>" method="POST">
                
                <div class="form-group">
                    <label for="email">Email</label> <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email" required> </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required> <button type="button" class="password-toggle" onclick="togglePassword('password', this)">
                            <i class="fa-regular fa-eye-slash"></i> </button>
                    </div>
                </div>

                <button type="submit" class="btn-primary">Masuk</button>
            </form>

            <div class="auth-footer">
                Belum punya akun? <a href="/register">Daftar sekarang</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div>&copy; 2026 SiapDonor. All rights reserved.</div> </footer>

    <script>
        function togglePassword(inputId, button) {
            const input = document.getElementById(inputId); // Menangkap elemen input password berdasarkan ID-nya
            const icon = button.querySelector('i'); // Menangkap elemen tag icon <i> di dalam tombol
            
            // Jika tipenya saat ini adalah password (tersembunyi bintang-bintang)
            if (input.type === 'password') {
                input.type = 'text'; // Ubah tipenya jadi teks biasa agar karakternya kelihatan
                icon.classList.remove('fa-eye-slash'); // Hapus icon mata dicoret
                icon.classList.add('fa-eye'); // Ganti jadi icon mata terbuka
            } else {
                // Jika tipenya sudah teks terbuka, kembalikan menjadi tersembunyi
                input.type = 'password'; 
                icon.classList.remove('fa-eye'); // Hapus icon mata terbuka
                icon.classList.add('fa-eye-slash'); // Ganti jadi icon mata dicoret kembali
            }
        }
    </script>
</body>
</html>