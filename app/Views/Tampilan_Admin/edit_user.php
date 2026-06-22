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
    <div style="margin-bottom: 30px;">
        <h1 style="color: #111827; font-size: 24px; margin-bottom: 8px;">Edit User</h1>
        <div style="color: #6b7280; font-size: 14px; display: flex; align-items: center; gap: 8px;">
            <a href="<?= base_url('admin/kelola_user') ?>" style="color: #3b82f6; text-decoration: none;">Kelola User</a>
            <i class="fa-solid fa-chevron-right" style="font-size: 10px;"></i>
            <span>Edit User</span>
        </div>
    </div>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 35px;">
        
        <form action="<?= base_url('admin/update_user') ?>" method="POST">
            <input type="hidden" name="id" value="<?= $user['id'] ?? '1' ?>">

            <h3 style="color: #111827; font-size: 16px; font-weight: 700; margin-bottom: 20px;">Informasi Pengguna</h3>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px; margin-bottom: 35px;">
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px;">Nama Lengkap</label>
                    <input type="text" name="nama" value="<?= esc($user['nama'] ?? 'RS Budi Agung') ?>" style="width: 100%; padding: 12px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; color: #1f2937; background: #f9fafb;">
                </div>

                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px;">Role / Peran</label>
                    <select name="role" style="width: 100%; padding: 12px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; color: #1f2937; background: #f9fafb; cursor: pointer;">
                        <option value="rumah_sakit" <?= (isset($user['role']) && $user['role'] == 'rumah_sakit') ? 'selected' : 'selected' ?>>rumah_sakit</option>
                        <option value="pmi" <?= (isset($user['role']) && $user['role'] == 'pmi') ? 'selected' : '' ?>>pmi</option>
                        <option value="admin" <?= (isset($user['role']) && $user['role'] == 'admin') ? 'selected' : '' ?>>admin</option>
                    </select>
                </div>

                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px;">Email</label>
                    <input type="email" name="email" value="<?= esc($user['email'] ?? 'mifthawahdania@gmail.com') ?>" style="width: 100%; padding: 12px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; color: #1f2937; background: #f9fafb;">
                </div>

                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px;">Status Akun</label>
                    <select name="status" style="width: 100%; padding: 12px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; color: #1f2937; background: #f9fafb; cursor: pointer;">
                        <option value="Aktif" <?= (isset($user['status']) && $user['status'] == 'Aktif') ? 'selected' : 'selected' ?>>Aktif</option>
                        <option value="Nonaktif" <?= (isset($user['status']) && $user['status'] == 'Nonaktif') ? 'selected' : '' ?>>Nonaktif</option>
                    </select>
                </div>
            </div>

            <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 0 0 35px 0;">

            <h3 style="color: #111827; font-size: 16px; font-weight: 700; margin-bottom: 20px;">Reset Password (Opsional)</h3>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px; margin-bottom: 10px;">
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px;">Password Baru</label>
                    <div style="position: relative;">
                        <input type="password" id="new_password" name="new_password" placeholder="Masukkan password baru" style="width: 100%; padding: 12px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; color: #1f2937; background: #f9fafb;">
                        <i class="fa-regular fa-eye-slash" onclick="toggleEditPassword('new_password', this)" style="position: absolute; right: 15px; top: 14px; color: #9ca3af; cursor: pointer;"></i>
                    </div>
                </div>

                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px;">Konfirmasi Password Baru</label>
                    <div style="position: relative;">
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Konfirmasi password baru" style="width: 100%; padding: 12px 15px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 14px; outline: none; color: #1f2937; background: #f9fafb;">
                        <i class="fa-regular fa-eye-slash" onclick="toggleEditPassword('confirm_password', this)" style="position: absolute; right: 15px; top: 14px; color: #9ca3af; cursor: pointer;"></i>
                    </div>
                </div>
            </div>
            
            <p style="color: #9ca3af; font-size: 13px; margin-bottom: 40px;">Kosongkan jika password tidak ingin diubah.</p>

            <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 0 0 25px 0;">

            <div style="display: flex; justify-content: flex-end; gap: 15px;">
                <a href="<?= base_url('admin/kelola_user') ?>" style="background: #f3f4f6; color: #374151; padding: 12px 25px; border-radius: 8px; text-decoration: none; font-size: 14px; font-weight: 600; transition: 0.2s;">
                    Batal
                </a>
                <button type="submit" style="background: #8b0000; color: white; padding: 12px 25px; border: none; border-radius: 8px; font-size: 14px; font-weight: 600; cursor: pointer; transition: 0.2s;">
                    Simpan Perubahan
                </button>
            </div>

        </form>
    </div>

</main>

<script>
    // Script untuk toggle icon mata (lihat password)
    function toggleEditPassword(inputId, iconElement) {
        const input = document.getElementById(inputId);
        if (input.type === 'password') {
            input.type = 'text';
            iconElement.classList.remove('fa-eye-slash');
            iconElement.classList.add('fa-eye');
        } else {
            input.type = 'password';
            iconElement.classList.remove('fa-eye');
            iconElement.classList.add('fa-eye-slash');
        }
    }
</script>

<?= $this->endSection() ?>