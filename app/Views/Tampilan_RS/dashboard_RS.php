<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<<<<<<< HEAD
    .dashboard-header {
        margin-bottom: 25px;
    }
    .dashboard-header h1 {
        font-size: 24px;
        font-weight: 700;
        color: #111827;
        margin-bottom: 4px;
    }
    .dashboard-header p {
        font-size: 14px;
        color: #6b7280;
    }

    .stats-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
        margin-bottom: 25px;
    }
    .stat-box {
        background: #ffffff;
        padding: 20px;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        display: flex;
        align-items: center;
        gap: 16px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.01);
    }
    .stat-icon-wrapper {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }
    .bg-red-light { background: #fee2e2; color: #8b0000; }
    .bg-orange-light { background: #fef3c7; color: #d97706; }
    .bg-blue-light { background: #e0f2fe; color: #0284c7; }
    
    .stat-info {
        display: flex;
        flex-direction: column;
    }
    .stat-num {
        font-size: 24px;
        font-weight: 700;
        color: #111827;
        line-height: 1.2;
    }
    .stat-text {
        font-size: 12px;
        color: #6b7280;
        font-weight: 500;
        margin-top: 2px;
    }

    .panel-grid-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }
    .panel-grid-split {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 20px;
    }

    .panel-card {
        background: #ffffff;
        padding: 20px;
        border-radius: 14px;
        border: 1px solid #e5e7eb;
        box-shadow: 0 4px 10px rgba(0,0,0,0.01);
    }
    .panel-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
    }
    .panel-title {
        font-size: 15px;
        font-weight: 700;
        color: #111827;
    }
    .btn-link-all {
        font-size: 12px;
        color: #8b0000;
        text-decoration: none;
        font-weight: 600;
    }
    .btn-link-all:hover {
        text-decoration: underline;
    }

    .dashboard-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }
    .dashboard-table th {
        font-size: 12px;
        font-weight: 600;
        color: #4b5563;
        padding: 10px 12px;
        background: #f9fafb;
        border-bottom: 1px solid #e5e7eb;
    }
    .dashboard-table td {
        padding: 12px;
        font-size: 13px;
        color: #374151;
        border-bottom: 1px solid #f3f4f6;
    }

    /* BADGES (URGENSI & STATUS) */
    .badge-prio {
        padding: 4px 8px;
        border-radius: 6px;
        font-size: 11px;
        font-weight: 700;
    }
    .prio-tinggi { background: #fee2e2; color: #dc2626; }
    .prio-sedang { background: #ffedd5; color: #ea580c; }

    .status-pill {
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 11px;
        font-weight: 600;
    }
    .status-proses { background: #fef3c7; color: #d97706; }
    .status-baru { background: #e0f2fe; color: #0284c7; }
    .status-ok { background: #d1fae5; color: #059669; }

    .blood-dot {
        background: #fee2e2;
        color: #8b0000;
        font-weight: 700;
        padding: 2px 6px;
        border-radius: 4px;
        font-size: 11px;
        border: 1px solid #fca5a5;
    }

    .blood-group-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 12px;
        margin-top: 15px;
    }
    .blood-circle-item {
        text-align: center;
    }
    .blood-circle {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        border: 3px solid #8b0000;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 14px;
        color: #8b0000;
        margin: 0 auto 6px auto;
        background: #fff5f5;
    }
    .blood-circle-item span {
        font-size: 11px;
        color: #6b7280;
        font-weight: 500;
    }
</style>

<div class="dashboard-header">
    <h1>Dashboard</h1>
    <p>Selamat datang, Petugas RSUD Sejahtera!</p>
</div>

<div class="stats-row">
    <div class="stat-box">
        <div class="stat-icon-wrapper bg-red-light"><i class="fa-solid fa-hospital-user"></i></div>
        <div class="stat-info">
            <span class="stat-num">18</span>
            <span class="stat-text">Kebutuhan Darah Hari ini</span>
        </div>
    </div>
    <div class="stat-box">
        <div class="stat-icon-wrapper bg-orange-light"><i class="fa-solid fa-spinner"></i></div>
        <div class="stat-info">
            <span class="stat-num">7</span>
            <span class="stat-text">Permintaan Aktif</span>
        </div>
    </div>
    <div class="stat-box">
        <div class="stat-icon-wrapper bg-blue-light"><i class="fa-solid fa-users"></i></div>
        <div class="stat-info">
            <span class="stat-num">124</span>
            <span class="stat-text">Donor Tersedia</span>
        </div>
    </div>
    <div class="stat-box">
        <div class="stat-icon-wrapper bg-red-light"><i class="fa-solid fa-file-invoice"></i></div>
        <div class="stat-info">
            <span class="stat-num">156</span>
            <span class="stat-text">Permintaan Selesai</span>
        </div>
    </div>
</div>

<div class="panel-grid-2">
    <div class="panel-card">
        <div class="panel-header">
            <span class="panel-title">Kebutuhan Darah Mendesak</span>
            <a href="#" class="btn-link-all">Lihat Semua <i class="fa-solid fa-angle-right"></i></a>
        </div>
        <table class="dashboard-table">
            <thead>
                <tr>
                    <th>Gol. Darah</th>
                    <th>Jumlah</th>
                    <th>Pasien</th>
                    <th>Prioritas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span class="blood-dot">O+</span></td>
                    <td>3 Kantong</td>
                    <td>Andi Saputra</td>
                    <td><span class="badge-prio prio-tinggi">Tinggi</span></td>
                </tr>
                <tr>
                    <td><span class="blood-dot">A-</span></td>
                    <td>2 Kantong</td>
                    <td>Siti Aisyah</td>
                    <td><span class="badge-prio prio-tinggi">Tinggi</span></td>
                </tr>
                <tr>
                    <td><span class="blood-dot">B+</span></td>
                    <td>1 Kantong</td>
                    <td>Dewi Lestari</td>
                    <td><span class="badge-prio prio-sedang">Sedang</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="panel-card">
        <div class="panel-header">
            <span class="panel-title">Permintaan Darah Terbaru</span>
            <a href="#" class="btn-link-all">Lihat Semua <i class="fa-solid fa-angle-right"></i></a>
        </div>
        <table class="dashboard-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Gol</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>20 Mei 2026, 10:30</td>
                    <td><strong>O+</strong></td>
                    <td>3 Kantong</td>
                    <td><span class="status-pill status-proses">Proses</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>20 Mei 2026, 09:15</td>
                    <td><strong>A-</strong></td>
                    <td>2 Kantong</td>
                    <td><span class="status-pill status-proses">Proses</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>20 Mei 2026, 08:45</td>
                    <td><strong>B+</strong></td>
                    <td>4 Kantong</td>
                    <td><span class="status-pill status-baru">Baru</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="panel-grid-split">
    <div class="panel-card">
        <div class="panel-header">
            <span class="panel-title">Donor Terdekat Tersedia</span>
            <a href="#" class="btn-link-all">Lihat Semua <i class="fa-solid fa-angle-right"></i></a>
        </div>
        <table class="dashboard-table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Gol. Darah</th>
                    <th>Lokasi</th>
                    <th>Jarak</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Andi Pratama</td>
                    <td><span class="blood-dot">O+</span></td>
                    <td>Andi Bandung</td>
                    <td>2.4 km</td>
                    <td><span class="status-pill status-ok">Tersedia</span></td>
                </tr>
                <tr>
                    <td>Siti Nurhaliza</td>
                    <td><span class="blood-dot">A-</span></td>
                    <td>Kota Bandung</td>
                    <td>3.1 km</td>
                    <td><span class="status-pill status-ok">Tersedia</span></td>
                </tr>
                <tr>
                    <td>Rizky Maulana</td>
                    <td><span class="blood-dot">B+</span></td>
                    <td>Kota Bandung</td>
                    <td>4.2 km</td>
                    <td><span class="status-pill status-ok">Tersedia</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="panel-card">
        <div class="panel-header">
            <span class="panel-title">Kebutuhan Berdasarkan Golongan</span>
        </div>
        <div class="blood-group-grid">
            <div class="blood-circle-item"><div class="blood-circle">A+</div><span>24 Ktg</span></div>
            <div class="blood-circle-item"><div class="blood-circle">A-</div><span>12 Ktg</span></div>
            <div class="blood-circle-item"><div class="blood-circle">B+</div><span>18 Ktg</span></div>
            <div class="blood-circle-item"><div class="blood-circle">B-</div><span>9 Ktg</span></div>
            <div class="blood-circle-item"><div class="blood-circle">O+</div><span>28 Ktg</span></div>
            <div class="blood-circle-item"><div class="blood-circle">O-</div><span>11 Ktg</span></div>
            <div class="blood-circle-item"><div class="blood-circle">AB+</div><span>7 Ktg</span></div>
            <div class="blood-circle-item"><div class="blood-circle">AB-</div><span>4 Ktg</span></div>
        </div>
    </div>
</div>

<?= $this->include('layout/footer') ?>
=======
<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('rs') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('rs/cari_donor') ?>" class="menu-item">
        <i class="fa-solid fa-magnifying-glass"></i> Cari Donor
    </a>
    <a href="<?= base_url('rs/permintaan_darah') ?>" class="menu-item">
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
    
    <?php
        $nama_hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        $nama_bulan = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        
        $hari_ini = $nama_hari[date('w')];
        $tanggal_ini = date('d');
        $bulan_ini = $nama_bulan[date('n')];
        $tahun_ini = date('Y');
        
        $tanggal_sekarang = $hari_ini . ", " . $tanggal_ini . " " . $bulan_ini . " " . $tahun_ini;
    ?>

    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px;">
        <div>
            <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Dashboard</h1>
            <p style="color: #6b7280; font-size: 14px;">Selamat datang, RS Wahidin!</p>
        </div>
        <div style="color: #6b7280; font-size: 13px; display: flex; align-items: center; gap: 8px; background: white; padding: 8px 15px; border-radius: 8px; border: 1px solid #e5e7eb;">
            <i class="fa-regular fa-calendar"></i> <?= $tanggal_sekarang ?>
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 30px;">
        
        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 15px;">
            <div style="background: #fee2e2; color: #dc2626; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                <i class="fa-solid fa-file-contract"></i>
            </div>
            <div>
                <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Permintaan Aktif</p>
                <h3 style="font-size: 22px; color: #111827;">12</h3>
            </div>
        </div>

        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 15px;">
            <div style="background: #dbeafe; color: #2563eb; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                <i class="fa-solid fa-user-check"></i>
            </div>
            <div>
                <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Donor Ditemukan</p>
                <h3 style="font-size: 22px; color: #111827;">36</h3>
            </div>
        </div>

        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 15px;">
            <div style="background: #ffedd5; color: #ea580c; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                <i class="fa-solid fa-file-invoice-dollar"></i>
            </div>
            <div>
                <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Riwayat Permintaan</p>
                <h3 style="font-size: 22px; color: #111827;">78</h3>
            </div>
        </div>
    </div>

    <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
        <h3 style="margin-bottom: 20px; font-size: 16px; color: #111827;">Permintaan Terbaru</h3>
        
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 13px;">
                <thead>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">No</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Pasien</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Gol. Darah</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Jumlah</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Status</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">1</td>
                        <td style="padding: 15px 0; color: #111827;">Andi</td>
                        <td style="padding: 15px 0; color: #111827; font-weight: 600;">O+</td>
                        <td style="padding: 15px 0; color: #4b5563;">3</td>
                        <td style="padding: 15px 0;">
                            <span style="background: #ffedd5; color: #c2410c; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Pending</span>
                        </td>
                        <td style="padding: 15px 0; color: #4b5563;">20 Mei 2025</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">2</td>
                        <td style="padding: 15px 0; color: #111827;">Siti</td>
                        <td style="padding: 15px 0; color: #111827; font-weight: 600;">A-</td>
                        <td style="padding: 15px 0; color: #4b5563;">2</td>
                        <td style="padding: 15px 0;">
                            <span style="background: #dbeafe; color: #1d4ed8; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Diproses</span>
                        </td>
                        <td style="padding: 15px 0; color: #4b5563;">18 Mei 2025</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">3</td>
                        <td style="padding: 15px 0; color: #111827;">Budi</td>
                        <td style="padding: 15px 0; color: #111827; font-weight: 600;">B+</td>
                        <td style="padding: 15px 0; color: #4b5563;">4</td>
                        <td style="padding: 15px 0;">
                            <span style="background: #dcfce7; color: #166534; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Selesai</span>
                        </td>
                        <td style="padding: 15px 0; color: #4b5563;">18 Mei 2025</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">4</td>
                        <td style="padding: 15px 0; color: #111827;">Rina</td>
                        <td style="padding: 15px 0; color: #111827; font-weight: 600;">AB+</td>
                        <td style="padding: 15px 0; color: #4b5563;">2</td>
                        <td style="padding: 15px 0;">
                            <span style="background: #dbeafe; color: #1d4ed8; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Diproses</span>
                        </td>
                        <td style="padding: 15px 0; color: #4b5563;">17 Mei 2025</td>
                    </tr>
                    <tr>
                        <td style="padding: 15px 0; color: #4b5563;">5</td>
                        <td style="padding: 15px 0; color: #111827;">Doni</td>
                        <td style="padding: 15px 0; color: #111827; font-weight: 600;">O-</td>
                        <td style="padding: 15px 0; color: #4b5563;">1</td>
                        <td style="padding: 15px 0;">
                            <span style="background: #dcfce7; color: #166534; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Selesai</span>
                        </td>
                        <td style="padding: 15px 0; color: #4b5563;">16 Mei 2025</td>
                    </tr>
                </tbody>
            </table>
            
            <div style="margin-top: 20px;">
                <a href="<?= base_url('rs/permintaan_darah') ?>" style="color: #dc2626; font-size: 13px; font-weight: 600; text-decoration: none;">Lihat semua permintaan</a>
            </div>
        </div>
    </div>

    <div style="margin-top: 40px; color: #9ca3af; font-size: 12px;">
        &copy; 2025 SiapDonor. All rights reserved.
    </div>

</main>
<?= $this->endSection() ?>
>>>>>>> 9e38052ac64e126a033f0ee1c93746fa65681efa
