<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('rs') ?>" class="menu-item">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('rs/cari_donor') ?>" class="menu-item">
        <i class="fa-solid fa-magnifying-glass"></i> Cari Donor
    </a>
    <a href="<?= base_url('rs/permintaan_darah') ?>" class="menu-item">
        <i class="fa-solid fa-file-invoice-dollar"></i> Permintaan Darah
    </a>
    <a href="<?= base_url('rs/data_pasien') ?>" class="menu-item">
        <i class="fa-solid fa-hospital-user"></i> Data Pasien / Kebutuhan
    </a>
    <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Permintaan
    </a>
    <a href="<?= base_url('rs/laporan_RS') ?>" class="menu-item">
        <i class="fa-solid fa-file-lines"></i> Laporan
    </a>
</aside>

<main class="content-area">
    <div style="margin-bottom: 30px;">
        <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Laporan</h1>
        <p style="color: #6b7280; font-size: 14px;">Laporan kebutuhan dan penggunaan darah</p>
    </div>

    <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; margin-bottom: 20px; display: flex; gap: 20px; align-items: flex-end; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 200px;">
            <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display:block;">Jenis Laporan</label>
            <select style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; color: #4b5563; background: #f9fafb;">
                <option>Laporan Kebutuhan Darah</option>
            </select>
        </div>
        <div style="flex: 1; min-width: 200px;">
            <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display:block;">Periode</label>
            <input type="text" value="01/05/2025 - 31/05/2025" style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; color: #4b5563;">
        </div>
        <button style="background: #8b0000; color: white; padding: 10px 30px; border-radius: 8px; border: none; font-weight: 600; cursor: pointer; height: 42px;">
            Generate
        </button>
    </div>

    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 20px;">
        <?php 
        $stats = [
            ['title' => 'Total Permintaan', 'val' => '23', 'unit' => 'Permintaan'],
            ['title' => 'Total Kantong', 'val' => '89', 'unit' => 'Kantong'],
            ['title' => 'Tersalurkan', 'val' => '76', 'unit' => 'Kantong'],
            ['title' => 'Sisa / Belum', 'val' => '13', 'unit' => 'Kantong']
        ];
        foreach($stats as $s): ?>
        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; text-align: center;">
            <p style="color: #6b7280; font-size: 12px; margin-bottom: 8px;"><?= $s['title'] ?></p>
            <h3 style="font-size: 24px; color: #111827; margin-bottom: 2px;"><?= $s['val'] ?></h3>
            <span style="font-size: 11px; color: #9ca3af;"><?= $s['unit'] ?></span>
        </div>
        <?php endforeach; ?>
    </div>

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px;">
        <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
            <h3 style="margin-bottom: 20px; font-size: 16px;">Grafik Kebutuhan Darah</h3>
            <div style="height: 300px; background: #f9fafb; border: 2px dashed #e5e7eb; display: flex; align-items: center; justify-content: center; color: #9ca3af;">
                [Area Grafik Kebutuhan Darah]
            </div>
        </div>

        <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
            <h3 style="margin-bottom: 20px; font-size: 16px;">Ringkasan Kebutuhan</h3>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                <?php 
                $gol = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'];
                foreach($gol as $g): ?>
                <div style="padding: 10px; background: #f9fafb; border-radius: 8px;">
                    <div style="font-weight: 700; font-size: 14px;"><?= $g ?></div>
                    <div style="font-size: 12px; color: #6b7280;">12 Kantong</div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>