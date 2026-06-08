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
    <h1 style="margin-bottom: 25px; color: #111827;">Data Donor</h1>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 25px;">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 15px;">
            
            <div style="display: flex; gap: 15px; flex: 1;">
                <div style="position: relative; width: 280px;">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 15px; top: 12px; color: #9ca3af;"></i>
                    <input type="text" placeholder="Cari nama donor..." style="width: 100%; padding: 10px 15px 10px 40px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 14px; background: #f9fafb;">
                </div>
                
                <select style="padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 14px; color: #4b5563; cursor: pointer; background: #f9fafb;">
                    <option>Semua Status</option>
                    <option>Aktif</option>
                    <option>Nonaktif</option>
                </select>
            </div>
            
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; min-width: 900px;">
                <thead>
                    <tr style="border-bottom: 2px solid #f3f4f6;">
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">No</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Nama</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Kecamatan</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700; text-align: center;">Gol. Darah</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700; text-align: center;">Rhesus</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Status</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Kontak</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($donor)) : ?>
                        <?php $no = 1; ?>
                        <?php foreach ($donor as $d) : ?>
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding:18px 10px;">
                                    <?= $no++ ?>
                                </td>
                                <td style="padding:18px 10px; font-weight:600;">
                                    <?= esc($d['nama']) ?>
                                </td>
                                <td style="padding:18px 10px;">
                                    <?= esc($d['kota']) ?>
                                </td>
                                <td style="padding:18px 10px; text-align:center;">
                                    <?= esc($d['golongan_darah']) ?>
                                </td>
                                <td style="padding:18px 10px; text-align:center;">
                                    <?= esc($d['rhesus']) ?>
                                </td>
                                <td style="padding:18px 10px;">
                                    <?php if ($d['status'] == 'Aktif') : ?>
                                        <span style="background:#dcfce7;color:#166534;padding:5px 12px;border-radius:6px;font-size:12px;font-weight:600;">
                                            Aktif
                                        </span>
                                    <?php else : ?>
                                        <span style="background:#ffedd5;color:#c2410c;padding:5px 12px;border-radius:6px;font-size:12px;font-weight:600;">
                                            Nonaktif
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td style="padding:18px 10px;">
                                    <?= esc($d['no_hp']) ?>
                                </td>
                                <td style="padding:18px 10px; display:flex; gap:12px;">
                                    <i class="fa-solid fa-eye" style="color:#9ca3af; cursor:pointer;"></i>
                                    <i class="fa-solid fa-pen-to-square" style="color:#9ca3af; cursor:pointer;"></i>
                                    <i class="fa-solid fa-trash" style="color:#ef4444; cursor:pointer;"></i>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="8" style="text-align:center; padding:20px;">
                                Data donor belum tersedia
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 25px; font-size: 14px; color: #6b7280; flex-wrap: wrap; gap: 15px;">
            <div>Menampilkan 1 - 5 dari 120 data</div>
            
            <div style="display: flex; gap: 8px; align-items: center;">
                <span style="padding: 6px 10px; cursor: pointer; color: #9ca3af;"><i class="fa-solid fa-chevron-left"></i></span>
                <span style="background: #8b0000; color: white; padding: 6px 14px; border-radius: 6px; font-weight: 600; cursor: pointer;">1</span>
                <span style="padding: 6px 14px; cursor: pointer; border-radius: 6px; transition: 0.2s;">2</span>
                <span style="padding: 6px 14px; cursor: pointer; border-radius: 6px; transition: 0.2s;">3</span>
                <span style="color: #9ca3af; padding: 0 5px;">...</span>
                <span style="padding: 6px 14px; cursor: pointer; border-radius: 6px; transition: 0.2s;">24</span>
                <span style="padding: 6px 10px; cursor: pointer; color: #4b5563;"><i class="fa-solid fa-chevron-right"></i></span>
            </div>
        </div>
        
    </div>
</main>

<?= $this->endSection() ?>