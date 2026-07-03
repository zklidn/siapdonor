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
        <h1 class="page-title">Settings</h1>
    </div>

    <div class="settings-card mb-30">
        <h3 class="card-title">Profil Pengguna</h3>
        
        <form action="<?= base_url('admin/update_profil') ?>" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
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

            <div class="grid-profil">
                <div>
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" value="RS Bhakti Agung" class="form-control">
                </div>

                <div>
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="rsbhaktiagung@gmail.com" class="form-control">
                </div>

                <div>
                    <button type="submit" class="btn-submit">Simpan Perubahan</button>
                </div>
            </div>

        </form>
    </div>

    <div class="footer-text">
        &copy; 2026 SiapDonor. All rights reserved.
    </div>

</main>
<?= $this->endSection() ?>