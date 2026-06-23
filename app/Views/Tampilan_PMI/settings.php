<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('pmi') ?>" class="menu-item">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('pmi/data_pendonor') ?>" class="menu-item">
        <i class="fa-solid fa-users"></i> Data Pendonor
    </a>
    <a href="<?= base_url('pmi/stok_darah') ?>" class="menu-item">
        <i class="fa-solid fa-droplet"></i> Stok Darah
    </a>
    <a href="<?= base_url('pmi/permintaan_darah') ?>" class="menu-item">
        <i class="fa-solid fa-file-invoice"></i> Permintaan Darah
    </a>
    <a href="<?= base_url('pmi/riwayat_donor') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Donor
    </a>
    <a href="<?= base_url('pmi/laporan') ?>" class="menu-item">
        <i class="fa-solid fa-file-lines"></i> Laporan
    </a>
</aside>

<main class="content-area">
    
    <div style="margin-bottom: 30px;">
        <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Settings</h1>
    </div>

    <div style="background: white; padding: 30px; border-radius: 12px; border: 1px solid #e5e7eb; margin-bottom: 30px;">
        <h3 style="margin-bottom: 25px; font-size: 16px; color: #111827;">Profil Pengguna</h3>
        
        <form action="<?= base_url('pmi/update_profil') ?>" method="POST" enctype="multipart/form-data">
            
            <div style="margin-bottom: 25px;">
                <label style="display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 10px;">Foto Profil</label>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: #f3f4f6; border: 1px solid #e5e7eb; display: flex; justify-content: center; align-items: center; overflow: hidden; flex-shrink: 0;">
                        <i class="fa-solid fa-user" style="font-size: 24px; color: #9ca3af;"></i>
                    </div>
                    <div>
                        <input type="file" name="foto_profil" accept="image/*" style="padding: 6px 10px; border: 1px solid #e5e7eb; border-radius: 6px; font-size: 13px; outline: none; background: #f9fafb; display: block; width: 100%; max-width: 250px;">
                        <small style="display: block; font-size: 11px; color: #6b7280; margin-top: 6px;">Format: JPG, PNG (Maks 2MB)</small>
                    </div>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr auto; gap: 20px; align-items: end;">
                
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px;">Nama Lengkap</label>
                    <input type="text" name="nama" value="PMI Kota Palu" style="width: 100%; padding: 12px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 13px; outline: none; color: #1f2937;">
                </div>

                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px;">Email</label>
                    <input type="email" name="email" value="pmipalu@gmail.com" style="width: 100%; padding: 12px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 13px; outline: none; color: #1f2937;">
                </div>

                <div>
                    <button type="submit" style="background: #8b0000; color: white; padding: 12px 25px; border: none; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer; transition: 0.2s; height: 43px;">
                        Simpan Perubahan
                    </button>
                </div>

            </div>
        </form>
    </div>

    <div style="background: white; padding: 30px; border-radius: 12px; border: 1px solid #e5e7eb;">
        <h3 style="margin-bottom: 25px; font-size: 16px; color: #111827;">Ubah Password</h3>
        
        <form action="<?= base_url('pmi/update_password') ?>" method="POST">
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr auto; gap: 20px; align-items: end;">
                
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px;">Password Saat Ini</label>
                    <input type="password" name="old_password" placeholder="Masukkan password saat ini" style="width: 100%; padding: 12px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 13px; outline: none; color: #1f2937;">
                </div>

                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px;">Password Baru</label>
                    <input type="password" name="new_password" placeholder="Masukkan password baru" style="width: 100%; padding: 12px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 13px; outline: none; color: #1f2937;">
                </div>

                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px;">Konfirmasi Password Baru</label>
                    <input type="password" name="confirm_password" placeholder="Konfirmasi password baru" style="width: 100%; padding: 12px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 13px; outline: none; color: #1f2937;">
                </div>

                <div>
                    <button type="submit" style="background: #8b0000; color: white; padding: 12px 25px; border: none; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer; transition: 0.2s; height: 43px;">
                        Ubah Password
                    </button>
                </div>

            </div>
        </form>
    </div>

    <div style="margin-top: 40px; color: #9ca3af; font-size: 12px;">
        &copy; 2026 SiapDonor. All rights reserved.
    </div>

</main>
<?= $this->endSection() ?>