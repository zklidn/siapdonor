<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lengkapi Biodata - SiapDonor</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { display: flex; flex-direction: column; min-height: 100vh; background-color: #fcfcfc; }

        /* NAVBAR */
        .navbar { display: flex; justify-content: space-between; align-items: center; padding: 15px 5%; background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.05); position: sticky; top: 0; z-index: 100; }
        .brand { display: flex; align-items: center; gap: 12px; text-decoration: none; }
        .logo-nav { height: 40px; width: auto; object-fit: contain; }
        .brand-text { display: flex; flex-direction: column; line-height: 1.2; }
        .brand-text strong { font-size: 20px; color: #333; font-weight: 700; } 
        .brand-text span { font-size: 11px; color: #6b7280; font-weight: 400; } 
        .nav-links { display: flex; gap: 20px; align-items: center; }
        .nav-links a { text-decoration: none; color: #333; font-weight: 500; font-size: 14px; }
        .btn-outline { border: 1px solid #8b0000; color: #8b0000; padding: 8px 20px; border-radius: 6px; font-weight: 600; text-decoration: none; transition: 0.2s; }
        .btn-solid { background: #8b0000; color: white !important; padding: 8px 20px; border-radius: 6px; font-weight: 600; text-decoration: none; transition: 0.2s; }

        /* MAIN SECTION */
        .auth-section { flex: 1; display: flex; align-items: center; justify-content: center; background-image: url('<?= base_url("awalan.png") ?>'); background-size: cover; background-position: center right; position: relative; padding: 40px 20px; }
        .auth-section::before { content: ""; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(255, 255, 255, 0.6); z-index: 1; }

        .auth-card { position: relative; z-index: 2; background-color: #ffffff; width: 100%; max-width: 450px; padding: 40px 35px; border-radius: 24px; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08); }
        
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
        
        /* Input dan Textarea menggunakan class yang sama */
        .form-control { width: 100%; padding: 14px 16px; border: 1.5px solid #e5e7eb; border-radius: 10px; font-size: 14px; color: #1f2937; transition: all 0.2s; font-family: 'Inter', sans-serif; }
        .form-control:focus { outline: none; border-color: #8b0000; box-shadow: 0 0 0 3px rgba(139,0,0,0.1); }
        
        .btn-primary { width: 100%; background-color: #8b0000; color: white; padding: 14px; border: none; border-radius: 10px; font-size: 15px; font-weight: 600; cursor: pointer; margin-top: 10px; transition: 0.2s; font-family: 'Inter', sans-serif; }
        .btn-primary:hover { background-color: #6b0000; transform: translateY(-1px); }

        .footer { background: #8b0000; color: white; padding: 20px 5%; text-align: center; font-size: 13px; }
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
                <h2>Lengkapi Biodata</h2>
                <p>Lengkapi profil instansi Anda sebelum mulai</p>
            </div>

            <form action="/profile/simpan_biodata" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input type="text" id="nama_instansi" name="nama_instansi" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="no_telepon">Nomor Telepon</label>
                    <input type="tel" id="no_telepon" name="no_telepon" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <textarea id="alamat" name="alamat" class="form-control" required style="resize: none;"></textarea>
                </div>

                <div class="form-group">
                    <label for="foto_profil">Foto Profil / Logo Instansi</label>
                    <input type="file" id="foto_profil" name="foto_profil" class="form-control" accept="image/*" required style="padding: 10px 16px;">
                    <small style="font-size: 11px; color: #6b7280; margin-top: 5px; display: block;">Format: JPG, PNG (Maks 2MB)</small>
                </div>

                <button type="submit" class="btn-primary">Simpan Biodata</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <div>&copy; 2026 SiapDonor. All rights reserved.</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const fileInput = document.getElementById('foto_profil');
        fileInput.addEventListener('change', function() {
            // Mengecek apakah ukuran file lebih dari 2MB (2.000.000 bytes)
            if (this.files[0].size > 2000000) { 
                // Menampilkan pop-up peringatan SweetAlert2
                Swal.fire({
                    icon: 'error',
                    title: 'Ukuran Terlalu Besar!',
                    text: 'Maksimal ukuran file foto profil adalah 2MB.',
                    confirmButtonColor: '#8b0000',
                    confirmButtonText: 'Pilih Ulang'
                });
                // Mereset (mengosongkan) inputan file
                this.value = "";
            }
        });
    </script>
</body>
</html>