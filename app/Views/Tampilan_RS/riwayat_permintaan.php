<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('CSS_Tampilan_RS/riwayat_permintaan.css') ?>">

<aside class="sidebar sidebar-open" id="sidebar">
    <div class="menu-top">
        <a href="<?= base_url('rs') ?>" class="menu-item">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
        <a href="<?= base_url('rs/permintaan_darah') ?>" class="menu-item">
            <i class="fa-solid fa-droplet"></i> Permintaan Darah
        </a>
        <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="menu-item menu-active">
            <i class="fa-solid fa-file-invoice"></i> Riwayat Permintaan
        </a>
    </div>
</aside>

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
                        <?php if (!empty($riwayat_permintaan) && is_array($riwayat_permintaan)): ?>
                            <?php foreach ($riwayat_permintaan as $row): ?>
                            <tr>
                                <td class="fw-medium text-dark"><?= $row['id_permintaan'] ?></td>
                                <td class="text-muted"><?= date('d M Y', strtotime($row['tanggal'])) ?></td>
                                <td class="text-secondary fw-medium"><?= $row['nama_pasien'] ?></td>
                                <td class="fw-bold text-dark"><?= $row['gol_darah'] . $row['rhesus'] ?></td>
                                <td class="text-center"><?= $row['jumlah_kantong'] ?></td>
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
                                <td>
                                    <?php 
                                    $stt = $row['status'] ?? '';
                                    if ($stt == 'Diproses'): ?>
                                        <span class="badge badge-status bg-status-proses">Diproses</span>
                                    <?php elseif ($stt == 'Donor Ditemukan'): ?>
                                        <span class="badge badge-status bg-status-ditemukan">Donor Ditemukan</span>
                                    <?php else: ?>
                                        <span class="badge badge-status bg-status-selesai">Selesai</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('rs/detail_permintaan/' . $row['id_permintaan']) ?>" class="btn btn-outline-detail px-3 py-1">Detail</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <?php 
                            $dummy = [
                                ['id' => 'REQ-20250520-001', 'tgl' => '20 Mei 2025', 'psn' => 'Andi Saputra', 'gol' => 'O+', 'ktg' => 3, 'prio' => 'urgent', 'stt' => 'Diproses'],
                                ['id' => 'REQ-20250519-002', 'tgl' => '19 Mei 2025', 'psn' => 'Siti Nurhaliza', 'gol' => 'A+', 'ktg' => 2, 'prio' => 'tinggi', 'stt' => 'Diproses'],
                                ['id' => 'REQ-20250518-003', 'tgl' => '18 Mei 2025', 'psn' => 'Muh. Rizki', 'gol' => 'B+', 'ktg' => 4, 'prio' => 'normal', 'stt' => 'Donor Ditemukan'],
                                ['id' => 'REQ-20250517-004', 'tgl' => '17 Mei 2025', 'psn' => 'Fadilah Aulia', 'gol' => 'AB+', 'ktg' => 2, 'prio' => 'normal', 'stt' => 'Donor Ditemukan'],
                                ['id' => 'REQ-20250516-005', 'tgl' => '16 Mei 2025', 'psn' => 'Rudi Hartono', 'gol' => 'O-', 'ktg' => 1, 'prio' => 'rendah', 'stt' => 'Selesai'],
                                ['id' => 'REQ-20250515-006', 'tgl' => '15 Mei 2025', 'psn' => 'Dewi Lestari', 'gol' => 'A-', 'ktg' => 2, 'prio' => 'tinggi', 'stt' => 'Selesai']
                            ];
                            foreach ($dummy as $d): ?>
                            <tr>
                                <td class="fw-medium text-dark"><?= $d['id'] ?></td>
                                <td class="text-muted"><?= $d['tgl'] ?></td>
                                <td class="text-secondary fw-medium"><?= $d['psn'] ?></td>
                                <td class="fw-bold text-dark"><?= $d['gol'] ?></td>
                                <td class="text-center"><?= $d['ktg'] ?></td>
                                <td><span class="badge badge-priority bg-prio-<?= $d['prio'] ?>"><?= strtoupper($d['prio']) ?></span></td>
                                <td><span class="badge badge-status bg-status-<?= ($d['stt'] == 'Diproses') ? 'proses' : (($d['stt'] == 'Selesai') ? 'selesai' : 'ditemukan') ?>"><?= $d['stt'] ?></span></td>
                                <td class="text-center"><a href="<?= base_url('rs/detail_permintaan/' . $d['id']) ?>" class="btn btn-outline-detail px-3 py-1">Detail</a></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
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
                        <li class="page-item"><a class="page-link border rounded text-secondary" href="#">3</a></li>
                        <li class="page-item disabled"><span class="page-link border-0 text-muted">...</span></li>
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
    // Cari elemen tombol garis tiga di bagian topbar atas Anda
    // Catatan: Ganti '.navbar-toggler' atau 'i.fa-bars' sesuai dengan class/id tombol garis tiga asli di topbar Anda
    const toggleBtn = document.querySelector('.fa-bars') || document.querySelector('.navbar-toggler');
    const sidebar = document.getElementById('sidebar');

    if(toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', function(e) {
            e.preventDefault();
            // Otomatis pasang/lepas class 'sidebar-open' setiap kali tombol diklik
            sidebar.classList.toggle('sidebar-open');
        });
    }
});
</script>

<?= $this->endSection() ?>