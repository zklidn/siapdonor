<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<<<<<<< HEAD
    .page-header { 
        margin-bottom: 25px; 
    }
    .page-header h1 { 
        font-size: 24px; 
        font-weight: 700; 
        color: #111827; 
        margin-bottom: 4px; 
    }
    .page-header p { 
        font-size: 14px; 
        color: #6b7280; 
    }

    .report-filter-card {
        background: #ffffff;
        padding: 20px 24px;
        border-radius: 14px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.01);
        border: 1px solid #e5e7eb;
        margin-bottom: 25px;
    }
    .filter-grid {
        display: grid;
        grid-template-columns: 2fr 2fr auto;
        gap: 16px;
        align-items: flex-end;
    }
    .filter-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    .filter-group label {
        font-size: 13px;
        font-weight: 600;
        color: #4b5563;
    }
    .form-control {
        width: 100%;
        padding: 11px 14px;
        border: 1.5px solid #e5e7eb;
        border-radius: 10px;
        font-size: 14px;
        color: #1f2937;
        outline: none;
    }
    .btn-generate {
        background: #8b0000;
        color: white;
        padding: 11px 24px;
        border: none;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        height: 44px;
        transition: 0.2s;
    }
    .btn-generate:hover {
        background: #6b0000;
    }

    .summary-counters {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
        margin-bottom: 25px;
    }
    .counter-box {
        background: #ffffff;
        padding: 20px;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        box-shadow: 0 2px 8px rgba(0,0,0,0.01);
    }
    .counter-label {
        font-size: 12px;
        color: #6b7280;
        font-weight: 600;
        margin-bottom: 6px;
    }
    .counter-value {
        font-size: 24px;
        font-weight: 700;
        color: #111827;
    }

    .main-report-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 25px;
    }

    .chart-card {
        background: #ffffff;
        padding: 24px;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        box-shadow: 0 4px 12px rgba(0,0,0,0.02);
    }
    .chart-placeholder {
        height: 280px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fafafa;
        border: 1.5px dashed #e5e7eb;
        border-radius: 12px;
        color: #9ca3af;
        font-size: 14px;
    }

    .blood-summary-card {
        background: #ffffff;
        padding: 24px;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        box-shadow: 0 4px 12px rgba(0,0,0,0.02);
    }
    .card-title {
        font-size: 15px;
        font-weight: 700;
        color: #111827;
        margin-bottom: 16px;
    }
    
    .blood-row {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #f3f4f6;
        font-size: 14px;
        color: #374151;
    }
    .blood-row:last-child {
        border-bottom: none;
    }
    .blood-name {
        font-weight: 700;
        color: #8b0000;
    }
    .blood-qty {
        font-weight: 600;
    }
</style>

<div class="page-header">
    <h1>Laporan</h1>
    <p>Laporan kebutuhan dan penggunaan darah</p>
</div>

<div class="report-filter-card">
    <form action="#" method="GET" class="filter-grid">
        <div class="filter-group">
            <label for="jenis_laporan">Jenis Laporan</label>
            <select id="jenis_laporan" name="jenis_laporan" class="form-control">
                <option value="kebutuhan">Laporan Kebutuhan Darah</option>
                <option value="penggunaan">Laporan Penggunaan</option>
=======
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
    <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Permintaan
    </a>
    <a href="<?= base_url('rs/laporan_rs') ?>" class="menu-item menu-active">
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
>>>>>>> 9e38052ac64e126a033f0ee1c93746fa65681efa
            </select>
        </div>
        
        <div style="flex: 1; min-width: 300px; max-width: 500px;">
            <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display:block;">Periode Laporan</label>
            <div style="display: flex; gap: 10px; align-items: center;">
                <input type="date" name="tanggal_awal" style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; color: #4b5563; background: #f9fafb; font-family: 'Inter', sans-serif;">
                <span style="color: #9ca3af; font-weight: 500; font-size: 14px;">s/d</span>
                <input type="date" name="tanggal_akhir" style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; color: #4b5563; background: #f9fafb; font-family: 'Inter', sans-serif;">
            </div>
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

<<<<<<< HEAD
        <button type="submit" class="btn-generate">Generate</button>
    </form>
</div>

<div class="summary-counters">
    <div class="counter-box">
        <div class="counter-label">Total Permintaan</div>
        <div class="counter-value">23</div>
    </div>
    <div class="counter-box">
        <div class="counter-label">Total Kantong</div>
        <div class="counter-value">89</div>
    </div>
    <div class="counter-box">
        <div class="counter-label">Tersalukan</div>
        <div class="counter-value">76</div>
    </div>
    <div class="counter-box">
        <div class="counter-label">Sisa / Belum</div>
        <div class="counter-value">13</div>
    </div>
</div>

<div class="main-report-grid">
    
    <div class="chart-card">
        <div class="card-title">Grafik Kebutuhan Darah</div>
        <div class="chart-placeholder">
            <i class="fa-solid fa-chart-line fa-2xl" style="margin-right: 10px; color: #cbd5e1;"></i>
            Grafik Kebutuhan Darah
        </div>
    </div>

    <div class="blood-summary-card">
        <div class="card-title">Ringkasan Kebutuhan Darah</div>
        
        <div class="blood-row"><span class="blood-name">A+</span><span class="blood-qty">24 Kantong</span></div>
        <div class="blood-row"><span class="blood-name">A-</span><span class="blood-qty">12 Kantong</span></div>
        <div class="blood-row"><span class="blood-name">B+</span><span class="blood-qty">18 Kantong</span></div>
        <div class="blood-row"><span class="blood-name">B-</span><span class="blood-qty">9 Kantong</span></div>
        <div class="blood-row"><span class="blood-name">O+</span><span class="blood-qty">28 Kantong</span></div>
        <div class="blood-row"><span class="blood-name">O-</span><span class="blood-qty">11 Kantong</span></div>
        <div class="blood-row"><span class="blood-name">AB+</span><span class="blood-qty">7 Kantong</span></div>
        <div class="blood-row"><span class="blood-name">AB-</span><span class="blood-qty">4 Kantong</span></div>
    </div>

</div>

<?= $this->include('layout/footer') ?>
=======
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
>>>>>>> 9e38052ac64e126a033f0ee1c93746fa65681efa
