<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Donor - PMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('CSS_Tampilan_PMI/detail_donor.css') ?>">
</head>
<body class="bg-light">
    

<div class="container-fluid py-4 bootstrap-wrapper">
    <div class="d-flex justify-content-between align-items-start header-group-clean mb-4">
        <div>
            <h1 class="page-title" style="font-size: 24px; font-weight: 700; color: #111827; margin-bottom: 4px;">Detail Donor</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb-nav d-flex gap-2 list-unstyled mb-0" style="font-size: 14px;">
                    <li class="breadcrumb-nav-item"><a href="<?= base_url('pmi') ?>" class="text-secondary text-decoration-none">Dashboard</a></li>
                    <li class="breadcrumb-nav-separator text-muted">/</li>
                    <li class="breadcrumb-nav-item"><a href="<?= base_url('pmi/cari_donor') ?>" class="text-secondary text-decoration-none">Cari Donor</a></li>
                    <li class="breadcrumb-nav-separator text-muted">/</li>
                    <li class="breadcrumb-nav-item active text-dark fw-medium">Detail Donor</li>
                </ol>
            </nav>
        </div>
        <a href="<?= base_url('pmi/data_pendonor') ?>" class="btn btn-top-back px-3 py-1.5 fw-semibold small">
            <i class="fa-solid fa-chevron-left me-1" style="font-size: 11px;"></i> Kembali
        </a>
    </div>

    <div class="row g-4">
        <div class="col-md-5">
            <div class="card card-detail border-0 shadow-sm">
                <div class="card-body p-4 text-start">
                    <h5 class="section-card-title mb-4 fw-bold text-dark fs-6">Informasi Donor</h5>
                    
                    <div class="mb-4 text-start">
                        <img src="<?= base_url('uploads/avatar_donor/' . ($donor['foto'] ?? 'default.png')) ?>" alt="Foto Donor" class="rounded-circle img-thumbnail shadow-sm" style="width: 120px; height: 120px; object-fit: cover; background-color: #f3f4f6;">
                    </div>

                    <div class="d-flex flex-column gap-3 info-list">
                        <div class="row">
                            <span class="col-5 text-muted small">Nama</span>
                            <span class="col-7"><?= esc($donor['nama']) ?></span>
                        </div>

                        <div class="row">
                            <span class="col-5 text-muted small">NIK</span>
                            <span class="col-7"><?= esc($donor['nik']) ?></span>
                        </div>

                        <div class="row">
                            <span class="col-5 text-muted small">Tempat Lahir</span>
                            <span class="col-7"><?= esc($donor['tempat_lahir']) ?></span>
                        </div>

                        <div class="row">
                            <span class="col-5 text-muted small">Tanggal Lahir</span>
                            <span class="col-7"><?= esc($donor['tanggal_lahir']) ?></span>
                        </div>

                        <div class="row">
                            <span class="col-5 text-muted small">Jenis Kelamin</span>
                            <span class="col-7"><?= esc($donor['jenis_kelamin']) ?></span>
                        </div>

                        <div class="row">
                            <span class="col-5 text-muted small">Golongan Darah</span>
                            <span class="col-7"><?= esc($donor['golongan_darah']) ?></span>
                        </div>

                        <div class="row">
                            <span class="col-5 text-muted small">Rhesus</span>
                            <span class="col-7"><?= esc($donor['rhesus']) ?></span>
                        </div>

                        <div class="row">
                            <span class="col-5 text-muted small">Kecamatan</span>
                            <span class="col-7"><?= esc($donor['kecamatan']) ?></span>
                        </div>

                        <div class="row">
                            <span class="col-5 text-muted small">No HP</span>
                            <span class="col-7"><?= esc($donor['no_hp']) ?></span>
                        </div>

                        <div class="row">
                            <span class="col-5 text-muted small">Status</span>
                            <span class="col-7"><?= esc($donor['status']) ?></span>
                        </div>
                
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7 d-flex flex-column gap-4">
            <div class="card card-detail border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="section-card-title mb-4 fw-bold text-dark fs-6">Riwayat Donor</h5>
                    <div class="d-flex flex-column gap-3 info-list">
                        <div class="row"><span class="col-5 text-muted small">Terakhir Donor</span><span class="col-7 text-secondary fw-medium"><?= isset($donor['terakhir_donor']) ? date('d M Y', strtotime($donor['terakhir_donor'])) : '15 Mei 2025' ?></span></div>
                        <div class="row"><span class="col-5 text-muted small">Total Donor</span><span class="col-7 text-secondary fw-semibold"><?= $donor['total_donor'] ?? '5 kali' ?></span></div>
                        <div class="row">
                            <span class="col-5 text-muted small">Status Kelayakan</span>
                            <span class="col-7"><span class="badge bg-status-layak px-2.5 py-1 fw-bold">LAYAK</span></span>
                        </div>
                        <div class="row"><span class="col-5 text-muted small">Catatan Kesehatan</span><span class="col-7 text-secondary lh-base small"><?= $donor['catatan_kesehatan'] ?? 'Tidak ada catatan khusus.' ?></span></div>
                    </div>
                </div>
            </div>

            <div class="card card-detail border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="section-card-title mb-3 fw-bold text-dark fs-6">Aksi</h5>
                    <div class="d-flex flex-column gap-2.5">
                        <a href="tel:<?= $donor['no_hp'] ?? '081334567890' ?>" class="btn btn-action-maroon w-100 py-2.5 fw-semibold text-white d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-phone me-2" style="font-size: 13px;"></i> Hubungi Donor
                        </a>
                        <a href="https://wa.me/<?= $donor['no_hp'] ?? '081334567890' ?>" target="_blank" class="btn btn-action-outline-whatsapp w-100 py-2.5 fw-semibold d-flex align-items-center justify-content-center">
                            <i class="fa-brands fa-whatsapp me-2 fs-5"></i> Kirim WhatsApp
                        </a>
                        <a href="<?= base_url('pmi/cari_donor') ?>" class="btn btn-action-outline-back w-100 py-2.5 fw-semibold d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-arrow-turn-down-left me-2" style="font-size: 13px;"></i> Kembali ke Hasil Pencarian
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>