<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('CSS_Tampilan_PMI/cari_donor.css') ?>">

<aside class="sidebar">
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
        <a href="<?= base_url('pmi/tambah_donor') ?>" class="menu-item">
            <i class="fa-solid fa-user-plus"></i> Tambah Pendonor 
        </a>
    </div>
</aside>

<main class="content-area bootstrap-wrapper">
    <div class="header-group-clean">
        <h1 class="page-title">Cari Donor</h1>
    </div>

    <form action="<?= base_url('pmi/cari_donor') ?>" method="get" class="mb-4">
        
        <!-- SIMPAN ID PERMINTAAN AGAR TIDAK HILANG SAAT TOMBOL CARI DITEKAN -->
        <?php if(request()->getGet('id_permintaan')): ?>
            <input type="hidden" name="id_permintaan" value="<?= esc(request()->getGet('id_permintaan')) ?>">
        <?php endif; ?>

        <!-- Tambahkan align-items-end agar tinggi tombol sejajar dengan input box, bukan dengan label -->
        <div class="row g-3 align-items-end mb-3">
            
            <div class="col-md-3">
                <label class="form-label text-muted small fw-medium mb-1">Golongan Darah</label>
                <select name="gol_darah" class="form-select custom-filter-input">
                    <option value="">-- Pilih Gol Darah --</option>
                    <option value="O" <?= (($sel_gol_darah ?? '') == 'O') ? 'selected' : '' ?>>O</option>
                    <option value="A" <?= (($sel_gol_darah ?? '') == 'A') ? 'selected' : '' ?>>A</option>
                    <option value="B" <?= (($sel_gol_darah ?? '') == 'B') ? 'selected' : '' ?>>B</option>
                    <option value="AB" <?= (($sel_gol_darah ?? '') == 'AB') ? 'selected' : '' ?>>AB</option>
                </select>
            </div>
            
            <div class="col-md-3">
                <label class="form-label text-muted small fw-medium mb-1">Rhesus</label>
                <select name="rhesus" class="form-select custom-filter-input">
                    <option value="">-- Pilih Rhesus --</option>
                    <option value="+" <?= (($sel_rhesus ?? '') == '+') ? 'selected' : '' ?>>Positif (+)</option>
                    <option value="-" <?= (($sel_rhesus ?? '') == '-') ? 'selected' : '' ?>>Negatif (-)</option>
                </select>
            </div>
            
            <div class="col-md-3">
                <label class="form-label text-muted small fw-medium mb-1">Terakhir Donor</label>
                <select name="terakhir_donor" class="form-select custom-filter-input">
                    <option value="Semua" <?= (request()->getGet('terakhir_donor') == 'Semua') ? 'selected' : '' ?>>Semua</option>
                    <option value="Layak" <?= (request()->getGet('terakhir_donor') == 'Layak') ? 'selected' : '' ?>>> 3 Bulan Lalu (Layak)</option>
                </select>
            </div>

            <!-- Tombol ditaruh di col-md-3 terakhir dan disetting justify-content-end agar ke kanan -->
            <div class="col-md-3 d-flex gap-2 justify-content-end">
                <button type="submit" class="btn btn-search-maroon px-4 py-2 fw-semibold w-100">Cari</button>
                <a href="<?= base_url('pmi/cari_donor') ?>" class="btn btn-reset-outline px-4 py-2 fw-semibold w-100">Reset</a>
            </div>
            
        </div>
    </form>

    <div class="card card-content border-0 shadow-sm mb-4">
        <div class="card-body p-4">
            <h5 class="fw-bold mb-4 text-dark fs-6">Hasil Pencarian Donor</h5>
            
            <?php 
            $is_searching = !empty($hasil_pencarian);
            
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
                                <td class="fw-semibold text-dark"><?= esc($row['nama']) ?></td>
                                <td class="fw-bold text-dark"><?= esc($row['golongan_darah']) ?></td>
                                <td class="text-center fw-medium"><?= esc($row['rhesus']) ?></td>
                                <td class="text-secondary"><?= esc($row['kecamatan']) ?></td>
                                <td class="text-muted"><?= date('d M Y', strtotime($row['created_at'])) ?></td>
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
                    <nav aria-label="Page navigation" class="custom-pagination">
                        <style>
                            /* Memaksa pagination default CI4 menjadi kotak-kotak rapi dengan warna Maroon */
                            .custom-pagination .pagination {
                                display: flex;
                                padding-left: 0;
                                list-style: none;
                                margin: 0;
                                gap: 4px;
                            }
                            .custom-pagination .pagination li a {
                                position: relative;
                                display: block;
                                padding: 0.4rem 0.75rem;
                                font-size: 0.875rem;
                                color: #800000; /* Warna teks maroon */
                                text-decoration: none;
                                background-color: #fff;
                                border: 1px solid #dee2e6;
                                border-radius: 6px;
                                font-weight: 500;
                                transition: all 0.2s ease-in-out;
                            }
                            .custom-pagination .pagination li a:hover {
                                color: #fff;
                                background-color: #a00000;
                                border-color: #a00000;
                            }
                            .custom-pagination .pagination li.active a {
                                z-index: 3;
                                color: #fff;
                                background-color: #800000; /* Warna background aktif maroon */
                                border-color: #800000;
                            }
                        </style>
                        
                        <?= $pager->links('default', 'default_full') ?>
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
</main>

<?= $this->endSection() ?>