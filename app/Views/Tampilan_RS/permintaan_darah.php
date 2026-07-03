<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('rs') ?>" class="menu-item">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('rs/cari_donor') ?>" class="menu-item">
        <i class="fa-solid fa-magnifying-glass"></i> Cari Donor
    </a>
    <a href="<?= base_url('rs/permintaan_darah') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-file-invoice-dollar"></i> Permintaan Darah
    </a>
    <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Permintaan
    </a>
    <a href="<?= base_url('rs/laporan_rs') ?>" class="menu-item">
        <i class="fa-solid fa-file-lines"></i> Laporan
    </a>
</aside>

<main class="content-area">
    <div style="margin-bottom: 25px;">
        <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px; font-weight: 700;">Permintaan Darah</h1>
        <p style="color: #6b7280; font-size: 14px;">Buat dan kelola permintaan darah untuk pasien</p>
    </div>

    <?php 
    // Mengambil status aktif dari URL (query string), default-nya adalah 'aktif'
    $current_status = isset($_GET['status']) ? $_GET['status'] : 'aktif'; 
    ?>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 15px; border-bottom: 1px solid #e5e7eb; padding-bottom: 2px;">
        <div style="display: flex; gap: 25px;">
            <a href="<?= base_url('rs/permintaan_darah?status=semua') ?>" 
               style="font-size: 14px; color: <?= $current_status == 'semua' ? '#8b0000' : '#6b7280' ?>; text-decoration: none; font-weight: <?= $current_status == 'semua' ? '600' : '500' ?>; padding-bottom: 10px; display: inline-block; <?= $current_status == 'semua' ? 'border-bottom: 2px solid #8b0000; margin-bottom: -2px;' : '' ?>">
               Semua Permintaan
            </a>
            
            <a href="<?= base_url('rs/permintaan_darah?status=aktif') ?>" 
               style="font-size: 14px; color: <?= $current_status == 'aktif' ? '#8b0000' : '#6b7280' ?>; text-decoration: none; font-weight: <?= $current_status == 'aktif' ? '600' : '500' ?>; padding-bottom: 10px; display: inline-block; <?= $current_status == 'aktif' ? 'border-bottom: 2px solid #8b0000; margin-bottom: -2px;' : '' ?>">
               Permintaan Aktif
            </a>
            
            <a href="<?= base_url('rs/permintaan_darah?status=selesai') ?>" 
               style="font-size: 14px; color: <?= $current_status == 'selesai' ? '#8b0000' : '#6b7280' ?>; text-decoration: none; font-weight: <?= $current_status == 'selesai' ? '600' : '500' ?>; padding-bottom: 10px; display: inline-block; <?= $current_status == 'selesai' ? 'border-bottom: 2px solid #8b0000; margin-bottom: -2px;' : '' ?>">
               Permintaan Selesai
            </a>
            
            <a href="<?= base_url('rs/permintaan_darah?status=draft') ?>" 
               style="font-size: 14px; color: <?= $current_status == 'draft' ? '#8b0000' : '#6b7280' ?>; text-decoration: none; font-weight: <?= $current_status == 'draft' ? '600' : '500' ?>; padding-bottom: 10px; display: inline-block; <?= $current_status == 'draft' ? 'border-bottom: 2px solid #8b0000; margin-bottom: -2px;' : '' ?>">
               Draft
            </a>
        </div>
        
        <a href="<?= base_url('rs/buat_permintaan') ?>" style="background: #8b0000; color: white; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 8px; font-size: 14px; text-decoration: none; transition: 0.2s; margin-bottom: 8px;">
            <i class="fa-solid fa-plus"></i> Buat Permintaan
        </a>
    </div>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 25px;">
        
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; min-width: 900px;">
                <thead>
                    <tr style="border-bottom: 1px solid #e5e7eb; color: #6b7280; background: #f9fafb;">
                        <th style="padding: 12px 10px; font-weight: 600; text-align: center;">No</th>
                        <th style="padding: 12px 10px; font-weight: 600;">Tanggal</th>
                        <th style="padding: 12px 10px; font-weight: 600;">Pasien</th>
                        <th style="padding: 12px 10px; font-weight: 600; text-align: center;">Gol. Darah</th>
                        <th style="padding: 12px 10px; font-weight: 600;">Jumlah</th>
                        <th style="padding: 12px 10px; font-weight: 600;">Kebutuhan</th>
                        <th style="padding: 12px 10px; font-weight: 600;">Lokasi</th>
                        <th style="padding: 12px 10px; font-weight: 600;">Status</th>
                        <th style="padding: 12px 10px; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $list_permintaan = isset($permintaan_darah_all) ? $permintaan_darah_all : [
                        ['tanggal' => '20 Mei 2026, 10:30', 'pasien' => 'Andi Saputra', 'gol' => 'O+', 'jumlah' => '3 Kantong', 'kebutuhan' => 'Operasi', 'lokasi' => 'ICU RSUD Sejahtera', 'status' => 'Proses'],
                        ['tanggal' => '20 Mei 2026, 09:15', 'pasien' => 'Siti Aisyah', 'gol' => 'A-', 'jumlah' => '2 Kantong', 'kebutuhan' => 'Transfusi', 'lokasi' => 'ICU RSUD Sejahtera', 'status' => 'Proses'],
                        ['tanggal' => '20 Mei 2026, 08:45', 'pasien' => 'Dewi Lestari', 'gol' => 'B+', 'jumlah' => '4 Kantong', 'kebutuhan' => 'Trauma', 'lokasi' => 'IGD RSUD Sejahtera', 'status' => 'Baru'],
                        ['tanggal' => '19 Mei 2026, 14:20', 'pasien' => 'Budi Santoso', 'gol' => 'AB+', 'jumlah' => '2 Kantong', 'kebutuhan' => 'Operasi', 'lokasi' => 'ICU RSUD Sejahtera', 'status' => 'Selesai'],
                        ['tanggal' => '19 Mei 2026, 09:30', 'pasien' => 'Rina Marlina', 'gol' => 'O-', 'jumlah' => '1 Kantong', 'kebutuhan' => 'Anemia', 'lokasi' => 'Rawat Inap', 'status' => 'Selesai']
                    ];
                    
                    $no = 1;
                    foreach ($list_permintaan as $row): ?>
                    <tr style="border-bottom: 1px solid #f3f4f6; transition: 0.2s;">
                        <td style="padding: 14px 10px; text-align: center; color: #6b7280;"><?= $no++ ?></td>
                        <td style="padding: 14px 10px; color: #4b5563;"><?= $row['tanggal'] ?></td>
                        <td style="padding: 14px 10px; font-weight: 500; color: #111827;"><?= $row['pasien'] ?></td>
                        <td style="padding: 14px 10px; text-align: center;">
                            <span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 3px 8px; border-radius: 6px; font-size: 12px; border: 1px solid #fca5a5; display: inline-block; min-width: 32px; text-align: center;">
                                <?= $row['gol'] ?>
                            </span>
                        </td>
                        <td style="padding: 14px 10px; color: #374151; font-weight: 500;"><?= $row['jumlah'] ?></td>
                        <td style="padding: 14px 10px; color: #4b5563;"><?= $row['kebutuhan'] ?></td>
                        <td style="padding: 14px 10px; color: #4b5563;"><?= $row['lokasi'] ?></td>
                        <td style="padding: 14px 10px;">
                            <?php if ($row['status'] == 'Proses'): ?>
                                <span style="background: #ffedd5; color: #ea580c; padding: 4px 10px; border-radius: 6px; font-size: 12px; font-weight: 600; display: inline-block;">Proses</span>
                            <?php elseif ($row['status'] == 'Baru'): ?>
                                <span style="background: #e0f2fe; color: #0284c7; padding: 4px 10px; border-radius: 6px; font-size: 12px; font-weight: 600; display: inline-block;">Baru</span>
                            <?php else: ?>
                                <span style="background: #dcfce7; color: #166534; padding: 4px 10px; border-radius: 6px; font-size: 12px; font-weight: 600; display: inline-block;">Selesai</span>
                            <?php endif; ?>
                        </td>
                        <td style="padding: 14px 10px; text-align: center;">
                            <div style="display: flex; justify-content: center; color: #9ca3af; font-size: 15px;">
                                <i class="fa-solid fa-eye" style="cursor: pointer; transition: 0.2s;" title="Lihat Detail" onmouseover="this.style.color='#8b0000'" onmouseout="this.style.color='#9ca3af'"></i>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 25px; font-size: 13px; color: #6b7280; flex-wrap: wrap; gap: 15px;">
            <div>Menampilkan 1 - 5 dari <strong style="color: #111827;">7</strong> data</div>
            <div style="display: flex; gap: 6px; align-items: center;">
                <a href="#" style="padding: 6px 12px; border: 1px solid #e5e7eb; border-radius: 6px; color: #4b5563; text-decoration: none;"><i class="fa-solid fa-chevron-left" style="font-size: 11px;"></i></a>
                <a href="#" style="background: #8b0000; color: white; padding: 6px 12px; border: 1px solid #8b0000; border-radius: 6px; font-weight: 600; text-decoration: none;">1</a>
                <a href="#" style="padding: 6px 12px; border: 1px solid #e5e7eb; border-radius: 6px; color: #4b5563; text-decoration: none;">2</a>
                <a href="#" style="padding: 6px 12px; border: 1px solid #e5e7eb; border-radius: 6px; color: #4b5563; text-decoration: none;"><i class="fa-solid fa-chevron-right" style="font-size: 11px;"></i></a>
            </div>
        </div>
    </div>

</main>
<?= $this->endSection() ?>
