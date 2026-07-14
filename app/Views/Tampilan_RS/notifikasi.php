<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <div class="menu-top">
        <a href="<?= base_url('rs') ?>" class="menu-item menu-active">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
        <a href="<?= base_url('rs/permintaan_darah') ?>" class="menu-item">
            <i class="fa-solid fa-droplet"></i> Permintaan Darah
        </a>
        <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="menu-item">
            <i class="fa-solid fa-file-invoice"></i> Riwayat Permintaan
        </a>
    </div>
</aside>

<main class="content-area">
    
    <div style="margin-bottom: 30px;">
        <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Notifikasi</h1>
    </div>

    <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
        
        <?php if(session()->getFlashdata('success')) : ?>
            <div style="background: #dcfce7; color: #166534; padding: 10px 15px; border-radius: 8px; margin-bottom: 20px; font-size: 14px;">
                <i class="fa-solid fa-circle-check"></i> <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 15px;">
            <!-- 1. BAGIAN FILTER DINAMIS -->
            <div>
                <form id="formFilter" method="get" action="<?= base_url('rs/notifikasi') ?>">
                    <select name="filter" onchange="document.getElementById('formFilter').submit();" style="padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; color: #4b5563; background: #f9fafb; outline: none; cursor: pointer; font-size: 13px;">
                        <option value="Semua Notifikasi" <?= (empty($filter_aktif) || $filter_aktif == 'Semua Notifikasi') ? 'selected' : '' ?>>Semua Notifikasi</option>
                        <option value="Belum Dibaca" <?= (isset($filter_aktif) && $filter_aktif == 'Belum Dibaca') ? 'selected' : '' ?>>Belum Dibaca</option>
                        <option value="Dibaca" <?= (isset($filter_aktif) && $filter_aktif == 'Dibaca') ? 'selected' : '' ?>>Dibaca</option>
                    </select>
                </form>
            </div>
            
            <!-- 2. TOMBOL TANDAI DIBACA -->
            <div>
                <form action="<?= base_url('rs/notifikasi/tandai_dibaca') ?>" method="post">
                    <?= csrf_field() ?>
                    <button type="submit" style="background: white; border: 1px solid #e5e7eb; color: #4b5563; padding: 10px 15px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer; transition: 0.2s;">
                        <i class="fa-solid fa-check-double"></i> Tandai semua sebagai dibaca
                    </button>
                </form>
            </div>
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 13px; min-width: 900px;">
                <thead>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <th style="padding-bottom: 15px; padding-right: 15px; color:#6b7280; font-weight: 600; width: 5%;">No</th>
                        <th style="padding-bottom: 15px; padding-right: 15px; color:#6b7280; font-weight: 600; width: 25%;">Judul</th>
                        <th style="padding-bottom: 15px; padding-right: 15px; color:#6b7280; font-weight: 600; width: 40%;">Pesan</th>
                        <th style="padding-bottom: 15px; padding-right: 15px; color:#6b7280; font-weight: 600; width: 15%;">Tanggal</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600; width: 15%;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 3. LOOPING DATA DARI DATABASE -->
                    <?php if(empty($notifikasi)) : ?>
                        <tr>
                            <td colspan="5" style="padding: 30px 0; text-align: center; color: #6b7280;">
                                Tidak ada data notifikasi untuk saat ini.
                            </td>
                        </tr>
                    <?php else : ?>
                        <?php 
                        // Perhitungan nomor urut agar sesuai dengan halaman paginasi
                        $page = $pager->getCurrentPage('notif');
                        $no = 1 + (5 * ($page - 1)); 
                        ?>
                        <?php foreach($notifikasi as $notif) : ?>
                            <tr style="border-bottom: 1px solid #f9fafb;">
                                <td style="padding: 18px 0; color: #4b5563;"><?= $no++ ?></td>
                                <td style="padding: 18px 0; color: #111827; font-weight: 500;"><?= esc($notif['judul']) ?></td>
                                <td style="padding: 18px 0; color: #4b5563;"><?= esc($notif['pesan']) ?></td>
                                <td style="padding: 18px 0; color: #4b5563;"><?= date('d M Y, H:i', strtotime($notif['created_at'])) ?> WIB</td>
                                <td style="padding: 18px 0;">
                                    <?php if($notif['status'] == 'Belum Dibaca') : ?>
                                        <span style="background: #ffedd5; color: #c2410c; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Belum Dibaca</span>
                                    <?php else : ?>
                                        <span style="background: #dcfce7; color: #166534; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Dibaca</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 25px; font-size: 13px; color: #6b7280; flex-wrap: wrap; gap: 15px;">
            <!-- 4. TOTAL DATA DINAMIS -->
            <div>Total Data: <?= $total_data ?> Notifikasi</div>
            
            <!-- 5. PAGINASI DINAMIS CODEIGNITER -->
            <div style="display: flex; gap: 8px; align-items: center;">
                <?= $pager->links('notif', 'default_full') ?> 
            </div>
        </div>

    </div>

</main>
<?= $this->endSection() ?>