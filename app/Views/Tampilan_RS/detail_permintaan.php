<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('CSS_Tampilan_RS/detail_permintaan.css') ?>">

<div class="container-fluid py-2 bootstrap-wrapper">
    <div class="print-header-letter d-none">
        <div class="print-header-left">
            <img src="<?= base_url('logo.png') ?>" alt="Logo RS" class="print-logo-rs">
            <div class="print-rs-info">
                <h2 class="print-rs-name"><?= session()->get('nama') ?? 'RSUD Sejahtera' ?></h2>
                <p class="print-app-name">Sistem Informasi Donor Darah - SiapDonor</p>
            </div>
        </div>
        <div class="print-header-right text-end">
            <span class="print-date-access">Tanggal Cetak: <?= date('d M Y, H:i') ?> WITA</span>
        </div>
    </div>
    <div class="d-flex justify-content-between align-items-start header-group">
        <div>
            <h1 class="page-title">Detail Permintaan</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb-nav">
                    <li class="breadcrumb-nav-item"><a href="<?= base_url('rs') ?>">Dashboard</a></li>
                    <li class="breadcrumb-nav-separator">/</li>
                    <li class="breadcrumb-nav-item"><a href="<?= base_url('rs/riwayat_permintaan') ?>">Riwayat Permintaan</a></li>
                    <li class="breadcrumb-nav-separator">/</li>
                    <li class="breadcrumb-nav-item active">Detail Permintaan</li>
                </ol>
            </nav>
        </div>
        <button type="button" class="btn btn-outline-print px-4 py-2 fw-semibold" onclick="window.print()">
            <i class="fa-solid fa-file-pdf me-2"></i> Cetak / PDF
        </button>
    </div>
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card card-detail h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="section-card-title mb-4">Informasi Permintaan</h5>
                    <div class="d-flex flex-column gap-3 info-list">
                        <div class="row"><span class="col-5 text-muted small">ID Permintaan</span><span class="col-7 fw-semibold text-dark">REQ-20250520-001</span></div>
                        <div class="row"><span class="col-5 text-muted small">Tanggal</span><span class="col-7 text-secondary">20 Mei 2025, 10:30</span></div>
                        <div class="row"><span class="col-5 text-muted small">Prioritas</span><span class="col-7"><span class="badge bg-prio-urgent">URGENT (< 2 jam)</span></span></div>
                        <div class="row"><span class="col-5 text-muted small">Status</span><span class="col-7"><span class="badge bg-status-proses">Diproses</span></span></div>
                        <div class="row"><span class="col-5 text-muted small">Dibuat oleh</span><span class="col-7 text-secondary"><?= session()->get('nama') ?? 'RSUD Sejahtera' ?></span></div>
                        <div class="row"><span class="col-5 text-muted small">Catatan RS</span><span class="col-7 text-secondary lh-base small">Pasien dalam kondisi kritis, mohon segera diproses.</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-detail h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="section-card-title mb-4">Informasi Pasien</h5>
                    <div class="d-flex flex-column gap-3 info-list">
                        <div class="row"><span class="col-5 text-muted small">Nama Pasien</span><span class="col-7 fw-semibold text-dark">Andi Saputra</span></div>
                        <div class="row"><span class="col-5 text-muted small">No. Rekam Medis</span><span class="col-7 text-secondary">RM-202505-001</span></div>
                        <div class="row"><span class="col-5 text-muted small">Ruangan / Unit</span><span class="col-7 text-secondary">ICU</span></div>
                        <div class="row"><span class="col-5 text-muted small">Diagnosis</span><span class="col-7 text-secondary lh-base">Demam Berdarah Dengue</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-detail h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="section-card-title mb-4">Kebutuhan Darah</h5>
                    <div class="d-flex flex-column gap-3 info-list">
                        <div class="row"><span class="col-5 text-muted small">Golongan Darah</span><span class="col-7 fw-bold text-danger fs-5 lh-sm">O+</span></div>
                        <div class="row"><span class="col-5 text-muted small">Rhesus</span><span class="col-7 text-secondary">Positif</span></div>
                        <div class="row"><span class="col-5 text-muted small">Jumlah Kantong</span><span class="col-7 fw-semibold text-dark">3 Kantong</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-detail border-0 shadow-sm mb-4">
        <div class="card-body p-4">
            <h5 class="section-card-title mb-4">Riwayat Status</h5>
            <div class="timeline-wrapper">
                <div class="timeline-item">
                    <div class="timeline-badge bg-success-light text-success"><i class="fa-solid fa-check fs-6"></i></div>
                    <div class="timeline-content">
                        <div class="small text-muted fw-medium">20 Mei 2025, 10:30</div>
                        <div class="text-dark fw-medium mt-0.5">Permintaan baru dibuat oleh RS</div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-badge bg-primary-light text-primary"><i class="fa-solid fa-spinner fs-6 fa-spin-slow"></i></div>
                    <div class="timeline-content">
                        <div class="small text-muted fw-medium">20 Mei 2025, 10:35</div>
                        <div class="text-dark fw-medium mt-0.5">Permintaan diterima oleh PMI</div>
                    </div>
                </div>
                <div class="timeline-item content-last">
                    <div class="timeline-badge bg-secondary-light text-secondary"><i class="fa-solid fa-circle-dot fs-6"></i></div>
                    <div class="timeline-content">
                        <div class="small text-muted fw-medium">20 Mei 2025, 11:20</div>
                        <div class="text-dark fw-medium mt-0.5">Sedang mencari donor yang sesuai</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-2 mb-5">
        <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="btn btn-back px-4 py-2 fw-semibold">
            <i class="fa-solid fa-arrow-left me-2"></i> Kembali ke Riwayat
        </a>
    </div>
</div>

</main>
<?= $this->endSection() ?>
