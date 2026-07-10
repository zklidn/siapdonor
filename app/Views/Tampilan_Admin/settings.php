<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('css_admin/style_settings_admin.css') ?>">

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('admin') ?>" class="menu-item">
        <i class="fa-solid fa-gauge"></i> Dashboard
    </a>
    <a href="<?= base_url('admin/kelola_user') ?>" class="menu-item">
        <i class="fa-solid fa-users-gear"></i> Kelola User
    </a>
    <a href="<?= base_url('admin/riwayat') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat
    </a>
</aside>

<main class="content-area">
    
    <div class="page-header">
        <h1 class="page-title">Pengaturan Akun</h1>
    </div>

    <div class="settings-card mb-30">
        <h3 class="card-title">Profil Pengguna</h3>
        <p class="card-subtitle">Perbarui foto dan detail informasi akun Anda di sini.</p>
        
        <form action="<?= base_url('admin/update_profil') ?>" method="POST" enctype="multipart/form-data" class="settings-form">
            
            <div class="form-group foto-group">
                <label class="form-label">Foto Profil</label>
                <div class="foto-wrapper">
                    <div class="foto-placeholder">
                        <i class="fa-solid fa-user foto-icon"></i>
                    </div>
                    <div class="foto-action">
                        <label for="foto_profil" class="btn-outline-small cursor-pointer">Pilih Foto</label>
                        <input type="file" id="foto_profil" name="foto_profil" accept="image/*" class="foto-input d-none">
                        <small class="foto-hint">Format: JPG, PNG (Maks 2MB)</small>
                    </div>
                </div>
            </div>

            <div class="grid-profil">
                <div class="form-group">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" value="RS Bhakti Agung" class="form-control">
                </div>

                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="rsbhaktiagung@gmail.com" class="form-control">
                </div>
            </div>

            <div class="form-action">
                <button type="submit" class="btn-solid">Simpan Perubahan</button>
            </div>
        </form>
    </div>

    <div class="settings-card mb-30">
        <h3 class="card-title">Keamanan Akun</h3>
        <p class="card-subtitle">Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman.</p>
        
        <button type="button" id="btnTampilPassword" class="btn-outline mt-15">
            <i class="fa-solid fa-lock"></i> Ubah Kata Sandi
        </button>

        <div id="kotakFormPassword" class="password-box" style="display: none;">
            <form action="<?= base_url('admin/update_password') ?>" method="POST">
                
                <div class="form-group">
                    <label class="form-label">Kata Sandi Saat Ini</label>
                    <input type="password" name="password_lama" class="form-control" placeholder="Masukkan kata sandi lama untuk verifikasi" required>
                </div>

                <div class="grid-profil">
                    <div class="form-group">
                        <label class="form-label">Kata Sandi Baru</label>
                        <input type="password" name="password_baru" class="form-control" placeholder="Minimal 8 karakter" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Konfirmasi Sandi Baru</label>
                        <input type="password" name="konfirmasi_password" class="form-control" placeholder="Ketik ulang kata sandi baru" required>
                    </div>
                </div>

                <div class="form-action flex-action">
                    <button type="button" id="btnBatalPassword" class="btn-outline text-gray border-gray">Batal</button>
                    <button type="submit" class="btn-solid">Simpan Sandi Baru</button>
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
            // Memunculkan form, menyembunyikan tombol utama
            btnTampil.addEventListener('click', function() {
                btnTampil.style.display = 'none';
                kotakForm.style.display = 'block';
            });

            // Menyembunyikan form, memunculkan kembali tombol utama
            btnBatal.addEventListener('click', function() {
                kotakForm.style.display = 'none';
                btnTampil.style.display = 'inline-flex';
                
                // Opsional: Mengosongkan isian form saat dibatalkan
                var inputs = kotakForm.querySelectorAll('input[type="password"]');
                inputs.forEach(input => input.value = '');
            });
        }
    });
</script>

<?= $this->endSection() ?>