<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('CSS_Tampilan_PMI/cari_donor.css') ?>">

<aside class="sidebar sidebar-open" id="sidebar">
    <div class="menu-top">
        <a href="<?= base_url('pmi') ?>" class="menu-item">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
        <a href="<?= base_url('pmi/permintaan_darah') ?>" class="menu-item">
            <i class="fa-solid fa-inbox"></i> Permintaan Masuk
        </a>
        <a href="<?= base_url('pmi/data_pendonor') ?>" class="menu-item menu-active">
            <i class="fa-solid fa-user-gear"></i> Cari Donor
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
            <div class="col-md-3">
                <label class="form-label text-muted small fw-medium mb-1">Golongan Darah</label>
                <select name="gol_darah" class="form-select custom-filter-input">
                    <option value="O+" selected>O+</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="O-">O-</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label text-muted small fw-medium mb-1">Rhesus</label>
                <select name="rhesus" class="form-select custom-filter-input">
                    <option value="Positif" selected>Positif</option>
                    <option value="Negatif">Negatif</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label text-muted small fw-medium mb-1">Kota / Area</label>
                <select name="kota" class="form-select custom-filter-input">
                    <option value="Kota Palu" selected>Kota Palu</option>
                    <option value="Sigi">Sigi</option>
                    <option value="Donggala">Donggala</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label text-muted small fw-medium mb-1">Jarak Maksimal</label>
                <select name="jarak" class="form-select custom-filter-input">
                    <option value="20" selected>20 km</option>
                    <option value="10">10 km</option>
                    <option value="5">5 km</option>
                </select>
            </div>
        </div>

        <div class="row g-3 align-items-end">
            <div class="col-md-4">
                <label class="form-label text-muted small fw-medium mb-1">Usia</label>
                <div class="d-flex align-items-center gap-2">
                    <input type="number" name="usia_min" class="form-control custom-filter-input text-center" value="17" style="width: 80px;">
                    <span class="text-muted small">s.d</span>
                    <input type="number" name="usia_max" class="form-control custom-filter-input text-center" value="60" style="width: 100px;">
                    <span class="text-muted small">tahun</span>
                </div>
            </div>
            <div class="col-md-3">
                <label class="form-label text-muted small fw-medium mb-1">Terakhir Donor</label>
                <select name="terakhir_donor" class="form-select custom-filter-input">
                    <option value="Semua" selected>Semua</option>
                    <option value=">3 Bulan">> 3 Bulan Lalu</option>
                </select>
            </div>
            <div class="col-md-5 d-flex gap-2 justify-content-md-end mt-3 mt-md-0">
                <button type="submit" class="btn btn-search-maroon px-4 py-2 fw-semibold">Cari</button>
                <a href="<?= base_url('pmi/cari_donor') ?>" class="btn btn-reset-outline px-4 py-2 fw-semibold">Reset</a>
            </div>
        </div>
    </form>

    <div class="card card-content border-0 shadow-sm mb-4">
        <div class="card-body p-4">
            <h5 class="fw-bold mb-4 text-dark fs-6">Hasil Pencarian Donor</h5>
            <div class="table-responsive">
                <table class="table align-middle custom-table mb-0">
                    <thead>
                        <tr>
                            <th style="width: 60px;">No</th>
                            <th>Nama Donor</th>
                            <th>Gol. Darah</th>
                            <th class="text-center">Rhesus</th>
                            <th>Kota</th>
                            <th>Terakhir Donor</th>
                            <th>Jarak</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($hasil_pencarian) && is_array($hasil_pencarian)): ?>
                            <?php $no = 1; foreach ($hasil_pencarian as $row): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td class="fw-semibold text-dark"><?= $row['nama_donor'] ?></td>
                                <td class="fw-bold text-dark"><?= $row['gol_darah'] ?></td>
                                <td class="text-center fw-medium"><?= $row['rhesus'] == 'Positif' ? '+' : '-' ?></td>
                                <td class="text-secondary"><?= $row['kota'] ?></td>
                                <td class="text-muted"><?= date('d M Y', strtotime($row['terakhir_donor'])) ?></td>
                                <td class="text-dark fw-medium"><?= $row['jarak'] ?> km</td>
                                <td>
                                    <span class="badge badge-status bg-status-selesai">
                                        <?= $row['status'] ?? 'Tersedia' ?>
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('pmi/detail_donor/' . $row['id_donor']) ?>" class="btn btn-outline-detail px-3 py-1">Detail</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <?php 
                            $dummy_donor = [
                                ['no' => 1, 'nama' => 'Andi Saputra', 'gol' => 'O+', 'rhs' => '+', 'kota' => 'Palu', 'tgl' => '15 Mei 2025', 'jrk' => '2.1 km'],
                                ['no' => 2, 'nama' => 'Siti Nurhaliza', 'gol' => 'O+', 'rhs' => '+', 'kota' => 'Palu', 'tgl' => '10 Apr 2025', 'jrk' => '3.4 km'],
                                ['no' => 3, 'nama' => 'Muh. Rizki', 'gol' => 'O+', 'rhs' => '+', 'kota' => 'Palu', 'tgl' => '30 Apr 2025', 'jrk' => '4.2 km'],
                                ['no' => 4, 'nama' => 'Fadli Rahman', 'gol' => 'O+', 'rhs' => '+', 'kota' => 'Palu', 'tgl' => '05 Mei 2025', 'jrk' => '5.7 km'],
                                ['no' => 5, 'nama' => 'Rina Lestari', 'gol' => 'O+', 'rhs' => '+', 'kota' => 'Palu', 'tgl' => '22 Mar 2025', 'jrk' => '6.3 km']
                            ];
                            foreach ($dummy_donor as $d): ?>
                            <tr>
                                <td><?= $d['no'] ?></td>
                                <td class="fw-semibold text-dark"><?= $d['nama'] ?></td>
                                <td class="fw-bold text-dark"><?= $d['gol'] ?></td>
                                <td class="text-center fw-medium"><?= $d['rhs'] ?></td>
                                <td class="text-secondary"><?= $d['kota'] ?></td>
                                <td class="text-muted"><?= $d['tgl'] ?></td>
                                <td class="text-dark fw-medium"><?= $d['jrk'] ?></td>
                                <td><span class="badge badge-status bg-status-selesai">Tersedia</span></td>
                                <td class="text-center"><a href="<?= base_url('pmi/detail_donor/' . $d['no']) ?>" class="btn btn-outline-detail px-3 py-1">Detail</a></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-4 text-muted small">
                <div>Menampilkan 1 - 5 dari <span class="fw-bold text-dark">24</span> data</div>
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm mb-0 gap-1">
                        <li class="page-item"><a class="page-link border rounded text-secondary" href="#"><i class="fa-solid fa-chevron-left extra-small-arrow"></i></a></li>
                        <li class="page-item active"><a class="page-link border rounded" href="#">1</a></li>
                        <li class="page-item"><a class="page-link border rounded text-secondary" href="#">2</a></li>
                        <li class="page-item"><a class="page-link border rounded text-secondary" href="#">3</a></li>
                        <li class="page-item"><a class="page-link border rounded text-secondary" href="#">4</a></li>
                        <li class="page-item"><a class="page-link border rounded text-secondary" href="#">5</a></li>
                        <li class="page-item"><a class="page-link border rounded text-secondary" href="#"><i class="fa-solid fa-chevron-right extra-small-arrow"></i></a></li>
                    </ul>
                </nav>
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