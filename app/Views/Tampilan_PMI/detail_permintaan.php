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
    <div class="d-flex justify-content-between align-items-start header-group-clean mb-4">
        <div>
            <h1 class="page-title">Detail Permintaan</h1>
        </div>
        <a href="<?= base_url('pmi/permintaan_masuk') ?>" class="btn btn-top-back px-3 py-1.5 fw-semibold small">
            <i class="fa-solid fa-chevron-left me-1" style="font-size: 11px;"></i> Kembali
        </a>
    </div>

    <div class="row g-4">
        <div class="col-md-7">
            <div class="card card-detail border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="section-card-title mb-4 fw-bold text-dark fs-6">Informasi Permintaan</h5>
                    <div class="d-flex flex-column gap-3 info-list">
                        <div class="row">
                            <span class="col-5 text-muted small">ID Permintaan</span>
                            <span class="col-7 fw-semibold text-dark"><?= esc($permintaan['id_permintaan']) ?></span>
                        </div>
                        <div class="row">
                            <span class="col-5 text-muted small">Tanggal Permintaan</span>
                            <span class="col-7 text-secondary"><?= date('d Mei Y, H:i', strtotime($permintaan['created_at'])) ?></span>
                        </div>
                        <div class="row">
                            <span class="col-5 text-muted small">Rumah Sakit</span>
                            <span class="col-7 text-secondary fw-medium"><?= esc($permintaan['nama_rs']) ?></span>
                        </div>
                        <div class="row">
                            <span class="col-5 text-muted small">Nama Pasien</span>
                            <span class="col-7 fw-semibold text-dark"><?= esc($permintaan['nama_pasien']) ?></span>
                        </div>
                        <div class="row">
                            <span class="col-5 text-muted small">No. Rekam Medis</span>
                            <span class="col-7 text-secondary"><?= esc($permintaan['no_rm']) ?></span>
                        </div>
                        <div class="row">
                            <span class="col-5 text-muted small">Ruang / Unit</span>
                            <span class="col-7 text-secondary"><?= esc($permintaan['ruangan']) ?></span>
                        </div>
                        <div class="row">
                            <span class="col-5 text-muted small">Diagnosa</span>
                            <span class="col-7 text-secondary lh-base"><?= esc($permintaan['diagnosis']) ?></span>
                        </div>
                        <div class="row">
                            <span class="col-5 text-muted small">Golongan Darah</span>
                            <span class="col-7 fw-bold text-danger fs-5 lh-sm"><?= esc($permintaan['golongan_darah']) ?></span>
                        </div>
                        <div class="row">
                            <span class="col-5 text-muted small">Rhesus</span>
                            <span class="col-7 text-secondary"><?= esc($permintaan['rhesus']) ?></span>
                        </div>
                        <div class="row">
                            <span class="col-5 text-muted small">Jumlah Kantong</span>
                            <span class="col-7 fw-semibold text-dark"><?= esc($permintaan['jumlah_kantong']) ?> Kantong</span>
                        </div>
                        <div class="row">
                            <span class="col-5 text-muted small">Prioritas / Urgensi</span>
                            <span class="col-7">
                                <span class="badge bg-prio-urgent">
                                    <?= strtoupper(esc($permintaan['prioritas'])) ?> <?= esc($permintaan['prioritas']) == 'Urgent' ? '(< 2 jam)' : '' ?>
                                </span>
                            </span>
                        </div>
                        <div class="row">
                            <span class="col-5 text-muted small">Status Saat Ini</span>
                            <span class="col-7">
                                <span class="badge bg-status-<?= ($permintaan['status'] == 'Baru') ? 'baru' : (($permintaan['status'] == 'Diproses') ? 'proses' : (($permintaan['status'] == 'Selesai') ? 'selesai' : 'ditemukan')) ?>">
                                    <?= esc($permintaan['status']) ?>
                                </span>
                            </span>
                        </div>
                        <div class="row">
                            <span class="col-5 text-muted small">Catatan RS</span>
                            <span class="col-7 text-secondary lh-base small"><?= esc($permintaan['catatan_rs'] ?? '-') ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 d-flex flex-column gap-4">
            <div class="card card-detail border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="section-card-title mb-4 fw-bold text-dark fs-6">Riwayat Status</h5>
                    <div class="timeline-wrapper">
                        <?php if (!empty($riwayat_status) && is_array($riwayat_status)): ?>
                            <?php foreach ($riwayat_status as $index => $st): ?>
                            <div class="timeline-item <?= ($index === count($riwayat_status) - 1) ? 'content-last' : '' ?>">
                                <div class="timeline-badge <?= ($index === 0) ? 'border-danger text-danger' : 'border-secondary text-muted' ?>">
                                    <i class="fa-solid <?= ($index === 0) ? 'fa-circle-dot' : 'fa-circle' ?> fs-6"></i>
                                </div>
                                <div class="timeline-content">
                                    <div class="small text-muted fw-medium"><?= date('d Mei Y, H:i', strtotime($st['created_at'])) ?></div>
                                    <div class="text-dark fw-medium mt-0.5"><?= esc($st['keterangan']) ?></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="timeline-item">
                                <div class="timeline-badge border-danger text-danger"><i class="fa-solid fa-circle-dot fs-6"></i></div>
                                <div class="timeline-content">
                                    <div class="small text-muted fw-medium"><?= date('d Mei Y, H:i', strtotime($permintaan['created_at'])) ?></div>
                                    <div class="text-dark fw-medium mt-0.5">Permintaan baru dibuat oleh RS</div>
                                </div>
                            </div>
                            <div class="timeline-item"><div class="timeline-badge border-secondary text-muted"><i class="fa-solid fa-circle fs-6"></i></div><div class="timeline-content"><div class="text-muted mt-0.5">-</div></div></div>
                            <div class="timeline-item"><div class="timeline-badge border-secondary text-muted"><i class="fa-solid fa-circle fs-6"></i></div><div class="timeline-content"><div class="text-muted mt-0.5">-</div></div></div>
                            <div class="timeline-item content-last"><div class="timeline-badge border-secondary text-muted"><i class="fa-solid fa-circle fs-6"></i></div><div class="timeline-content"><div class="text-muted mt-0.5">-</div></div></div>
                        <?php endif; ?>
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
                        <a href="<?= base_url('pmi/update_status_permintaan/' . $permintaan['id_permintaan']) ?>" class="btn btn-action-outline-maroon w-100 py-2.5 fw-semibold">
                            <i class="fa-solid fa-arrows-rotate me-2"></i> Ubah Status
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