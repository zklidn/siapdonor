<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Permintaan Darah - PMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('CSS_Tampilan_PMI/detail_permintaan.css') ?>">
</head>
<body class="bg-light">

<div class="container-fluid py-4 bootstrap-wrapper">
    <div class="header-group-clean mb-4">
        <h1 class="page-title" style="font-size: 24px; font-weight: 700; color: #111827; margin-bottom: 4px;">Detail Permintaan</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb-nav d-flex gap-2 list-unstyled mb-0" style="font-size: 14px;">
                <li class="breadcrumb-nav-item"><a href="<?= base_url('pmi') ?>" class="text-secondary text-decoration-none">Dashboard</a></li>
                <li class="breadcrumb-nav-separator text-muted">/</li>
                <li class="breadcrumb-nav-item"><a href="<?= base_url('pmi/permintaan_masuk') ?>" class="text-secondary text-decoration-none">Permintaan Masuk</a></li>
                <li class="breadcrumb-nav-separator text-muted">/</li>
                <li class="breadcrumb-nav-item active text-dark fw-medium">Detail Permintaan</li>
            </ol>
        </nav>
    </div>

    <div class="row g-4">
        <div class="col-md-7">
            <div class="card card-detail border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="section-card-title mb-4 fw-bold text-dark fs-6">Informasi Permintaan</h5>
                    <div class="d-flex flex-column gap-3 info-list">
                        <div class="row"><span class="col-5 text-muted small">ID Permintaan</span><span class="col-7 fw-semibold text-dark"><?= $permintaan['id_permintaan'] ?? 'REQ-20250520-001' ?></span></div>
                        <div class="row"><span class="col-5 text-muted small">Tanggal Permintaan</span><span class="col-7 text-secondary"><?= isset($permintaan['tanggal']) ? date('d Mei Y, H:i', strtotime($permintaan['tanggal'])) : '20 Mei 2025, 09:15' ?></span></div>
                        <div class="row"><span class="col-5 text-muted small">Rumah Sakit</span><span class="col-7 text-secondary fw-medium"><?= $permintaan['nama_rs'] ?? 'RSUD Undata Palu' ?></span></div>
                        <div class="row"><span class="col-5 text-muted small">Nama Pasien</span><span class="col-7 fw-semibold text-dark"><?= $permintaan['nama_pasien'] ?? 'Andi Saputra' ?></span></div>
                        <div class="row"><span class="col-5 text-muted small">No. Rekam Medis</span><span class="col-7 text-secondary"><?= $permintaan['no_rm'] ?? 'RM-202505-001' ?></span></div>
                        <div class="row"><span class="col-5 text-muted small">Ruang / Unit</span><span class="col-7 text-secondary"><?= $permintaan['ruangan'] ?? 'ICU' ?></span></div>
                        <div class="row"><span class="col-5 text-muted small">Diagnosa</span><span class="col-7 text-secondary lh-base"><?= $permintaan['diagnosis'] ?? 'Demam Berdarah Dengue' ?></span></div>
                        <div class="row"><span class="col-5 text-muted small">Golongan Darah</span><span class="col-7 fw-bold text-danger fs-5 lh-sm"><?= $permintaan['gol_darah'] ?? 'O+' ?></span></div>
                        <div class="row"><span class="col-5 text-muted small">Rhesus</span><span class="col-7 text-secondary"><?= $permintaan['rhesus'] ?? 'Positif' ?></span></div>
                        <div class="row"><span class="col-5 text-muted small">Jumlah Kantong</span><span class="col-7 fw-semibold text-dark"><?= $permintaan['jumlah_kantong'] ?? '3 Kantong' ?></span></div>
                        <div class="row"><span class="col-5 text-muted small">Prioritas / Urgensi</span><span class="col-7"><span class="badge bg-prio-urgent">URGENT (&lt; 2 jam)</span></span></div>
                        <div class="row"><span class="col-5 text-muted small">Status Saat Ini</span><span class="col-7"><span class="badge bg-status-baru">Baru</span></span></div>
                        <div class="row"><span class="col-5 text-muted small">Catatan RS</span><span class="col-7 text-secondary lh-base small"><?= $permintaan['catatan_rs'] ?? 'Pasien dalam kondisi kritis, mohon segera diproses.' ?></span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 d-flex flex-column gap-4">
            <div class="card card-detail border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="section-card-title mb-4 fw-bold text-dark fs-6">Riwayat Status</h5>
                    <div class="timeline-wrapper">
                        <div class="timeline-item">
                            <div class="timeline-badge border-danger text-danger"><i class="fa-solid fa-circle-dot fs-6"></i></div>
                            <div class="timeline-content">
                                <div class="small text-muted fw-medium">20 Mei 2025, 09:15</div>
                                <div class="text-dark fw-medium mt-0.5">Permintaan baru dibuat oleh RS</div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-badge border-secondary text-muted"><i class="fa-solid fa-circle fs-6"></i></div>
                            <div class="timeline-content"><div class="text-muted mt-0.5">-</div></div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-badge border-secondary text-muted"><i class="fa-solid fa-circle fs-6"></i></div>
                            <div class="timeline-content"><div class="text-muted mt-0.5">-</div></div>
                        </div>
                        <div class="timeline-item content-last">
                            <div class="timeline-badge border-secondary text-muted"><i class="fa-solid fa-circle fs-6"></i></div>
                            <div class="timeline-content"><div class="text-muted mt-0.5">-</div></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-detail border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="section-card-title mb-3 fw-bold text-dark fs-6">Aksi</h5>
                    <div class="d-flex flex-column gap-2.5">
                        <a href="<?= base_url('pmi/cari_donor') ?>" class="btn btn-action-maroon w-100 py-2.5 fw-semibold text-white">
                            <i class="fa-solid fa-phone me-2"></i> Cari Donor
                        </a>
                        <a href="<?= base_url('pmi/update_status_permintaan') ?>" class="btn btn-action-outline-maroon w-100 py-2.5 fw-semibold">
                            <i class="fa-solid fa-arrows-rotate me-2"></i> Ubah Status
                        </a>
                        <a href="<?= base_url('pmi/tolak_permintaan') ?>" class="btn btn-action-outline-danger w-100 py-2.5 fw-semibold">
                            <i class="fa-solid fa-bolt me-2"></i> Tolak Permintaan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-4 mb-4">
        <a href="<?= base_url('pmi/permintaan_masuk') ?>" class="btn btn-back px-4 py-2 fw-semibold">
            <i class="fa-solid fa-arrow-left me-2"></i> Kembali ke Permintaan Masuk
        </a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>