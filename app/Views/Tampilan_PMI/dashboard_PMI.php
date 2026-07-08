<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('CSS_Tampilan_PMI/dashboard_PMI.css') ?>">

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('pmi') ?>" class="menu-item menu-active">
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
    
    <?php
        $nama_hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        $nama_bulan = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        $tanggal_sekarang = $nama_hari[date('w')] . ", " . date('d') . " " . $nama_bulan[date('n')] . " " . date('Y');
    ?>

    <div class="dashboard-header">
        <div class="header-title">
            <h1>Dashboard</h1>
            <p>Selamat datang, PMI Kota Palu!</p>
        </div>
        <div class="date-badge">
            <i class="fa-regular fa-calendar"></i> <?= $tanggal_sekarang ?>
        </div>
    </div>
    
    <div class="stats-grid">
        <div class="stat-card">
            <div class="icon-circle"><i class="fa-solid fa-users"></i></div>
            <div class="stat-info">
                <p>Total Pendonor</p>
                <h3><?= isset($total_donor) ? $total_donor : '1.248' ?></h3>
                <span>Seluruh pendonor terdaftar</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="icon-circle"><i class="fa-solid fa-droplet"></i></div>
            <div class="stat-info">
                <p>Stok Darah Tersedia</p>
                <h3><?= isset($stok_darah) ? $stok_darah : '892' ?></h3>
                <span>Kantong darah tersedia</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="icon-circle"><i class="fa-solid fa-calendar-check"></i></div>
            <div class="stat-info">
                <p>Permintaan Darah Masuk</p>
                <h3><?= isset($permintaan_masuk) ? $permintaan_masuk : '23' ?></h3>
                <span>Permintaan baru hari ini</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="icon-circle"><i class="fa-solid fa-user-shield"></i></div>
            <div class="stat-info">
                <p>Donor Aktif</p>
                <h3><?= isset($donor_aktif) ? $donor_aktif : '85' ?></h3>
                <span>Pendonor siap dihubungi</span>
            </div>
        </div>
    </div>

    <div class="summary-grid">
        
        <div class="summary-card">
            <div class="card-header">
                <h3>Donor Berdasarkan Lokasi</h3>
                <a href="#">Lihat Semua <i class="fa-solid fa-angle-down"></i></a>
            </div>
            
            <div class="location-split">
                <table class="location-table">
                    <thead>
                        <tr>
                            <th style="text-align: left;">Lokasi Wilayah</th>
                            <th style="text-align: right;">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $list_lokasi = isset($donor_lokasi) ? $donor_lokasi : [
                            ['lokasi' => 'Mantikulore', 'jumlah' => 450],
                            ['lokasi' => 'Palu Barat', 'jumlah' => 320],
                            ['lokasi' => 'Palu Selatan', 'jumlah' => 280],
                            ['lokasi' => 'Palu Timur', 'jumlah' => 145],
                            ['lokasi' => 'Sigi (Biromaru)', 'jumlah' => 120]
                        ];
                        foreach ($list_lokasi as $l): ?>
                        <tr>
                            <td><?= $l['lokasi'] ?></td>
                            <td style="text-align: right; font-weight: 700; color: #111827;"><?= $l['jumlah'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
                <div class="map-mockup">
                    <i class="fa-solid fa-map-marked-alt" style="font-size: 60px; color: #fca5a5; opacity: 0.3;"></i>
                    <i class="fa-solid fa-location-dot" style="position: absolute; top: 30%; left: 25%; color: #8b0000; font-size: 14px;"></i>
                    <i class="fa-solid fa-location-dot" style="position: absolute; top: 55%; left: 55%; color: #8b0000; font-size: 18px;"></i>
                    <i class="fa-solid fa-location-dot" style="position: absolute; top: 40%; left: 75%; color: #8b0000; font-size: 12px;"></i>
                </div>
            </div>
        </div>

        <div class="summary-card" style="display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <div class="card-header">
                    <h3>Donor Berdasarkan Golongan Darah</h3>
                    <a href="#">Lihat Semua <i class="fa-solid fa-angle-down"></i></a>
                </div>
                
                <?php
                $gol = isset($donor_golongan) ? $donor_golongan : [
                    'A+' => 320, 'B+' => 280, 'O+' => 210, 'AB+' => 150,
                    'A-' => 100, 'B-' => 80,  'O-' => 60,  'AB-' => 48
                ];
                ?>
                <div class="blood-group-container">
                    <div class="blood-row">
                        <div class="blood-item"><span class="blood-badge">A+</span> <strong style="color: #374151;"><?= $gol['A+'] ?></strong></div>
                        <div class="blood-item"><span class="blood-badge">B+</span> <strong style="color: #374151;"><?= $gol['B+'] ?></strong></div>
                        <div class="blood-item"><span class="blood-badge">O+</span> <strong style="color: #374151;"><?= $gol['O+'] ?></strong></div>
                        <div class="blood-item"><span class="blood-badge">AB+</span> <strong style="color: #374151;"><?= $gol['AB+'] ?></strong></div>
                    </div>
                    <div class="blood-row">
                        <div class="blood-item"><span class="blood-badge">A-</span> <strong style="color: #374151;"><?= $gol['A-'] ?></strong></div>
                        <div class="blood-item"><span class="blood-badge">B-</span> <strong style="color: #374151;"><?= $gol['B-'] ?></strong></div>
                        <div class="blood-item"><span class="blood-badge">O-</span> <strong style="color: #374151;"><?= $gol['O-'] ?></strong></div>
                        <div class="blood-item"><span class="blood-badge">AB-</span> <strong style="color: #374151;"><?= $gol['AB-'] ?></strong></div>
                    </div>
                </div>
            </div>
            
            <div style="text-align: right; margin-top: 15px;">
                <a href="<?= base_url('pmi/data_pendonor') ?>" style="background: #8b0000; color: white; padding: 8px 16px; border-radius: 8px; text-decoration: none; font-size: 12px; font-weight: 600; display: inline-block;">
                    <i class="fa-solid fa-user-plus" style="margin-right: 4px;"></i> Kelola Pendonor
                </a>
            </div>
        </div>

    </div>

    <div class="footer-text">
        &copy; 2026 SiapDonor. All rights reserved.
    </div>

</main>
<?= $this->endSection() ?>