<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Permintaan Darah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('CSS_Tampilan_RS/detail_permintaan.css') ?>">
</head>

<main class="content-area bootstrap-wrapper">
    
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
        <h1 class="page-title mb-0">Detail Permintaan</h1>
        <button type="button" class="btn btn-outline-maroon px-4 py-2 fw-semibold" onclick="window.print()">
            <i class="fa-solid fa-print me-2"></i> Cetak Dokumen
        </button>
    </div>

    <div class="row g-4 mb-4">
        <!-- KARTU INFORMASI PERMINTAAN -->
        <div class="col-md-4">
            <div class="card card-custom h-100">
                <div class="card-header bg-white border-0 pt-4 pb-0">
                    <h5 class="card-title fw-bold text-dark fs-6 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-file-lines text-maroon"></i> Informasi Permintaan
                    </h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled info-list">
                        <li>
                            <span class="info-label">ID Permintaan</span>
                            <span class="info-value text-dark fw-bold">REQ-20250520-001</span>
                        </li>
                        <li>
                            <span class="info-label">Tanggal Masuk</span>
                            <span class="info-value">20 Mei 2025, 10:30</span>
                        </li>
                        <li>
                            <span class="info-label">Prioritas</span>
                            <span class="info-value"><span class="badge bg-prio-urgent">URGENT (&lt; 2 jam)</span></span>
                        </li>
                        <li>
                            <span class="info-label">Dibuat oleh</span>
                            <span class="info-value"><?= session()->get('nama') ?? 'RSUD Undata Palu' ?></span>
                        </li>
                        <li>
                            <span class="info-label">Catatan Tambahan</span>
                            <span class="info-value fst-italic text-muted">"Pasien dalam kondisi kritis, mohon segera diproses."</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- KARTU INFORMASI PASIEN -->
        <div class="col-md-4">
            <div class="card card-custom h-100">
                <div class="card-header bg-white border-0 pt-4 pb-0">
                    <h5 class="card-title fw-bold text-dark fs-6 d-flex align-items-center gap-2">
                        <i class="fa-solid fa-user-injured text-maroon"></i> Informasi Pasien
                    </h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled info-list">
                        <li>
                            <span class="info-label">Nama Lengkap Pasien</span>
                            <span class="info-value fw-bold text-dark">Andi Saputra</span>
                        </li>
                        <li>
                            <span class="info-label">No. Rekam Medis</span>
                            <span class="info-value text-dark">RM-202505-001</span>
                        </li>
                        <li>
                            <span class="info-label">Ruangan / Unit Rawat</span>
                            <span class="info-value fw-medium text-dark">ICU</span>
                        </li>
                        <li>
                            <span class="info-label">Diagnosis Medis</span>
                            <span class="info-value text-dark">Demam Berdarah Dengue</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- HIGHLIGHT KEBUTUHAN DARAH -->
        <div class="col-md-4">
            <div class="card card-custom bg-maroon-light h-100 border-0">
                <div class="card-body text-center d-flex flex-column justify-content-center align-items-center p-4">
                    <div class="icon-circle-maroon mb-3">
                        <i class="fa-solid fa-droplet"></i>
                    </div>
                    <h6 class="text-maroon fw-semibold mb-1">Kebutuhan Darah</h6>
                    <h2 class="display-3 fw-bold text-maroon mb-0 lh-1">O+</h2>
                    <span class="badge bg-maroon text-white mt-3 mb-3 px-4 py-2 fs-6 rounded-pill">3 Kantong</span>
                    <p class="text-maroon opacity-75 small mb-0 fw-medium">Rhesus Positif (+)</p>
                </div>
            </div>
        </div>
    </div>

    <!-- TIMELINE RIWAYAT STATUS -->
    <div class="card card-custom mb-5">
        <div class="card-header bg-white border-0 pt-4 pb-0">
            <h5 class="card-title fw-bold text-dark fs-6 d-flex align-items-center gap-2">
                <i class="fa-solid fa-clock-rotate-left text-maroon"></i> Lacak Riwayat Status
            </h5>
        </div>
        <div class="card-body p-4">
            <div class="timeline-clean">
                
                <div class="timeline-item completed">
                    <div class="timeline-marker"><i class="fa-solid fa-check"></i></div>
                    <div class="timeline-content">
                        <h6 class="mb-1 fw-bold text-dark">Permintaan Dibuat</h6>
                        <p class="text-muted small mb-0">20 Mei 2025, 10:30 &bull; Permintaan berhasil dikirimkan ke sistem oleh RS.</p>
                    </div>
                </div>

                <div class="timeline-item completed">
                    <div class="timeline-marker"><i class="fa-solid fa-check"></i></div>
                    <div class="timeline-content">
                        <h6 class="mb-1 fw-bold text-dark">Diterima oleh PMI</h6>
                        <p class="text-muted small mb-0">20 Mei 2025, 10:35 &bull; Permintaan masuk ke dalam antrean PMI Kota Palu.</p>
                    </div>
                </div>

                <div class="timeline-item active">
                    <div class="timeline-marker"><i class="fa-solid fa-spinner fa-spin"></i></div>
                    <div class="timeline-content">
                        <h6 class="mb-1 fw-bold text-maroon">Diproses</h6>
                        <p class="text-maroon small mb-0 fw-medium">20 Mei 2025, 11:20 &bull; Petugas sedang mencarikan ketersediaan donor yang sesuai.</p>
                        <span class="badge bg-status-proses mt-2">Status Saat Ini</span>
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