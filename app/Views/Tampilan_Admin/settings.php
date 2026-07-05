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

                <?php if (!empty($user['file_foto'])): ?>

                    <img
                        src="data:image/jpeg;base64,<?= base64_encode($user['file_foto']); ?>"
                        style="width:120px;height:120px;border-radius:50%;object-fit:cover;">

                <?php else: ?>

                    <i class="fa-solid fa-user foto-icon"></i>

                <?php endif; ?>

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
                    <input type="text" name="nama" value="<?= esc($user['nama']) ?>" class="form-control">
                </div>

                <div>
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="<?= esc($user['email']) ?>" class="form-control">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (session()->getFlashdata('success')) : ?>
<script>
Swal.fire({
    toast: true,
    position: 'top-end',
    icon: 'success',
    title: '<?= session()->getFlashdata('success') ?>',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true
});
</script>
<?php endif; ?>

<?php if (session()->getFlashdata('error')) : ?>
<script>
Swal.fire({
    toast: true,
    position: 'top-end',
    icon: 'error',
    title: '<?= session()->getFlashdata('error') ?>',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true
});
</script>
<?php endif; ?>
<?= $this->endSection() ?>