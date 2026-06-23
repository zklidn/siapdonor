<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

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
        
        $hari_ini = $nama_hari[date('w')];
        $tanggal_ini = date('d');
        $bulan_ini = $nama_bulan[date('n')];
        $tahun_ini = date('Y');
        
        $tanggal_sekarang = $hari_ini . ", " . $tanggal_ini . " " . $bulan_ini . " " . $tahun_ini;
    ?>

    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px;">
        <div>
            <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Dashboard</h1>
            <p style="color: #6b7280; font-size: 14px;">Selamat datang, PMI Kota Palu!</p>
        </div>
        <div style="color: #6b7280; font-size: 13px; display: flex; align-items: center; gap: 8px; background: white; padding: 8px 15px; border-radius: 8px; border: 1px solid #e5e7eb;">
            <i class="fa-regular fa-calendar"></i> <?= $tanggal_sekarang ?>
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 30px;">
        
        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 15px;">
            <div style="background: #fee2e2; color: #dc2626; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                <i class="fa-solid fa-users"></i>
            </div>
            <div>
                <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Total Donor</p>
                <h3 style="font-size: 22px; color: #111827;">
                    <?= number_format($totalDonor,0,'','.') ?>
                </h3>
            </div>
        </div>

        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 15px;">
            <div style="background: #dcfce7; color: #16a34a; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                <i class="fa-solid fa-user-check"></i>
            </div>
            <div>
                <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Donor Aktif</p>
                <h3 style="font-size: 22px; color: #111827;">
                    <?= $donorAktif ?>
                </h3>
            </div>
        </div>

        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 15px;">
            <div style="background: #ffedd5; color: #ea580c; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                <i class="fa-solid fa-file-invoice"></i>
            </div>
            <div>
                <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Permintaan Masuk</p>
                <h3 style="font-size: 22px; color: #111827;">
                    <?=$permintaanMasuk ?>
                </h3>
            </div>
        </div>

        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 15px;">
            <div style="background: #f3e8ff; color: #9333ea; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                <i class="fa-solid fa-clock-rotate-left"></i>
            </div>
            <div>
                <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Riwayat Permintaan</p>
                <h3 style="font-size: 22px; color: #111827;">156</h3>
            </div>
        </div>

    </div>

    <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
        <h3 style="margin-bottom: 20px; font-size: 16px; color: #111827;">Aktivitas Terbaru</h3>
        
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 13px;">
                <thead>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">No</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Aktivitas</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Tanggal</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Oleh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($aktivitas as $row): ?>
                    <tr style="border-bottom:1px solid #f9fafb;">
                        <td style="padding:15px 0;">
                            <?= $no++ ?>
                        </td>

                        <td style="padding:15px 0;">
                            <?= esc($row['aktivitas']) ?>
                        </td>

                        <td style="padding:15px 0;">
                            <?= date('d M Y H:i', strtotime($row['created_at'])) ?>
                        </td>

                        <td style="padding:15px 0;">
                            <?= $row['id_user'] ?? '-' ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <div style="margin-top: 20px;">
            <a href="<?= base_url('pmi/riwayat_donor') ?>" style="color: #dc2626; font-size: 13px; font-weight: 600; text-decoration: none;">Lihat semua aktivitas</a>
        </div>
    </div>

    <div style="margin-top: 40px; color: #9ca3af; font-size: 12px;">
        &copy; 2026 SiapDonor. All rights reserved.
    </div>

</main>
<?= $this->endSection() ?>