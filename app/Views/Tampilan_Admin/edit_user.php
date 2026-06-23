<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('admin') ?>" class="menu-item">
        <i class="fa-solid fa-gauge"></i> Dashboard
    </a>
    <a href="<?= base_url('admin/kelola_user') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-users-gear"></i> Kelola User
    </a>
    <a href="<?= base_url('admin/data_donor') ?>" class="menu-item">
        <i class="fa-solid fa-droplet"></i> Data Donor
    </a>
    <a href="<?= base_url('admin/riwayat') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat
    </a>
</aside>

<main class="content-area">
    <h1 style="margin-bottom: 25px; color: #111827; text-align: center;">Edit Data User</h1>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 30px; max-width: 600px; margin: 0 auto;">
        
        <form action="<?= base_url('admin/update_user/' . ($user['id'] ?? $user['id_user'])) ?>" method="post">
            
            <div style="margin-bottom: 15px;">
                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">Nama Lengkap</label>
                <input type="text" name="nama" value="<?= esc($user['nama'] ?? '') ?>" required style="width: 100%; padding: 12px 15px; border: 1px solid #d1d5db; border-radius: 8px; outline: none; font-size: 14px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">Email</label>
                <input type="email" name="email" value="<?= esc($user['email'] ?? '') ?>" required style="width: 100%; padding: 12px 15px; border: 1px solid #d1d5db; border-radius: 8px; outline: none; font-size: 14px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">Peran / Role</label>
                <?php $currentRole = $user['role'] ?? ''; ?>
                <select name="role" style="width: 100%; padding: 12px 15px; border: 1px solid #d1d5db; border-radius: 8px; outline: none; font-size: 14px; background: white;">
                    <option value="Admin" <?= ($currentRole == 'Admin') ? 'selected' : '' ?>>Admin</option>
                    <option value="PMI" <?= ($currentRole == 'PMI') ? 'selected' : '' ?>>PMI</option>
                    <option value="Rumah Sakit" <?= ($currentRole == 'Rumah Sakit') ? 'selected' : '' ?>>Rumah Sakit</option>
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">Nama Instansi</label>
                <input type="text" name="nama_instansi" value="<?= esc($user['nama_instansi'] ?? '') ?>" style="width: 100%; padding: 12px 15px; border: 1px solid #d1d5db; border-radius: 8px; outline: none; font-size: 14px;">
            </div>

            <div style="margin-bottom: 25px;">
                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">Status Akun</label>
                <?php $currentStatus = $user['status'] ?? 'Aktif'; ?>
                <select name="status" style="width: 100%; padding: 12px 15px; border: 1px solid #d1d5db; border-radius: 8px; outline: none; font-size: 14px; background: white;">
                    <option value="Aktif" <?= ($currentStatus == 'Aktif') ? 'selected' : '' ?>>Aktif</option>
                    <option value="Nonaktif" <?= ($currentStatus == 'Nonaktif') ? 'selected' : '' ?>>Nonaktif</option>
                </select>
            </div>

            <div style="display: flex; gap: 10px; justify-content: flex-end;">
                <a href="<?= base_url('admin/kelola_user') ?>" style="padding: 10px 20px; background: #f3f4f6; color: #4b5563; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 14px;">Batal</a>
                <button type="submit" style="padding: 10px 20px; background: #8b0000; color: white; border: none; border-radius: 8px; font-weight: 600; font-size: 14px; cursor: pointer;">Simpan Perubahan</button>
            </div>

        </form>

    </div>
</main>

<?= $this->endSection() ?>