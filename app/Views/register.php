<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - SiapDonor</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { display: flex; flex-direction: column; min-height: 100vh; background-color: #fcfcfc; }

        /* ================= NAVBAR ================= */
        .navbar { display: flex; justify-content: space-between; align-items: center; padding: 15px 5%; background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 100; }
        .brand { display: flex; align-items: center; gap: 12px; text-decoration: none; }
        .logo-nav { height: 40px; width: auto; object-fit: contain; }
        .brand-text { display: flex; flex-direction: column; line-height: 1.2; }
        .brand-text strong { font-size: 20px; color: #333; font-weight: 700; } 
        .brand-text span { font-size: 11px; color: #6b7280; font-weight: 400; } 
        .nav-links { display: flex; gap: 20px; align-items: center; }
        .nav-links a { text-decoration: none; color: #333; font-weight: 500; font-size: 14px; }
        .btn-outline { border: 1px solid #8b0000; color: #8b0000; padding: 8px 20px; border-radius: 6px; font-weight: 600; text-decoration: none; transition: 0.2s; }
        .btn-outline:hover { background: #fff0f0; }
        .btn-solid { background: #8b0000; color: white !important; padding: 8px 20px; border-radius: 6px; font-weight: 600; text-decoration: none; transition: 0.2s; }
        .btn-solid:hover { background: #6b0000; }


    <div class="form-header">
        <h2>Buat Akun Baru</h2>
        <p>Isi data berikut untuk membuat akun</p>

    </div>

    <?php if (session()->getFlashdata('error')) : ?>
        <div style="background:#fee2e2;color:#b91c1c;padding:10px;border-radius:5px;margin-bottom:15px;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <form action="/register/fikasi" method="POST">
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
                <option value="admin">Admin</option>
            </select>
        </div>

        <button type="submit" class="btn-primary">Daftar</button>
    </form>

    <div class="auth-footer">
        Sudah punya akun? Sudah punya akun? <a href="/verifikasi">Masuk Sekarang</a>
    </div>
</div>

<script>
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
        }}
        /* ================= AREA BACKGROUND FULL ================= */
        .auth-section {
            flex: 1; 
            display: flex;
            align-items: center;
            justify-content: center; 
            background-image: url('<?= base_url("awalan.png") ?>');
            background-size: cover;
            background-position: center right;
            position: relative;
            padding: 40px 20px;
        }
        
        .auth-section::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(255, 255, 255, 0.6); 
            z-index: 1;
        }

        /* ================= KOTAK FORM ================= */
        .auth-card { 
            position: relative;
            z-index: 2; 
            background-color: #ffffff; 
            width: 100%; 
            max-width: 450px; 
            padding: 40px 35px; 
            border-radius: 24px; 
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08); 
        }
        
        .brand-header { text-align: center; margin-bottom: 30px; }
        .brand-logo-container { display: flex; align-items: center; justify-content: center; gap: 10px; margin-bottom: 5px; }
        .brand-icon { height: 35px; width: auto; object-fit: contain; } 
        .brand-name { font-size: 22px; font-weight: 700; color: #333; } 
        .brand-subtitle { font-size: 11px; color: #6b7280; } 
        
        .form-header { text-align: center; margin-bottom: 25px; }
        .form-header h2 { font-size: 22px; font-weight: 600; color: #111827; margin-bottom: 8px; }
        .form-header p { font-size: 14px; color: #4b5563; }
        
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; }
        .form-control { width: 100%; padding: 14px 16px; border: 1.5px solid #e5e7eb; border-radius: 10px; font-size: 14px; color: #1f2937; transition: all 0.2s; font-family: 'Inter', sans-serif; }
        .form-control:focus { outline: none; border-color: #8b0000; box-shadow: 0 0 0 3px rgba(139,0,0,0.1); }
        
        .password-wrapper { position: relative; }
        .password-toggle { position: absolute; right: 16px; top: 50%; transform: translateY(-50%); color: #6b7280; cursor: pointer; border: none; background: none; font-size: 16px; }
        
        select.form-control { appearance: none; background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%236b7280' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e"); background-repeat: no-repeat; background-position: right 14px center; background-size: 16px; cursor: pointer; }
        
        .btn-primary { width: 100%; background-color: #8b0000; color: white; padding: 14px; border: none; border-radius: 10px; font-size: 15px; font-weight: 600; cursor: pointer; margin-top: 10px; transition: 0.2s; font-family: 'Inter', sans-serif; }
        .btn-primary:hover { background-color: #6b0000; transform: translateY(-1px); }
        
        .auth-footer { text-align: center; margin-top: 24px; font-size: 14px; color: #4b5563; }
        .auth-footer a { color: #8b0000; font-weight: 600; text-decoration: none; }
        .auth-footer a:hover { text-decoration: underline; }

        /* ================= FOOTER ================= */
        .footer { background: #8b0000; color: white; padding: 20px 5%; display: flex; justify-content: center; align-items: center; font-size: 13px; }

        /* ================= POP-UP MODAL CANTIK ================= */
        .modal-overlay { 
            position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
            background: rgba(0, 0, 0, 0.4); backdrop-filter: blur(3px);
            display: flex; justify-content: center; align-items: center; 
            z-index: 1000; opacity: 0; visibility: hidden; transition: 0.3s ease; 
        }
        .modal-overlay.show { opacity: 1; visibility: visible; }
        .modal-box { 
            background: white; padding: 30px; border-radius: 20px; 
            text-align: center; width: 90%; max-width: 350px; 
            transform: translateY(-20px) scale(0.95); 
            transition: 0.3s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.15); 
        }
        .modal-overlay.show .modal-box { transform: translateY(0) scale(1); }
        .modal-icon { font-size: 45px; color: #dc2626; margin-bottom: 15px; }
        .modal-title { font-size: 18px; font-weight: 700; color: #111827; margin-bottom: 8px; }
        .modal-text { font-size: 14px; color: #4b5563; margin-bottom: 25px; line-height: 1.5; }
        .btn-modal { 
            background: #8b0000; color: white; border: none; padding: 12px 20px; 
            border-radius: 10px; font-weight: 600; cursor: pointer; 
            width: 100%; transition: 0.2s; font-size: 14px; font-family: 'Inter', sans-serif;
        }
        .btn-modal:hover { background: #6b0000; }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="/" class="brand">
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

            <form action="/register/proses" method="POST" onsubmit="return validatePassword()">
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
                        <option value="admin">Admin</option>
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

    <!-- BAGIAN YANG DITAMBAHKAN: HTML Pop-Up Modal -->
    <div id="customAlert" class="modal-overlay">
        <div class="modal-box">
            <i class="fa-solid fa-circle-exclamation modal-icon"></i>
            <h3 class="modal-title">Peringatan!</h3>
            <p class="modal-text">Password dan Konfirmasi Password tidak cocok. Silakan periksa kembali ketikan Anda.</p>
            <button class="btn-modal" onclick="closeAlert()">Mengerti</button>
        </div>
    </div>

    <script>
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

        // BAGIAN YANG DITAMBAHKAN: Logika memunculkan dan menutup Modal
        function validatePassword() {
            const password = document.getElementById('password_reg').value;
            const konfirmasi = document.getElementById('konfirmasi_password').value;

            if (password !== konfirmasi) {
                // Tampilkan Modal
                document.getElementById('customAlert').classList.add('show');
                return false; // Membatalkan pengiriman data
            }
            return true; // Lanjutkan proses pendaftaran
        }

        // Fungsi untuk menutup Modal saat tombol "Mengerti" diklik
        function closeAlert() {
            document.getElementById('customAlert').classList.remove('show');
        }
    </script>
</body>
</html>