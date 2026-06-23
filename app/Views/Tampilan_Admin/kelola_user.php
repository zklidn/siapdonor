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
    <h1 style="margin-bottom: 25px; color: #111827;">Kelola User</h1>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 25px;">
        
        <form action="" method="get" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 15px;">
            
            <div style="display: flex; gap: 15px; flex: 1;">
                <div style="position: relative; width: 280px;">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 15px; top: 12px; color: #9ca3af;"></i>
                    <input type="text" name="keyword" value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>" placeholder="Cari nama atau email..." style="width: 100%; padding: 10px 15px 10px 40px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 14px; background: #f9fafb;">
                </div>
                
                <select name="role" onchange="this.form.submit()" style="padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 14px; color: #4b5563; cursor: pointer; background: #f9fafb;">
                    <option value="">Semua Peran</option>
                    <option value="PMI" <?= (isset($_GET['role']) && $_GET['role'] == 'PMI') ? 'selected' : '' ?>>PMI</option>
                    <option value="Rumah Sakit" <?= (isset($_GET['role']) && $_GET['role'] == 'Rumah Sakit') ? 'selected' : '' ?>>Rumah Sakit</option>
                    <option value="Admin" <?= (isset($_GET['role']) && $_GET['role'] == 'Admin') ? 'selected' : '' ?>>Admin</option>
                </select>
                
                <button type="submit" style="background: #8b0000; color: white; padding: 10px 20px; border-radius: 8px; border: none; cursor: pointer; font-weight: 600;">Cari</button>
            </div>

        </form>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; min-width: 800px;">
                <thead>
                    <tr style="border-bottom: 2px solid #f3f4f6;">
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">No</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Nama</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Email</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Peran</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Status</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Aksi</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php if (!empty($users)) : ?>
                        <?php 
                            // Rumus untuk melanjutkan nomor urut saat pindah halaman (jika data per halaman = 5)
                            $page = isset($_GET['page_users']) ? $_GET['page_users'] : 1;
                            $no = 1 + (5 * ($page - 1));
                        ?>

                        <?php foreach ($users as $u) : ?>
                            <tr style="border-bottom: 1px solid #f3f4f6; transition: 0.2s;">
                                <td style="padding: 18px 10px; color: #4b5563;"><?= $no++ ?></td>
                                <td style="padding: 18px 10px; font-weight: 600; color: #111827;"><?= esc($u['nama']) ?></td>
                                <td style="padding: 18px 10px; color: #4b5563;"><?= esc($u['email']) ?></td>
                                
                               <td style="padding: 18px 10px; color: #4b5563;"><?= esc($u['role'] ?? '-') ?></td>
                                
                                
                                
                                <td style="padding: 18px 10px;">
                                    <?php if (isset($u['status']) && $u['status'] == 'Aktif') : ?>
                                        <span style="background: #dcfce7; color: #166534; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Aktif</span>
                                    <?php else : ?>
                                        <span style="background: #ffedd5; color: #c2410c; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Nonaktif</span>
                                    <?php endif; ?>
                                </td>
                                
                                <td style="padding: 18px 10px; display: flex; gap: 15px;">
                                    
                                    <a href="<?= base_url('admin/edit_user/' . $u['id']) ?>">
                                        <i class="fa-solid fa-pen-to-square" style="color: #9ca3af; cursor: pointer; font-size: 16px;" title="Edit"></i>
                                    </a>

                                    <a href="<?= base_url('admin/hapus_user/' . $u['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus user <?= esc($u['nama']) ?>?');">
                                        <i class="fa-solid fa-trash" style="color: #ef4444; cursor: pointer; font-size: 16px;" title="Hapus"></i>
                                    </a>
                                </td>

                            </tr>
                        <?php endforeach; ?>

                    <?php else : ?>
                        <tr>
                            <td colspan="7" style="text-align: center; padding: 20px; color: #6b7280;">
                                Data user tidak ditemukan.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 25px; font-size: 14px; color: #6b7280; flex-wrap: wrap; gap: 15px;">
            <div>Total Data: <b><?= esc($totalData) ?></b> user</div>
            
            <div style="display: flex; gap: 8px; align-items: center; overflow-x: auto;">
                <?= $pager->links('users', 'default_full') ?>
            </div>
        </div>
        
    </div>
</main>

<?= $this->endSection() ?>