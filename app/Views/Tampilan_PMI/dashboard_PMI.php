<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('CSS_Tampilan_PMI/dashboard_pmi.css') ?>">

<div class="container-fluid py-2 bootstrap-wrapper">
    <div class="header-group-clean">
        <h1 class="page-title">Dashboard</h1>
        <p class="text-muted small mb-0">Selamat datang, Petugas PMI Kota Palu!</p>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card card-stat h-100">
                <div class="card-body">
                    <h6 class="text-muted fw-normal small mb-2">Permintaan Masuk</h6>
                    <h2 class="display-6 fw-bold mb-1 text-danger"><?= $permintaan_masuk ?? 12 ?></h2>
                    <small class="text-muted">Baru</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-stat h-100">
                <div class="card-body">
                    <h6 class="text-muted fw-normal small mb-2">Diproses</h6>
                    <h2 class="display-6 fw-bold mb-1 text-warning"><?= $diproses ?? 7 ?></h2>
                    <small class="text-muted">Sedang ditangani</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-stat h-100">
                <div class="card-body">
                    <h6 class="text-muted fw-normal small mb-2">Donor Ditemukan</h6>
                    <h2 class="display-6 fw-bold mb-1 text-primary"><?= $donor_ditemukan ?? 5 ?></h2>
                    <small class="text-muted">Menunggu pengambilan</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-stat h-100">
                <div class="card-body">
                    <h6 class="text-muted fw-normal small mb-2">Selesai</h6>
                    <h2 class="display-6 fw-bold mb-1 text-success"><?= $selesai ?? 28 ?></h2>
                    <small class="text-muted">Bulan ini</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card card-content h-100">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3 text-dark fs-6">Permintaan Masuk Terbaru</h5>
                    <div class="table-responsive">
                        <table class="table align-middle custom-table mb-0">
                            <thead>
                                <tr>
                                    <th>ID Permintaan</th>
                                    <th>Rumah Sakit</th>
                                    <th>Gol. Darah</th>
                                    <th>Prioritas</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                // Penampung Data Dummy jika database backend belum dilempar
                                $list_terbaru = isset($permintaan_terbaru) ? $permintaan_terbaru : [
                                    ['id' => 'REQ-20250520-001', 'rs' => 'RSUD Undata Palu', 'gol' => 'O+', 'prio' => 'URGENT', 'status' => 'Baru'],
                                    ['id' => 'REQ-20250520-002', 'rs' => 'RS Madani Palu', 'gol' => 'A+', 'prio' => 'TINGGI', 'status' => 'Diproses'],
                                    ['id' => 'REQ-20250519-003', 'rs' => 'RS Bhayangkara Palu', 'gol' => 'B+', 'prio' => 'NORMAL', 'status' => 'Diproses'],
                                    ['id' => 'REQ-20250519-004', 'rs' => 'RS Anutapura Palu', 'gol' => 'AB+', 'prio' => 'NORMAL', 'status' => 'Donor Ditemukan'],
                                    ['id' => 'REQ-20250519-005', 'rs' => 'RS Wirabuana Palu', 'gol' => 'O-', 'prio' => 'RENDAH', 'status' => 'Selesai']
                                ];
                                
                                foreach ($list_terbaru as $row): ?>
                                <tr>
                                    <td class="text-muted fw-medium"><?= $row['id'] ?></td>
                                    <td class="fw-semibold text-dark"><?= $row['rs'] ?></td>
                                    <td class="fw-bold text-secondary"><?= $row['gol'] ?></td>
                                    <td>
                                        <span class="badge badge-priority bg-prio-<?= strtolower($row['prio']) ?>">
                                            <?= $row['prio'] ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-status bg-status-<?= ($row['status'] == 'Baru') ? 'baru' : (($row['status'] == 'Diproses') ? 'proses' : (($row['status'] == 'Selesai') ? 'selesai' : 'ditemukan')) ?>">
                                            <?= $row['status'] ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        <a href="<?= base_url('pmi/permintaan_darah') ?>" class="text-decoration-none text-danger fw-bold small link-maroon">Lihat semua permintaan</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-content h-100">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-4 text-dark fs-6">Statistik Bulanan</h5>
                    
                    <?php
                    // Mencegah pembagian nol jika data masih kosong
                    $total_pmi = $total_permintaan ?? 52;
                    $v_selesai = $selesai ?? 28;
                    $v_proses = $diproses ?? 7;
                    $v_ditemukan = $donor_ditemukan ?? 5;
                    $v_baru = $permintaan_masuk ?? 12;
                    $v_ditolak = $ditolak ?? 0;

                    $p_selesai = $total_pmi > 0 ? round(($v_selesai / $total_pmi) * 100, 1) : 0;
                    $p_proses = $total_pmi > 0 ? round(($v_proses / $total_pmi) * 100, 1) : 0;
                    $p_ditemukan = $total_pmi > 0 ? round(($v_ditemukan / $total_pmi) * 100, 1) : 0;
                    $p_baru = $total_pmi > 0 ? round(($v_baru / $total_pmi) * 100, 1) : 0;
                    $p_ditolak = $total_pmi > 0 ? round(($v_ditolak / $total_pmi) * 100, 1) : 0;
                    ?>

                    <div class="position-relative chart-wrapper mx-auto mb-4" style="width: 150px; height: 150px;">
                        <svg viewBox="0 0 42 42" class="w-100 h-100 transform-rotate">
                            <circle cx="21" cy="21" r="15.915" fill="#fff"></circle>
                            <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#f0f2f5" stroke-width="4"></circle>
                            <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#00875A" stroke-width="4" stroke-dasharray="<?= $p_selesai ?> <?= 100 - $p_selesai ?>" stroke-dashoffset="100"></circle>
                            <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#EF6C00" stroke-width="4" stroke-dasharray="<?= $p_proses ?> <?= 100 - $p_proses ?>" stroke-dashoffset="<?= 100 - $p_selesai ?>"></circle>
                            <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#1E88E5" stroke-width="4" stroke-dasharray="<?= $p_ditemukan ?> <?= 100 - $p_ditemukan ?>" stroke-dashoffset="<?= 100 - $p_selesai - $p_proses ?>"></circle>
                            <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#C62828" stroke-width="4" stroke-dasharray="<?= $p_baru ?> <?= 100 - $p_baru ?>" stroke-dashoffset="<?= 100 - $p_selesai - $p_proses - $p_ditemukan ?>"></circle>
                        </svg>
                        <div class="position-absolute top-50 start-50 translate-middle text-center">
                            <span class="d-block fw-bold fs-4 text-dark"><?= $total_pmi ?></span>
                            <span class="text-muted extra-small">Total Permintaan</span>
                        </div>
                    </div>

                    <div class="d-flex flex-column gap-2.5 pt-2">
                        <div class="d-flex justify-content-between align-items-center small">
                            <div class="d-flex align-items-center gap-2"><span class="dot-indicator bg-success"></span><span class="text-secondary">Selesai</span></div>
                            <span class="fw-semibold text-dark"><?= $v_selesai ?> (<?= $p_selesai ?>%)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center small">
                            <div class="d-flex align-items-center gap-2"><span class="dot-indicator bg-warning"></span><span class="text-secondary">Diproses</span></div>
                            <span class="fw-semibold text-dark"><?= $v_proses ?> (<?= $p_proses ?>%)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center small">
                            <div class="d-flex align-items-center gap-2"><span class="dot-indicator bg-primary"></span><span class="text-secondary">Donor Ditemukan</span></div>
                            <span class="fw-semibold text-dark"><?= $v_ditemukan ?> (<?= $p_ditemukan ?>%)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center small">
                            <div class="d-flex align-items-center gap-2"><span class="dot-indicator bg-danger"></span><span class="text-secondary">Baru</span></div>
                            <span class="fw-semibold text-dark"><?= $v_baru ?> (<?= $p_baru ?>%)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center small">
                            <div class="d-flex align-items-center gap-2"><span class="dot-indicator bg-dark"></span><span class="text-secondary">Ditolak</span></div>
                            <span class="fw-semibold text-dark"><?= $v_ditolak ?> (<?= $p_ditolak ?>%)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>