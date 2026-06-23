<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('admin') ?>" class="menu-item">
        <i class="fa-solid fa-gauge"></i> Dashboard
    </a>
    <a href="<?= base_url('admin/kelola_user') ?>" class="menu-item">
        <i class="fa-solid fa-users-gear"></i> Kelola User
    </a>
    <a href="<?= base_url('admin/data_donor') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-droplet"></i> Data Donor
    </a>
    <a href="<?= base_url('admin/riwayat') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat
    </a>
</aside>

<main class="content-area">
    <h1 style="margin-bottom: 25px; color: #111827; text-align: center;">Edit Data Donor</h1>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 30px; max-width: 600px; margin: 0 auto;">
        
        <form action="<?= base_url('admin/update_donor/' . $donor['id_donor']) ?>" method="post">
            
            <div style="margin-bottom: 15px;">
                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">Nama Donor</label>
                <input type="text" name="nama" value="<?= esc($donor['nama'] ?? '') ?>" required style="width: 100%; padding: 12px 15px; border: 1px solid #d1d5db; border-radius: 8px; outline: none; font-size: 14px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">Kecamatan / Kota</label>
                <input type="text" name="kecamatan" value="<?= esc($donor['kota'] ?? '') ?>" required style="width: 100%; padding: 12px 15px; border: 1px solid #d1d5db; border-radius: 8px; outline: none; font-size: 14px;">
            </div>

            <div style="margin-bottom: 15px; display: flex; gap: 15px;">
                <div style="flex: 1;">
                    <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">Golongan Darah</label>
                    <input type="text" name="golongan_darah" value="<?= esc($donor['golongan_darah'] ?? '') ?>" required style="width: 100%; padding: 12px 15px; border: 1px solid #d1d5db; border-radius: 8px; outline: none; font-size: 14px;">
                </div>
                <div style="flex: 1;">
                    <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">Rhesus</label>
                    <input type="text" name="rhesus" value="<?= esc($donor['rhesus'] ?? '') ?>" required style="width: 100%; padding: 12px 15px; border: 1px solid #d1d5db; border-radius: 8px; outline: none; font-size: 14px;">
                </div>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">No. WhatsApp / Kontak</label>
                <input type="text" name="no_hp" value="<?= esc($donor['no_hp'] ?? '') ?>" required style="width: 100%; padding: 12px 15px; border: 1px solid #d1d5db; border-radius: 8px; outline: none; font-size: 14px;">
            </div>

            <div style="margin-bottom: 25px;">
                <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 8px;">Status</label>
                <select name="status" style="width: 100%; padding: 12px 15px; border: 1px solid #d1d5db; border-radius: 8px; outline: none; font-size: 14px; background: white;">
                    <option value="Aktif" <?= (($donor['status'] ?? '') == 'Aktif') ? 'selected' : '' ?>>Aktif</option>
                    <option value="Nonaktif" <?= (($donor['status'] ?? '') == 'Nonaktif') ? 'selected' : '' ?>>Nonaktif</option>
                </select>
            </div>

            <div style="display: flex; gap: 10px; justify-content: flex-end;">
                <a href="<?= base_url('admin/data_donor') ?>" style="padding: 10px 20px; background: #f3f4f6; color: #4b5563; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 14px;">Batal</a>
                <button type="submit" style="padding: 10px 20px; background: #8b0000; color: white; border: none; border-radius: 8px; font-weight: 600; font-size: 14px; cursor: pointer;">Simpan Perubahan</button>
            </div>

        </form>

    </div>
</main>

<?= $this->endSection() ?>