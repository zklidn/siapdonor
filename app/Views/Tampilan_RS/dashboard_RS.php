<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('CSS_Tampilan_RS/dashboard_rs.css') ?>">

<aside class="sidebar" id="sidebar">
    <div class="menu-top">
        <a href="<?= base_url('rs') ?>" class="menu-item menu-active">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
        <a href="<?= base_url('rs/permintaan_darah') ?>" class="menu-item">
            <i class="fa-solid fa-droplet"></i> Permintaan Darah
        </a>
        <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="menu-item">
            <i class="fa-solid fa-file-invoice"></i> Riwayat Permintaan
        </a>
    </div>
</aside>

<main class="content-area bootstrap-wrapper">
    <div class="header-group-clean mb-4">
        <h1 class="page-title">Dashboard</h1>
        <p class="text-muted small mb-0">Selamat datang, <?= session()->get('nama') ?? 'RSUD Anutapura Palu' ?>!</p>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card card-stat h-100">
                <div class="card-body">
                    <h6 class="text-muted fw-normal small mb-2">Total Permintaan</h6>
                    <h2 class="display-6 fw-bold mb-1 text-dark"><?= $total_permintaan ?? 0 ?></h2>
                    <small class="text-muted">Semua Waktu</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-stat h-100">
                <div class="card-body">
                    <h6 class="text-muted fw-normal small mb-2">Diproses PMI</h6>
                    <h2 class="display-6 fw-bold mb-1 text-dark"><?= $total_proses ?? 0 ?></h2>
                    <small class="text-muted">Sedang diproses</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-stat h-100">
                <div class="card-body">
                    <h6 class="text-muted fw-normal small mb-2">Donor Ditemukan</h6>
                    <h2 class="display-6 fw-bold mb-1 text-dark"><?= $total_ditemukan ?? 0 ?></h2>
                    <small class="text-muted">Oleh PMI</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-stat h-100">
                <div class="card-body">
                    <h6 class="text-muted fw-normal small mb-2">Selesai</h6>
                    <h2 class="display-6 fw-bold mb-1 text-dark"><?= $total_selesai ?? 0 ?></h2>
                    <small class="text-muted">Permintaan selesai</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8 d-flex flex-column gap-4">
            <div class="card card-content">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3 text-dark fs-6">Permintaan Terbaru</h5>
                    <div class="table-responsive">
                        <table class="table align-middle custom-table mb-0">
                            <thead>
                                <tr>
                                    <th>ID Permintaan</th>
                                    <th>Tanggal</th>
                                    <th>Pasien</th>
                                    <th>Gol. Darah</th>
                                    <th>Kantong</th>
                                    <th>Status</th>
                                    <th>Prioritas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($permintaan_terbaru) && is_array($permintaan_terbaru)): ?>
                                    <?php foreach ($permintaan_terbaru as $row): ?>
                                    <tr>
                                        <td><?= $row['id_permintaan'] ?></td>
                                        <td class="text-muted"><?= date('d M Y, H:i', strtotime($row['created_at'])) ?></td>
                                        <td class="fw-medium text-dark"><?= $row['nama_pasien'] ?></td>
                                        <td><span class="text-danger fw-bold"><?= $row['golongan_darah'] . $row['rhesus'] ?></span></td>
                                        <td><?= $row['jumlah_kantong'] ?></td>
                                        <td>
                                            <?php if ($row['status'] == 'Diproses'): ?>
                                                <span class="badge badge-status bg-proses">Diproses</span>
                                            <?php elseif ($row['status'] == 'Donor Ditemukan'): ?>
                                                <span class="badge badge-status bg-ditemukan">Donor Ditemukan</span>
                                            <?php else: ?>
                                                <span class="badge badge-status bg-selesai">Selesai</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php 
                                            $prio = strtolower($row['prioritas'] ?? '');
                                            if ($prio == 'urgent'): ?>
                                                <span class="badge badge-priority bg-prio-urgent">URGENT</span>
                                            <?php elseif ($prio == 'tinggi'): ?>
                                                <span class="badge badge-priority bg-prio-tinggi">TINGGI</span>
                                            <?php elseif ($prio == 'normal'): ?>
                                                <span class="badge badge-priority bg-prio-normal">NORMAL</span>
                                            <?php else: ?>
                                                <span class="badge badge-priority bg-prio-rendah">RENDAH</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="7" class="text-center text-muted py-3">Tidak ada permintaan terbaru.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card card-content">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold text-dark fs-6 mb-0">Kebutuhan Darah Mendesak</h5>
                        <a href="<?= base_url('rs/permintaan_darah') ?>" class="text-decoration-none text-danger fw-semibold small link-maroon">Lihat Semua</a>
                    </div>
                    <div class="row row-cols-5 g-3 text-center">
                        <?php 
                        $mendesak = $kebutuhan_mendesak ?? ['O+' => 0, 'A+' => 0, 'B+' => 0, 'AB+' => 0, 'O-' => 0];
                        foreach ($mendesak as $gol => $kantong): 
                        ?>
                        <div class="col">
                            <div class="p-3 rounded bg-light border-0 item-mendesak position-relative">
                                <i class="fa-solid fa-droplet text-danger fs-3 d-block mb-2"></i>
                                <span class="blood-text"><?= $gol ?></span>
                                <p class="small fw-medium mb-0 mt-2 text-dark"><?= $kantong ?> Kantong</p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 d-flex flex-column gap-4">
            <div class="card card-content">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-4 text-dark fs-6">Ringkasan Status</h5>
                    <div class="position-relative chart-wrapper mx-auto mb-4" style="width: 140px; height: 140px;">
                        <svg viewBox="0 0 42 42" class="w-100 h-100 transform-rotate">
                            <circle cx="21" cy="21" r="15.915" fill="#fff"></circle>
                            <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#f0f2f5" stroke-width="4.5"></circle>
                            
                            <?php
                            $total = $total_permintaan ?? 0;
                            $p_proses = $total > 0 ? round(($total_proses / $total) * 100) : 0;
                            $p_ditemukan = $total > 0 ? round(($total_ditemukan / $total) * 100) : 0;
                            $p_selesai = $total > 0 ? round(($total_selesai / $total) * 100) : 0;
                            
                            $offset_proses = 100;
                            $offset_ditemukan = 100 - $p_proses;
                            $offset_selesai = $offset_ditemukan - $p_ditemukan;
                            ?>
                            
                            <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#2196F3" stroke-width="4.5" stroke-dasharray="<?= $p_proses ?> <?= 100 - $p_proses ?>" stroke-dashoffset="<?= $offset_proses ?>"></circle>
                            <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#4CAF50" stroke-width="4.5" stroke-dasharray="<?= $p_ditemukan ?> <?= 100 - $p_ditemukan ?>" stroke-dashoffset="<?= $offset_ditemukan ?>"></circle>
                            <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#00875A" stroke-width="4.5" stroke-dasharray="<?= $p_selesai ?> <?= 100 - $p_selesai ?>" stroke-dashoffset="<?= $offset_selesai ?>"></circle>
                        </svg>
                        
                        <!-- Ini bagian yang rusak tadi, sekarang sudah normal -->
                        <div class="position-absolute top-50 start-50 translate-middle text-center">
                            <span class="d-block fw-bold fs-4 lh-sm text-dark"><?= $total ?></span>
                            <span class="text-muted extra-small">Total</span>
                        </div>
                    </div>

                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex justify-content-between align-items-center small">
                            <div class="d-flex align-items-center gap-2">
                                <span class="dot-indicator bg-primary"></span>
                                <span class="text-muted">Diproses</span>
                            </div>
                            <span class="fw-medium text-dark"><?= $total_proses ?? 0 ?> (<?= $p_proses ?>%)</span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center small">
                            <div class="d-flex align-items-center gap-2">
                                <span class="dot-indicator bg-success"></span>
                                <span class="text-muted">Donor Ditemukan</span>
                            </div>
                            <span class="fw-medium text-dark"><?= $total_ditemukan ?? 0 ?> (<?= $p_ditemukan ?>%)</span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center small">
                            <div class="d-flex align-items-center gap-2">
                                <span class="dot-indicator bg-emerald"></span>
                                <span class="text-muted">Selesai</span>
                            </div>
                            <span class="fw-medium text-dark"><?= $total_selesai ?? 0 ?> (<?= $p_selesai ?>%)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-content bg-white">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-2 text-dark fs-6">Informasi</h5>
                    <p class="text-muted small mb-0 lh-base">Permintaan darah yang dikirim akan langsung diterima oleh PMI untuk diproses.</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>