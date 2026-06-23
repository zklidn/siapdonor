<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('admin') ?>" class="menu-item">
        <i class="fa-solid fa-gauge"></i> Dashboard
    </a>
    <a href="<?= base_url('admin/kelola_user') ?>" class="menu-item">
        <i class="fa-solid fa-users-gear"></i> Kelola User
    </a>
    <a href="<?= base_url('admin/data_donor') ?>" class="menu-item">
        <i class="fa-solid fa-droplet"></i> Data Donor
    </a>
    <a href="<?= base_url('admin/riwayat') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat
    </a>
</aside>

<main class="content-area">
    <h1 style="margin-bottom: 25px; color: #111827;">Riwayat Aktivitas</h1>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 25px;">
        
        <form action="" method="get" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 15px;">
            
            <div style="display: flex; gap: 15px; flex: 1;">
                <div style="position: relative; width: 280px;">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 15px; top: 12px; color: #9ca3af;"></i>
                    <input type="text" name="keyword" value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>" placeholder="Cari aktivitas atau pengguna..." style="width: 100%; padding: 10px 15px 10px 40px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 14px; background: #f9fafb;">
                </div>
                
                <select name="jenis" style="padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 14px; color: #4b5563; cursor: pointer; background: #f9fafb;">
                    <option value="">Semua Jenis</option>
                    <option value="Login/Logout" <?= (isset($_GET['jenis']) && $_GET['jenis'] == 'Login/Logout') ? 'selected' : '' ?>>Login/Logout</option>
                    <option value="Penambahan Data" <?= (isset($_GET['jenis']) && $_GET['jenis'] == 'Penambahan Data') ? 'selected' : '' ?>>Penambahan Data</option>
                    <option value="Perubahan Data" <?= (isset($_GET['jenis']) && $_GET['jenis'] == 'Perubahan Data') ? 'selected' : '' ?>>Perubahan Data</option>
                </select>
                
                <button type="submit" style="background: #8b0000; color: white; padding: 10px 20px; border-radius: 8px; border: none; cursor: pointer; font-weight: 600;">Cari</button>
            </div>
            
        </form>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; min-width: 800px;">
                <thead>
                    <tr style="border-bottom: 2px solid #f3f4f6;">
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">No</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Aktivitas</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Pengguna</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Waktu</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">IP Address</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php if (!empty($logs)) : ?>
                        <?php 
                            $page = isset($_GET['page_logs']) ? $_GET['page_logs'] : 1;
                            $no = 1 + (5 * ($page - 1));
                        ?>

                        <?php foreach ($logs as $log) : ?>
                            <tr style="border-bottom: 1px solid #f3f4f6; transition: 0.2s;">
                                <td style="padding: 18px 10px; color: #4b5563;"><?= $no++ ?></td>
                                
                                <td style="padding: 18px 10px; font-weight: 500; color: #111827;">
                                    <?= esc($log['aktivitas']) ?>
                                </td>
                                
                                <td style="padding: 18px 10px; color: #4b5563;">
                                    <?= esc($log['nama_pengguna'] ?? 'Sistem / Tidak Diketahui') ?>
                                </td>
                                
                                <td style="padding: 18px 10px; color: #4b5563;">
                                    <?= date('d M Y H:i', strtotime($log['created_at'])) ?>
                                </td>
                                
                                <td style="padding: 18px 10px; color: #4b5563;">
                                    <?= esc($log['keterangan'] ?? '-') ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    <?php else : ?>
                        <tr>
                            <td colspan="5" style="text-align: center; padding: 20px; color: #6b7280;">
                                Belum ada riwayat aktivitas.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 25px; font-size: 14px; color: #6b7280; flex-wrap: wrap; gap: 15px;">
            <div>Total Data: <b><?= esc($totalData) ?></b> aktivitas</div>
            
            <div style="display: flex; gap: 8px; align-items: center;">
                <?= $pager->links('logs', 'default_full') ?>
            </div>
        </div>
        
    </div>
</main>

<?= $this->endSection() ?>