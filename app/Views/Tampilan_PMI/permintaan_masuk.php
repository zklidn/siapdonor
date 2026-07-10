<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('CSS_Tampilan_PMI/permintaan_masuk.css') ?>">

<aside class="sidebar">
    <div class="menu-top">
        <a href="<?= base_url('pmi') ?>" class="menu-item">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
        <a href="<?= base_url('pmi/permintaan_masuk') ?>" class="menu-item menu-active">
            <i class="fa-solid fa-inbox"></i> Permintaan Masuk
        </a>
        <a href="<?= base_url('pmi/cari_donor') ?>" class="menu-item">
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

<main class="content-area bootstrap-wrapper">
    <div class="header-group-clean">
        <h1 class="page-title">Permintaan Masuk</h1>
        <p class="text-muted small mb-0">Dashboard / Permintaan Masuk</p>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-5">
            <div class="input-group search-box">
                <span class="input-group-text bg-white border-end-0 text-muted"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="form-control border-start-0 ps-0 custom-filter-input" placeholder="Cari ID permintaan, nama pasien, atau RS...">
            </div>
        </div>
        <div class="col-md-3">
            <select class="form-select custom-filter-input">
                <option selected>Semua Status</option>
                <option value="Baru">Baru</option>
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

    <div class="card card-content border-0 shadow-sm mb-4">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table align-middle custom-table mb-0">
                    <thead>
                        <tr>
                            <th>ID Permintaan</th>
                            <th>Tanggal</th>
                            <th>Rumah Sakit</th>
                            <th>Pasien</th>
                            <th>Gol. Darah</th>
                            <th>Prioritas</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($permintaan_masuk_db) && is_array($permintaan_masuk_db)): ?>
                            <?php foreach ($permintaan_masuk_db as $row): ?>
                            <tr>
                                <td class="text-muted fw-medium"><?= $row['id_permintaan'] ?></td>
                                <td class="text-muted"><?= date('d Mei Y', strtotime($row['tanggal'])) ?></td>
                                <td class="fw-semibold text-dark"><?= $row['nama_rs'] ?></td>
                                <td class="text-secondary fw-medium"><?= $row['nama_pasien'] ?></td>
                                <td class="fw-bold text-dark"><?= $row['gol_darah'] . $row['rhesus'] ?></td>
                                <td>
                                    <span class="badge badge-priority bg-prio-<?= strtolower($row['prioritas']) ?>">
                                        <?= strtoupper($row['prioritas']) ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-status bg-status-<?= ($row['status'] == 'Baru') ? 'baru' : (($row['status'] == 'Diproses') ? 'proses' : (($row['status'] == 'Selesai') ? 'selesai' : 'ditemukan')) ?>">
                                        <?= $row['status'] ?>
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('pmi/detail_permintaan/' . $row['id_permintaan']) ?>" class="btn btn-outline-detail px-3 py-1">Detail</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <?php 
                            $dummy_pmi = [
                                ['id' => 'REQ-20250520-001', 'tgl' => '20 Mei 2025', 'rs' => 'RSUD Undata Palu', 'psn' => 'Andi Saputra', 'gol' => 'O+', 'prio' => 'urgent', 'stt' => 'Baru'],
                                ['id' => 'REQ-20250520-002', 'tgl' => '19 Mei 2025', 'rs' => 'RS Madani Palu', 'psn' => 'Siti Nurhaliza', 'gol' => 'A-', 'prio' => 'tinggi', 'stt' => 'Diproses'],
                                ['id' => 'REQ-20250519-003', 'tgl' => '18 Mei 2025', 'rs' => 'RS Bhayangkara Palu', 'psn' => 'Muh. Rizki', 'gol' => 'B+', 'prio' => 'normal', 'stt' => 'Diproses'],
                                ['id' => 'REQ-20250519-004', 'tgl' => '17 Mei 2025', 'rs' => 'RS Anutapura Palu', 'psn' => 'Fadilah Aulia', 'gol' => 'AB+', 'prio' => 'normal', 'stt' => 'Donor Ditemukan'],
                                ['id' => 'REQ-20250519-005', 'tgl' => '16 Mei 2025', 'rs' => 'RS Wirabuana Palu', 'psn' => 'Rudi Hartono', 'gol' => 'O-', 'prio' => 'rendah', 'stt' => 'Selesai']
                            ];
                            foreach ($dummy_pmi as $d): ?>
                            <tr>
                                <td class="text-muted fw-medium"><?= $d['id'] ?></td>
                                <td class="text-muted"><?= $d['tgl'] ?></td>
                                <td class="fw-semibold text-dark"><?= $d['rs'] ?></td>
                                <td class="text-secondary fw-medium"><?= $d['psn'] ?></td>
                                <td class="fw-bold text-dark"><?= $d['gol'] ?></td>
                                <td><span class="badge badge-priority bg-prio-<?= $d['prio'] ?>"><?= strtoupper($d['prio']) ?></span></td>
                                <td><span class="badge badge-status bg-status-<?= ($d['stt'] == 'Baru') ? 'baru' : (($d['stt'] == 'Diproses') ? 'proses' : (($d['stt'] == 'Selesai') ? 'selesai' : 'ditemukan')) ?>"><?= $d['stt'] ?></span></td>
                                <td class="text-center"><a href="<?= base_url('pmi/detail_permintaan/' . $d['id']) ?>" class="btn btn-outline-detail px-3 py-1">Detail</a></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection() ?>