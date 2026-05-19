<?= $this->include('Layout/header'); ?>

<div class="auth-card">
    </div>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiapDonor - Masuk</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #f9fafb; /* Warna latar belakang abu-abu sangat muda */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .auth-card {
            background-color: #ffffff;
            width: 100%;
            max-width: 420px; /* Fleksibel, maksimal lebar 420px untuk desktop */
            padding: 40px 32px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        /* Bagian Logo */
        .brand-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .brand-logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 5px;
        }
        .brand-icon {
            color: #990000; /* Merah gelap */
            font-size: 28px;
        }
        .brand-name {
            font-size: 22px;
            font-weight: 700;
            color: #333;
        }
        .brand-subtitle {
            font-size: 11px;
            color: #6b7280;
        }

        /* Bagian Judul Form */
        .form-header {
            text-align: center;
            margin-bottom: 25px;
        }
        .form-header h2 {
            font-size: 20px;
            font-weight: 600;
            color: #111827;
            margin-bottom: 8px;
        }
        .form-header p {
            font-size: 13px;
            color: #4b5563;
        }

        /* Grup Input Form */
        .form-group {
            margin-bottom: 18px;
        }
        .form-group label {
            display: block;
            font-size: 12px;
            font-weight: 500;
            color: #374151;
            margin-bottom: 6px;
        }
        .form-control {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 13px;
            color: #1f2937;
            transition: border-color 0.2s;
        }
        .form-control:focus {
            outline: none;
            border-color: #990000;
        }
        .form-control::placeholder {
            color: #9ca3af;
        }

        /* Wrapper untuk Input Password (ikon mata) */
        .password-wrapper {
            position: relative;
        }
        .password-toggle {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
            cursor: pointer;
            border: none;
            background: none;
        }

        /* Dropdown Select */
        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%236b7280' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 14px center;
            background-size: 14px;
            cursor: pointer;
        }

        /* Tombol */
        .btn-primary {
            width: 100%;
            background-color: #8b0000; /* Merah gelap sesuai desain */
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.2s;
        }
        .btn-primary:hover {
            background-color: #6b0000;
        }

        /* Link Footer */
        .auth-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 13px;
            color: #4b5563;
        }
        .auth-footer a {
            color: #8b0000;
            font-weight: 600;
            text-decoration: none;
        }
        .auth-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="auth-card">
        <div class="brand-header">
            <div class="brand-logo-container">
                <i class="fa-solid fa-droplet brand-icon"></i>
                <span class="brand-name">SiapDonor</span>
            </div>
            <div class="brand-subtitle">Sistem Informasi Donor Darah</div>
        </div>

        <div class="form-header">
            <h2>Masuk ke Akun Anda</h2>
            <p>Silakan masuk untuk melanjutkan</p>
        </div>

        <form action="#" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Masukkan email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-wrapper">
                    <input type="password" id="password" class="form-control" placeholder="Masukkan password" required>
                    <button type="button" class="password-toggle" onclick="togglePassword('password', this)">
                        <i class="fa-regular fa-eye-slash"></i>
                    </button>
                </div>
            </div>

            <div class="form-group">
                <label for="role">Login sebagai</label>
                <select id="role" class="form-control" required>
                    <option value="" disabled selected hidden>Pilih peran</option>
                    <option value="pmi">PMI</option>
                    <option value="rumah_sakit">Rumah Sakit</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit" class="btn-primary">Masuk</button>
        </form>

        <div class="auth-footer">
            Belum punya akun? <a href="register.html">Daftar sekarang</a>
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
    </script>
</body>
</html>

<?= $this->include('Layout/footer'); ?>