<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url('css_admin/style_dashboard_admin.css') ?>">

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('admin') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-gauge"></i> Dashboard
    </a>
    <a href="<?= base_url('admin/kelola_user') ?>" class="menu-item">
        <i class="fa-solid fa-users-gear"></i> Kelola User
    </a>
    <a href="<?= base_url('admin/riwayat') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat
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

    <div class="dashboard-header">
        <div>
            <h1 class="dashboard-title">Dashboard</h1>
            <p class="dashboard-subtitle">Selamat datang, Admin!</p>
        </div>
        <div class="date-badge">
            <i class="fa-regular fa-calendar"></i> <?= $tanggal_sekarang ?>
        </div>
    </div>
    
    <div class="stats-grid">
        
        <div class="stat-card">
            <div class="stat-icon-wrapper icon-red">
                <i class="fa-solid fa-id-badge"></i>
            </div>
            <div>
                <p class="stat-label">Total User</p>
                <h3 class="stat-value"><?= $totalUser ?></h3>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon-wrapper icon-green">
                <i class="fa-solid fa-user-plus"></i>
            </div>
            <div>
                <p class="stat-label">Total Donor</p>
                <h3 class="stat-value"><?= number_format($totalDonor, 0, ',', '.') ?></h3>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon-wrapper icon-purple">
                <i class="fa-solid fa-clock-rotate-left"></i>
            </div>
            <div>
                <p class="stat-label">Aktivitas Sistem</p>
                <h3 class="stat-value"><?= $totalAktivitas ?? 0 ?></h3>
            </div>
        </div>

    </div>

    <div class="content-grid">
        
        <div class="card-panel">
            <h3 class="panel-title">Aktivitas Sistem Terbaru</h3>
            
            <table class="table-custom">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Aktivitas</th>
                        <th>Waktu</th>
                        <th>Oleh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($aktivitasTerbaru)) : ?>
                        <?php $no = 1; ?>
                        <?php foreach ($aktivitasTerbaru as $log) : ?>
                            <tr class="table-row">
                                <td><?= $no++ ?></td>
                                <td class="text-dark"><?= esc($log['aktivitas']) ?></td>
                                <td><?= date('d M Y H:i', strtotime($log['created_at'])) ?></td>
                                <td class="text-dark"><?= esc($log['nama_pengguna'] ?? 'Sistem') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="4" style="text-align: center; color: #6b7280;">
                                Belum ada aktivitas sistem yang tercatat.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            
            <a href="<?= base_url('admin/riwayat') ?>" class="link-action">Lihat semua aktivitas</a>
        </div>

        <div class="card-panel" style="align-self: start;">
            <h3 class="panel-title">Informasi</h3>
            <p class="info-text">
                Kelola sistem, user, dan pantau aktivitas seluruh pengguna di SiapDonor.
            </p>
        </div>
        
    </div>

    <div class="footer-text">
        &copy; 2026 SiapDonor. All rights reserved.
    </div>

</main>
<?= $this->endSection() ?>