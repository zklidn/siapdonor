<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('CSS_Tampilan_RS/detail_permintaan.css') ?>">

<!-- SIDEBAR -->
<aside class="sidebar">
    <div class="menu-top">
        <a href="<?= base_url('rs') ?>" class="menu-item">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
        <a href="<?= base_url('rs/permintaan_darah') ?>" class="menu-item">
            <i class="fa-solid fa-droplet"></i> Permintaan Darah
        </a>
        <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="menu-item menu-active">
            <i class="fa-solid fa-file-invoice"></i> Riwayat Permintaan
        </a>
    </div>
</aside>

<main class="content-area bootstrap-wrapper pt-4">
    
    <!-- HEADER UNTUK CETAK PDF (Disembunyikan di layar, muncul saat diprint) -->
    <div class="print-header-letter d-none">
        <div class="print-header-left">
            <img src="<?= base_url('logo.png') ?>" alt="Logo RS" class="print-logo-rs">
            <div class="print-rs-info">
                <h2 class="print-rs-name"><?= session()->get('nama') ?? 'RSUD Undata Palu' ?></h2>
                <p class="print-app-name">Sistem Informasi Donor Darah - SiapDonor</p>
            </div>
        </div>
        <div class="print-header-right text-end">
            <span class="print-date-access">Tanggal Cetak: <?= date('d M Y, H:i') ?> WITA</span>
        </div>
    </div>

    <!-- HEADER HALAMAN -->
    <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
        <h1 class="page-title mb-0 fs-4 fw-bold text-dark">Detail Permintaan</h1>
        <button type="button" class="btn btn-outline-maroon px-4 py-2 fw-semibold" onclick="window.print()">
            <i class="fa-solid fa-print me-2"></i> Cetak Dokumen
        </button>
    </div>

    <div class="row g-4 mb-4">
        <!-- KARTU INFORMASI PERMINTAAN -->
        <div class="col-md-4">
            <div class="card card-custom h-100 shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4 pb-0">
                    <h5 class="card-title fw-bold text-dark fs-6 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-file-lines text-maroon"></i> Informasi Permintaan
                    </h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled info-list">
                        <li class="mb-3">
                            <span class="info-label d-block text-muted small mb-1">ID Permintaan</span>
                            <span class="info-value text-dark fw-bold fs-6">REQ-<?= str_pad($detail['id_permintaan'], 3, '0', STR_PAD_LEFT) ?></span>
                        </li>
                        <li class="mb-3">
                            <span class="info-label d-block text-muted small mb-1">Tanggal Masuk</span>
                            <span class="info-value fw-medium text-dark"><?= date('d M Y, H:i', strtotime($detail['created_at'])) ?></span>
                        </li>
                        <li class="mb-3">
                            <span class="info-label d-block text-muted small mb-1">Prioritas</span>
                            <?php 
                            $prio = strtolower($detail['prioritas'] ?? '');
                            $prioClass = 'bg-secondary';
                            if($prio == 'urgent') $prioClass = 'bg-danger';
                            if($prio == 'tinggi') $prioClass = 'bg-warning text-dark';
                            if($prio == 'normal') $prioClass = 'bg-primary';
                            if($prio == 'rendah') $prioClass = 'bg-success';
                            ?>
                            <span class="info-value"><span class="badge <?= $prioClass ?> px-3 py-1"><?= strtoupper($prio) ?></span></span>
                        </li>
                        <li class="mb-3">
                            <span class="info-label d-block text-muted small mb-1">Dibuat oleh</span>
                            <span class="info-value fw-medium text-dark"><?= session()->get('nama') ?? 'RSUD Undata Palu' ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- KARTU INFORMASI PASIEN -->
        <div class="col-md-4">
            <div class="card card-custom h-100 shadow-sm border-0">
                <div class="card-header bg-white border-0 pt-4 pb-0">
                    <h5 class="card-title fw-bold text-dark fs-6 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-user-injured text-maroon"></i> Informasi Pasien
                    </h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled info-list">
                        <li class="mb-3">
                            <span class="info-label d-block text-muted small mb-1">Nama Lengkap Pasien</span>
                            <span class="info-value fw-bold text-dark fs-6"><?= $detail['nama_pasien'] ?></span>
                        </li>
                        <li class="mb-3">
                            <span class="info-label d-block text-muted small mb-1">No. Rekam Medis</span>
                            <span class="info-value fw-medium text-dark"><?= $detail['no_rm'] ?></span>
                        </li>
                        <li class="mb-3">
                            <span class="info-label d-block text-muted small mb-1">Ruangan / Unit Rawat</span>
                            <span class="info-value fw-medium text-dark"><?= $detail['ruangan'] ?></span>
                        </li>
                        <li class="mb-3">
                            <span class="info-label d-block text-muted small mb-1">Diagnosis Medis</span>
                            <span class="info-value fw-medium text-dark"><?= !empty($detail['diagnosis']) ? $detail['diagnosis'] : '-' ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- HIGHLIGHT KEBUTUHAN DARAH -->
        <div class="col-md-4">
            <div class="card card-custom bg-maroon-light h-100 border-0 shadow-sm" style="background-color: #fff0f0;">
                <div class="card-body text-center d-flex flex-column justify-content-center align-items-center p-4">
                    <div class="icon-circle-maroon mb-3" style="font-size: 2rem; color: #800000;">
                        <i class="fa-solid fa-droplet"></i>
                    </div>
                    <h6 class="text-maroon fw-semibold mb-1" style="color: #800000;">Kebutuhan Darah</h6>
                    <h2 class="display-3 fw-bold text-maroon mb-0 lh-1" style="color: #800000;"><?= $detail['golongan_darah'] ?><?= $detail['rhesus'] ?></h2>
                    <span class="badge mt-3 mb-3 px-4 py-2 fs-6 rounded-pill" style="background-color: #800000; color: white;"><?= $detail['jumlah_kantong'] ?> Kantong</span>
                    <p class="text-maroon opacity-75 small mb-0 fw-medium" style="color: #800000;">Rhesus <?= $detail['rhesus'] == '+' ? 'Positif (+)' : 'Negatif (-)' ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- TIMELINE RIWAYAT STATUS -->
    <div class="card card-custom mb-5 shadow-sm border-0">
        <div class="card-header bg-white border-0 pt-4 pb-0">
            <h5 class="card-title fw-bold text-dark fs-6 d-flex align-items-center gap-2">
                <i class="fa-solid fa-clock-rotate-left text-maroon"></i> Lacak Riwayat Status
            </h5>
        </div>
        <div class="card-body p-4">
            <div class="timeline-clean">
                
                <!-- Step 1: Dibuat -->
                <div class="timeline-item completed d-flex gap-3 mb-4">
                    <div class="timeline-marker text-success fs-4"><i class="fa-solid fa-circle-check"></i></div>
                    <div class="timeline-content">
                        <h6 class="mb-1 fw-bold text-dark">Permintaan Dibuat</h6>
                        <p class="text-muted small mb-0"><?= date('d M Y, H:i', strtotime($detail['created_at'])) ?> &bull; Permintaan berhasil dikirimkan ke sistem oleh RS.</p>
                    </div>
                </div>

                <!-- Step Terakhir: Dinamis mengikuti database -->
                <div class="timeline-item active d-flex gap-3">
                    <div class="timeline-marker fs-4" style="color: #800000;">
                        <?php if(in_array($detail['status'], ['Selesai', 'Donor Ditemukan'])): ?>
                            <i class="fa-solid fa-circle-check text-success"></i>
                            <i class="fa-solid fa-circle-xmark text-danger"></i>
                        <?php else: ?>
                            <i class="fa-solid fa-spinner fa-spin"></i>
                        <?php endif; ?>
                    </div>
                    <div class="timeline-content">
                        <h6 class="mb-1 fw-bold" style="color: #800000;"><?= $detail['status'] ?></h6>
                        <p class="small mb-0 fw-medium" style="color: #800000;"><?= date('d M Y, H:i', strtotime($detail['updated_at'])) ?> &bull; Update status terakhir dari sistem PMI.</p>
                        
                        
                        <?php if($detail['status'] == 'Selesai'): ?>
                            <span class="badge bg-success mt-2">Telah Selesai</span>
                        <?php else: ?>
                            <span class="badge mt-2" style="background-color: #800000;">Status Saat Ini</span>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- TOMBOL KEMBALI -->
    <div class="pb-4">
        <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="btn btn-outline-secondary px-4 py-2 fw-semibold rounded-3">
            <i class="fa-solid fa-arrow-left me-2"></i> Kembali ke Riwayat
        </a>
    </div>

</main>

<?= $this->endSection() ?>