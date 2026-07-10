<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('CSS_Tampilan_PMI/cari_donor.css') ?>">

<aside class="sidebar" id="sidebar">
    <div class="menu-top">
        <a href="<?= base_url('pmi') ?>" class="menu-item">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
        <a href="<?= base_url('pmi/permintaan_masuk') ?>" class="menu-item">
            <i class="fa-solid fa-inbox"></i> Permintaan Masuk
        </a>
        <a href="<?= base_url('pmi/cari_donor') ?>" class="menu-item menu-active">
            <i class="fa-solid fa-user-gear"></i> Cari Donor
        </a>
        <a href="<?= base_url('pmi/tambah_pendonor') ?>" class="menu-item">
            <i class="fa-solid fa-user-plus"></i> Tambah Pendonor 
        </a>
        <a href="<?= base_url('pmi/update_status_permintaan') ?>" class="menu-item">
            <i class="fa-solid fa-file-pen"></i> Update Status Permintaan 
        </a>
    </div>
</aside>

<div class="container-fluid py-2 bootstrap-wrapper">
    <div class="header-group-clean">
        <h1 class="page-title">Cari Donor</h1>
        <p class="text-muted small mb-0">Dashboard / Cari Donor</p>
    </div>

    <form action="<?= base_url('pmi/cari_donor') ?>" method="get" class="mb-4">
        <div class="row g-3 mb-3">
            <div class="col-md-4">
                <label class="form-label text-muted small fw-medium mb-1">Golongan Darah</label>
                <select name="gol_darah" class="form-select custom-filter-input">
                    <option value="">-- Pilih Golongan Darah --</option>
                    <option value="O" <?= (request()->getGet('gol_darah') == 'O') ? 'selected' : '' ?>>O</option>
                    <option value="A" <?= (request()->getGet('gol_darah') == 'A') ? 'selected' : '' ?>>A</option>
                    <option value="B" <?= (request()->getGet('gol_darah') == 'B') ? 'selected' : '' ?>>B</option>
                    <option value="AB" <?= (request()->getGet('gol_darah') == 'AB') ? 'selected' : '' ?>>AB</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label text-muted small fw-medium mb-1">Rhesus</label>
                <select name="rhesus" class="form-select custom-filter-input">
                    <option value="">-- Pilih Rhesus --</option>
                    <option value="Positif" <?= (request()->getGet('rhesus') == 'Positif') ? 'selected' : '' ?>>Positif (+)</option>
                    <option value="Negatif" <?= (request()->getGet('rhesus') == 'Negatif') ? 'selected' : '' ?>>Negatif (-)</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label text-muted small fw-medium mb-1">Wilayah</label>
                <select name="wilayah" class="form-select custom-filter-input">
                    <option value="">-- Pilih Wilayah --</option>
                    <?php if(!empty($wilayah_list) && is_array($wilayah_list)): ?>
                    <?php foreach($wilayah_list as $w): ?>
                    <option value="<?= esc($w['wilayah']) ?>" <?= (request()->getGet('wilayah') == $w['wilayah']) ? 'selected' : '' ?>>
                    <?= esc($w['wilayah']) ?>
                    </option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            </div>
        </div>

        <div class="row g-3 align-items-end">
            <div class="col-md-4">
                <label class="form-label text-muted small fw-medium mb-1">Usia</label>
                <div class="d-flex align-items-center gap-2">
                    <input type="number" name="usia_min" class="form-control custom-filter-input text-center" value="<?= request()->getGet('usia_min') ?? '17' ?>" style="width: 80px;">
                    <span class="text-muted small">s.d</span>
                    <input type="number" name="usia_max" class="form-control custom-filter-input text-center" value="<?= request()->getGet('usia_max') ?? '60' ?>" style="width: 100px;">
                    <span class="text-muted small">tahun</span>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label text-muted small fw-medium mb-1">Terakhir Donor</label>
                <select name="terakhir_donor" class="form-select custom-filter-input">
                    <option value="Semua" <?= (request()->getGet('terakhir_donor') == 'Semua') ? 'selected' : '' ?>>Semua</option>
                    <option value="Layak" <?= (request()->getGet('terakhir_donor') == 'Layak') ? 'selected' : '' ?>>> 3 Bulan Lalu (Layak)</option>
                </select>
            </div>
            <div class="col-md-4 d-flex gap-2 justify-content-end mt-3 mt-md-0">
                <button type="submit" class="btn btn-search-maroon px-4 py-2 fw-semibold">Cari</button>
                <a href="<?= base_url('pmi/cari_donor') ?>" class="btn btn-reset-outline px-4 py-2 fw-semibold">Reset</a>
            </div>
        </div>
    </form>

    <div class="card card-content border-0 shadow-sm mb-4">
        <div class="card-body p-4">
            <h5 class="fw-bold mb-4 text-dark fs-6">Hasil Pencarian Donor</h5>
            
            <?php 
            $is_searching = request()->getGet('gol_darah') !== null || request()->getGet('wilayah') !== null;
            
            if ($is_searching && !empty($hasil_pencarian) && is_array($hasil_pencarian)): ?>
                <div class="table-responsive">
                    <table class="table align-middle custom-table mb-0">
                        <thead>
                            <tr>
                                <th style="width: 60px;">No</th>
                                <th>Nama Donor</th>
                                <th>Gol. Darah</th>
                                <th class="text-center">Rhesus</th>
                                <th>Wilayah</th>
                                <th>Terakhir Donor</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = isset($pager) ? ($pager->getCurrentPage() - 1) * $pager->getPerPage() + 1 : 1;
                            foreach ($hasil_pencarian as $row): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td class="fw-semibold text-dark"><?= esc($row['nama_donor']) ?></td>
                                <td class="fw-bold text-dark"><?= esc($row['gol_darah']) ?></td>
                                <td class="text-center fw-medium"><?= $row['rhesus'] == 'Positif' ? '+' : '-' ?></td>
                                <td class="text-secondary"><?= esc($row['wilayah']) ?></td>
                                <td class="text-muted"><?= date('d Mei Y', strtotime($row['terakhir_donor'])) ?></td>
                                <td><span class="badge badge-status bg-status-selesai"><?= esc($row['status'] ?? 'Tersedia') ?></span></td>
                                <td class="text-center">
                                    <a href="<?= base_url('pmi/detail_donor/' . $row['id_donor']) ?>" class="btn btn-outline-detail px-3 py-1">Detail</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-4 text-muted small">
                    <div>Menampilkan data hasil filter pencarian</div>
                    <nav aria-label="Page navigation">
                        <?= $pager->links('default', 'bootstrap_pagination') ?>
                    </nav>
                </div>

            <?php else: ?>
                <div class="alert alert-light border border-dashed text-center py-5 my-2" role="alert">
                    <i class="fa-solid fa-folder-open text-muted fs-2 mb-3 d-block"></i>
                    <span class="text-secondary fw-medium">Hasil pencarian tidak ditemukan. Silakan gunakan filter di atas.</span>
                </div>
            <?php endif; ?>
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