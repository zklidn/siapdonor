<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Daftar Akun - SiapDonor</title> <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="<?= base_url('register.css') ?>">
    
    <style>
        .auth-section {
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
            <a href="#">Tentang Kami</a>
            <a href="/login" class="btn-outline">Masuk</a> <a href="/register" class="btn-solid">Daftar Akun</a> </div>
    </nav>

    <section class="auth-section">
        <div class="auth-card">
            
            <div class="brand-header">
                <div class="brand-logo-container">
                    <img src="<?= base_url('logo.jpg') ?>" alt="Ikon SiapDonor" class="brand-icon">
                    <span class="brand-name">SiapDonor</span>
                </div>
                <div class="brand-subtitle">Sistem Informasi Donor Darah</div>
            </div>

            <div class="form-header">
                <h2>Buat Akun Baru</h2>
                <p>Isi data berikut untuk membuat akun</p>
            </div>

            <?php if (session()->getFlashdata('error')) : ?>
                <div style="background:#fee2e2; color:#b91c1c; padding:10px; border-radius:5px; margin-bottom:15px; font-size:13px; font-weight:500;">
                    <?= session()->getFlashdata('error') ?> </div>
            <?php endif; ?>

            <form action="<?= base_url('register/proses') ?>" method="POST" onsubmit="return validatePassword()">
                
                <div class="form-group">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input type="text" id="nama_instansi" name="nama_instansi" class="form-control" placeholder="Contoh: RS Wahidin Sudirohusodo" required>
                </div>

                <div class="form-group">
                    <label for="email_reg">Email</label>
                    <input type="email" id="email_reg" name="email_reg" class="form-control" placeholder="Masukkan email" required>
                </div>

                <div class="form-group">
                    <label for="password_reg">Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="password_reg" name="password_reg" class="form-control" placeholder="Buat password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('password_reg', this)">
                            <i class="fa-regular fa-eye-slash"></i>
                        </button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="konfirmasi_password">Konfirmasi Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="konfirmasi_password" name="konfirmasi_password" class="form-control" placeholder="Konfirmasi password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('konfirmasi_password', this)">
                            <i class="fa-regular fa-eye-slash"></i>
                        </button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="role_reg">Daftar sebagai</label>
                    <select id="role_reg" name="role_reg" class="form-control" required>
                        <option value="" disabled selected hidden>Pilih peran</option>
                        <option value="pmi">PMI</option>
                        <option value="rumah_sakit">Rumah Sakit</option>
                    </select>
                </div>

                <button type="submit" class="btn-primary">Daftar</button>
            </form>

            <div class="auth-footer">
                Sudah punya akun? <a href="/login">Masuk sekarang</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div>&copy; 2026 SiapDonor. All rights reserved.</div>
    </footer>

    <div id="customAlert" class="modal-overlay">
        <div class="modal-box">
            <i class="fa-solid fa-circle-exclamation modal-icon"></i> <h3 class="modal-title">Peringatan!</h3>
            <p class="modal-text">Password dan Konfirmasi Password tidak cocok. Silakan periksa kembali ketikan Anda.</p>
            <button class="btn-modal" onclick="closeAlert()">Mengerti</button> </div>
    </div>

    <script>
        // Logika menyembunyikan dan memunculkan karakter teks password saat mata diklik
        function togglePassword(inputId, button) {
            const input = document.getElementById(inputId);
            const icon = button.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        }

        // Validasi kecocokan sandi sebelum diizinkan terkirim dikirim ke controller backend database
        function validatePassword() {
            const password = document.getElementById('password_reg').value;
            const konfirmasi = document.getElementById('konfirmasi_password').value;

            if (password !== konfirmasi) {
                // Memaksa modal box keluar memotong jalan frame jika ketikan salah ketik
                document.getElementById('customAlert').classList.add('show');
                return false; // Mengunci / membatalkan pengiriman data form ke backend
            }
            return true; // Menyetujui pengiriman data jika aman cocok
        }

        // Logika fungsi klik tombol mengerti untuk membuang status show modal pop-up
        function closeAlert() {
            document.getElementById('customAlert').classList.remove('show');
        }
    </script>
</body>
</html>