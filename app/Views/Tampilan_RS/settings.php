<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('css_rs/style_settings_rs.css') ?>">

<aside class="sidebar" id="sidebar">
    <div class="menu-top">
        <a href="<?= base_url('rs') ?>" class="menu-item menu-active">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
        <a href="<?= base_url('rs/permintaan_darah') ?>" class="menu-item">
            <i class="fa-solid fa-droplet"></i> Permintaan Darah
        </a>
        <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="menu-item">
            <i class="fa-solid fa-file-invoice"></i> Riwayat Permintaan
        </a>
    </div>
</aside>

<main class="content-area">
    
    <div class="page-header">
        <h1 class="page-title">Settings</h1>
    </div>

    <div class="settings-card">
        <h3 class="card-title">Profil Pengguna</h3>
        
        <form action="<?= base_url('rs/update_profil') ?>" method="POST" enctype="multipart/form-data">
            
            <div class="form-group foto-group">
                <label class="form-label">Foto Profil</label>
                <div class="foto-wrapper">
                    <div class="foto-placeholder">
                        <i class="fa-solid fa-user foto-icon"></i>
                    </div>
                    <div>
                        <input type="file" name="foto_profil" accept="image/*" class="foto-input">
                        <small class="foto-hint">Format: JPG, PNG (Maks 2MB)</small>
                    </div>
                </div>
            </div>

            <div class="grid-profil-rs">
                <div>
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" value="RS Wahidin" class="form-control">
                </div>
                <div>
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="rswahidin@gmail.com" class="form-control">
                </div>
                <div>
                    <button type="submit" class="btn-solid">Simpan Perubahan</button>
                </div>
            </div>
            
        </form>
    </div>

    <div class="settings-card">
        <h3 class="card-title">Ubah Password</h3>
        <p class="card-subtitle">Pastikan akun Rumah Sakit Anda menggunakan kata sandi yang kuat untuk menjaga keamanan data.</p>
        
        <button type="button" id="btnTampilPassword" class="btn-outline mt-15">
            <i class="fa-solid fa-lock"></i> Ubah Password
        </button>

        <div id="kotakFormPassword" class="password-box" style="display: none;">
            <form action="<?= base_url('rs/update_password') ?>" method="POST">
                
                <div class="form-group">
                    <label class="form-label">Password Saat Ini</label>
                    <input type="password" name="old_password" class="form-control" placeholder="Masukkan password saat ini" required>
                </div>

                <div class="grid-password">
                    <div class="form-group">
                        <label class="form-label">Password Baru</label>
                        <input type="password" name="new_password" class="form-control" placeholder="Masukkan password baru" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Konfirmasi Password Baru</label>
                        <input type="password" name="confirm_password" class="form-control" placeholder="Konfirmasi password baru" required>
                    </div>
                </div>

                <div class="form-action flex-action">
                    <button type="button" id="btnBatalPassword" class="btn-outline text-gray border-gray">Batal</button>
                    <button type="submit" class="btn-solid">Ubah Password</button>
                </div>
                
            </form>
        </div>
    </div>

</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var btnTampil = document.getElementById('btnTampilPassword');
        var btnBatal = document.getElementById('btnBatalPassword');
        var kotakForm = document.getElementById('kotakFormPassword');

        if(btnTampil && btnBatal && kotakForm) {
            btnTampil.addEventListener('click', function() {
                btnTampil.style.display = 'none';
                kotakForm.style.display = 'block';
            });

            btnBatal.addEventListener('click', function() {
                kotakForm.style.display = 'none';
                btnTampil.style.display = 'inline-flex';
                
                // Mengosongkan form saat dibatalkan
                var inputs = kotakForm.querySelectorAll('input[type="password"]');
                inputs.forEach(input => input.value = '');
            });
        }
    });
</script>

<?= $this->endSection() ?>