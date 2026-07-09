<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('CSS_Tampilan_RS/riwayat_permintaan.css') ?>">

<div class="container-fluid py-2 bootstrap-wrapper">
    <div class="header-group">
        <h1 class="page-title">Riwayat Permintaan</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb-nav">
                <li class="breadcrumb-nav-item"><a href="<?= base_url('rs') ?>">Dashboard</a></li>
                <li class="breadcrumb-nav-separator">/</li>
                <li class="breadcrumb-nav-item active">Riwayat Permintaan</li>
            </ol>
        </nav>
    </div>
    <div class="row g-3 mb-4">
        <div class="col-md-5">
            <div class="input-group search-box">
                <span class="input-group-text bg-white border-end-0 text-muted"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="form-control border-start-0 ps-0 custom-filter-input" placeholder="Cari ID permintaan, nama pasien...">
            </div>
        </div>
        <div class="col-md-3">
            <select class="form-select custom-filter-input">
                <option selected>Semua Status</option>
                <option value="Diproses">Diproses</option>
                <option value="Donor Ditemukan">Donor Ditemukan</option>
                <option value="Selesai">Selesai</option>
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-select custom-filter-input">
                <option selected>Semua Prioritas</option>
                <option value="Urgent">Urgent</option>
                <option value="Tinggi">Tinggi</option>
                <option value="Normal">Normal</option>
                <option value="Rendah">Rendah</option>
            </select>
        </div>
    </div>
    <div class="card card-table border-0 shadow-sm mb-4">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table align-middle custom-table mb-0">
                    <thead>
                        <tr>
                            <th>ID Permintaan</th>
                            <th>Tanggal</th>
                            <th>Pasien</th>
                            <th>Gol. Darah</th>
                            <th class="text-center">Kantong</th>
                            <th>Prioritas</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        // Jika data dari backend belum siap, sistem otomatis menampilkan data dummy biar view tidak error saat kamu kerjakan
                        $list_riwayat = isset($riwayat_darah_all) ? $riwayat_darah_all : [
                            ['id' => 'REQ-20250520-001', 'tanggal' => '20 Mei 2025', 'pasien' => 'Andi Saputra', 'gol' => 'O+', 'kantong' => 3, 'prio' => 'URGENT', 'status' => 'Diproses'],
                            ['id' => 'REQ-20250519-002', 'tanggal' => '19 Mei 2025', 'pasien' => 'Siti Nurhaliza', 'gol' => 'A+', 'kantong' => 2, 'prio' => 'TINGGI', 'status' => 'Diproses'],
                            ['id' => 'REQ-20250518-003', 'tanggal' => '18 Mei 2025', 'pasien' => 'Muh. Rizki', 'gol' => 'B+', 'kantong' => 4, 'prio' => 'NORMAL', 'status' => 'Donor Ditemukan'],
                            ['id' => 'REQ-20250517-004', 'tanggal' => '17 Mei 2025', 'pasien' => 'Fadilah Aulia', 'gol' => 'AB+', 'kantong' => 2, 'prio' => 'NORMAL', 'status' => 'Donor Ditemukan'],
                            ['id' => 'REQ-20250516-005', 'tanggal' => '16 Mei 2025', 'pasien' => 'Rudi Hartono', 'gol' => 'O-', 'kantong' => 1, 'prio' => 'RENDAH', 'status' => 'Selesai'],
                            ['id' => 'REQ-20250515-006', 'tanggal' => '15 Mei 2025', 'pasien' => 'Dewi Lestari', 'gol' => 'A-', 'kantong' => 2, 'prio' => 'TINGGI', 'status' => 'Selesai']
                        ];
                        
                        foreach ($list_riwayat as $row): ?>
                        <tr>
                            <td class="fw-medium text-dark"><?= $row['id'] ?></td>
                            <td class="text-muted"><?= $row['tanggal'] ?></td>
                            <td class="text-secondary fw-medium"><?= $row['pasien'] ?></td>
                            <td class="fw-bold text-dark"><?= $row['gol'] ?></td>
                            <td class="text-center"><?= $row['kantong'] ?></td>
                            
                            <td>
                                <?php if ($row['prio'] == 'URGENT'): ?>
                                    <span class="badge badge-priority bg-prio-urgent">URGENT</span>
                                <?php elseif ($row['prio'] == 'TINGGI'): ?>
                                    <span class="badge badge-priority bg-prio-tinggi">TINGGI</span>
                                <?php elseif ($row['prio'] == 'NORMAL'): ?>
                                    <span class="badge badge-priority bg-prio-normal">NORMAL</span>
                                <?php else: ?>
                                    <span class="badge badge-priority bg-prio-rendah">RENDAH</span>
                                <?php endif; ?>
                            </td>
                            
                            <td>
                                <?php if ($row['status'] == 'Diproses'): ?>
                                    <span class="badge badge-status bg-status-proses">Diproses</span>
                                <?php elseif ($row['status'] == 'Donor Ditemukan'): ?>
                                    <span class="badge badge-status bg-status-ditemukan">Donor Ditemukan</span>
                                <?php else: ?>
                                    <span class="badge badge-status bg-status-selesai">Selesai</span>
                                <?php endif; ?>
                            </td>
                            
                            <td class="text-center">
                                <a href="<?= base_url('rs/detail_permintaan/' . $row['id']) ?>" class="btn btn-outline-detail px-3 py-1">Detail</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-4 text-muted small">
                <div>Menampilkan 1 - 6 dari <span class="fw-bold text-dark">24</span> data</div>
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm mb-0 gap-1">
                        <li class="page-item"><a class="page-link border rounded text-secondary" href="#"><i class="fa-solid fa-chevron-left extra-small-arrow"></i></a></li>
                        <li class="page-item active"><a class="page-link border rounded" href="#">1</a></li>
                        <li class="page-item"><a class="page-link border rounded text-secondary" href="#">2</a></li>
                        <li class="page-item disabled"><span class="page-link border-0 text-muted">...</span></li>
                        <li class="page-item"><a class="page-link border rounded text-secondary" href="#"><i class="fa-solid fa-chevron-right extra-small-arrow"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

</main>
<?= $this->endSection() ?>
