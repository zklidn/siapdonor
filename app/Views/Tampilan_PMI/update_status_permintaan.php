<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('CSS_Tampilan_PMI/update_status_permintaan.css') ?>">

<aside class="sidebar sidebar-open" id="sidebar">
    <div class="menu-top">
        <a href="<?= base_url('pmi') ?>" class="menu-item">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
        <a href="<?= base_url('pmi/permintaan_masuk') ?>" class="menu-item">
            <i class="fa-solid fa-inbox"></i> Permintaan Masuk
        </a>
        <a href="<?= base_url('pmi/data_pendonor') ?>" class="menu-item">
            <i class="fa-solid fa-user-gear"></i> Cari Donor
        </a>
        <a href="<?= base_url('pmi/update_status_permintaan') ?>" class="menu-item menu-active">
            <i class="fa-solid fa-file-pen"></i> Update Status Permintaan 
        </a>
    </div>
</aside>

<div class="container-fluid py-2 bootstrap-wrapper">
    <div class="header-group-clean">
        <h1 class="page-title">Update Status Permintaan</h1>
        <p class="text-muted small mb-0">Dashboard / Permintaan Masuk / Update Status</p>
    </div>

    <form action="<?= base_url('pmi/simpan_status') ?>" method="post">
        <input type="hidden" name="id_permintaan" value="<?= $permintaan['id_permintaan'] ?? 'REQ-20250520-001' ?>">
        
        <div class="row g-3 mb-4">
            <div class="col-md-5">
                <div class="card card-detail h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="section-card-title mb-4">Informasi Permintaan</h5>
                        <div class="d-flex flex-column gap-3 info-list">
                            <div class="row">
                                <span class="col-5 text-muted small">ID Permintaan</span>
                                <span class="col-7 fw-semibold text-dark"><?= $permintaan['id_permintaan'] ?? 'REQ-20250520-001' ?></span>
                            </div>
                            <div class="row">
                                <span class="col-5 text-muted small">Rumah Sakit</span>
                                <span class="col-7 text-secondary fw-medium"><?= $permintaan['nama_rs'] ?? 'RSUD Undata Palu' ?></span>
                            </div>
                            <div class="row">
                                <span class="col-5 text-muted small">Pasien</span>
                                <span class="col-7 text-secondary fw-medium"><?= $permintaan['nama_pasien'] ?? 'Andi Saputra' ?></span>
                            </div>
                            <div class="row">
                                <span class="col-5 text-muted small">Golongan Darah</span>
                                <span class="col-7 fw-bold text-dark"><?= $permintaan['gol_darah'] ?? 'O+' ?></span>
                            </div>
                            <div class="row">
                                <span class="col-5 text-muted small">Jumlah Kantong</span>
                                <span class="col-7 text-secondary"><?= $permintaan['jumlah_kantong'] ?? '3 Kantong' ?></span>
                            </div>
                            <div class="row">
                                <span class="col-5 text-muted small">Prioritas</span>
                                <span class="col-7"><span class="badge bg-prio-urgent">URGENT (&lt; 2 jam)</span></span>
                            </div>
                            <div class="row">
                                <span class="col-5 text-muted small">Status Saat Ini</span>
                                <span class="col-7"><span class="badge bg-status-proses">Diproses</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="card card-detail h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="section-card-title mb-4">Ubah Status</h5>
                        
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-medium mb-1">Pilih Status Baru</label>
                            <select name="status" class="form-select custom-filter-input">
                                <option value="Diproses">Diproses</option>
                                <option value="Donor Ditemukan" selected>Donor Ditemukan</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Ditolak">Ditolak</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-muted small fw-medium mb-1">Catatan</label>
                            <textarea name="catatan" class="form-control custom-filter-input" rows="4" placeholder="Masukkan catatan update status di sini..."><?= $permintaan['catatan_pmi'] ?? 'Donor (Andi Saputra) telah bersedia donor darah. Jadwal pengambilan 21 Mei 2025, 08:00 di PMI Kota Palu.' ?></textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-muted small fw-medium mb-1">Tanggal Update</label>
                            <div class="input-group search-box">
                                <input type="text" name="tanggal_update" class="form-control custom-filter-input" value="<?= date('d/m/Y H:i') ?>" readonly>
                                <span class="input-group-text bg-white border-start-0 text-muted"><i class="fa-regular fa-calendar"></i></span>
                            </div>
                        </div>

                        <div class="d-flex gap-2 justify-content-end">
                            <a href="<?= base_url('pmi/permintaan_masuk') ?>" class="btn btn-reset-outline px-4 py-2 fw-semibold">Batal</a>
                            <button type="submit" class="btn btn-search-maroon px-4 py-2 fw-semibold">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="card card-detail border-0 shadow-sm mb-4">
        <div class="card-body p-4">
            <h5 class="section-card-title mb-4">Riwayat Status</h5>
            <div class="timeline-wrapper">
                <?php if (!empty($riwayat_status) && is_array($riwayat_status)): ?>
                    <?php foreach ($riwayat_status as $index => $status): ?>
                    <div class="timeline-item <?= ($index === count($riwayat_status) - 1) ? 'content-last' : '' ?>">
                        <div class="timeline-badge <?= ($status['status'] == 'Baru') ? 'border-danger text-danger' : 'border-primary text-primary' ?>">
                            <i class="fa-solid <?= ($status['status'] == 'Baru') ? 'fa-circle-dot' : 'fa-circle' ?> fs-6"></i>
                        </div>
                        <div class="timeline-content">
                            <div class="small text-muted fw-medium"><?= date('d Mei Y, H:i', strtotime($status['created_at'])) ?></div>
                            <div class="text-dark fw-medium mt-0.5"><?= esc($status['keterangan']) ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="timeline-item">
                        <div class="timeline-badge border-danger text-danger"><i class="fa-solid fa-circle-dot fs-6"></i></div>
                        <div class="timeline-content">
                            <div class="small text-muted fw-medium">20 Mei 2025, 09:15</div>
                            <div class="text-dark fw-medium mt-0.5">Permintaan baru dibuat oleh RS</div>
                        </div>
                    </div>
                    <div class="timeline-item content-last">
                        <div class="timeline-badge border-primary text-primary"><i class="fa-solid fa-circle-dot fs-6"></i></div>
                        <div class="timeline-content">
                            <div class="small text-muted fw-medium">20 Mei 2025, 14:30</div>
                            <div class="text-dark fw-medium mt-0.5">Sedang mencari donor yang sesuai</div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const toggleBtn = document.querySelector('.fa-bars') || document.querySelector('.navbar-toggler');
    const sidebar = document.getElementById('sidebar');
    if(toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', function(e) {
            e.preventDefault();
            sidebar.classList.toggle('sidebar-open');
        });
    }
});
</script>

<?= $this->endSection() ?>