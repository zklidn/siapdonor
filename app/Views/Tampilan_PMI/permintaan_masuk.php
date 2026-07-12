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
        <a href="<?= base_url('pmi/tambah_donor') ?>" class="menu-item">
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
    </div>

    <form method="get" action="<?= base_url('pmi/permintaan_masuk') ?>">
    <div class="row g-3 mb-4">

        <div class="col-md-5">
            <div class="input-group search-box">
                <button type="submit"
                    class="input-group-text bg-white border-end-0 text-muted">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <input
                    type="text"
                    name="keyword"
                    class="form-control border-start-0 ps-0 custom-filter-input"
                    placeholder="Cari ID permintaan, nama pasien, atau RS..."
                    value="<?= esc($keyword ?? '') ?>">
            </div>
        </div>

        <div class="col-md-3">
            <select name="status" class="form-select custom-filter-input">
                <option value="">Semua Status</option>

                <option value="Baru"
                    <?= (($status ?? '') == 'Baru') ? 'selected' : '' ?>>
                    Baru
                </option>

                <option value="Diproses"
                    <?= (($status ?? '') == 'Diproses') ? 'selected' : '' ?>>
                    Diproses
                </option>

                <option value="Donor Ditemukan"
                    <?= (($status ?? '') == 'Donor Ditemukan') ? 'selected' : '' ?>>
                    Donor Ditemukan
                </option>

                <option value="Selesai"
                    <?= (($status ?? '') == 'Selesai') ? 'selected' : '' ?>>
                    Selesai
                </option>
            </select>
        </div>

        <div class="col-md-2">
            <select name="prioritas" class="form-select custom-filter-input">
                <option value="">Semua Prioritas</option>

                <option value="Urgent"
                    <?= (($prioritas ?? '') == 'Urgent') ? 'selected' : '' ?>>
                    Urgent
                </option>

                <option value="Tinggi"
                    <?= (($prioritas ?? '') == 'Tinggi') ? 'selected' : '' ?>>
                    Tinggi
                </option>

                <option value="Normal"
                    <?= (($prioritas ?? '') == 'Normal') ? 'selected' : '' ?>>
                    Normal
                </option>

                <option value="Rendah"
                    <?= (($prioritas ?? '') == 'Rendah') ? 'selected' : '' ?>>
                    Rendah
                </option>
            </select>
        </div>

        <div class="col-md-2 d-grid">
            <a href="<?= base_url('pmi/permintaan_masuk') ?>"
                class="btn btn-secondary">
                Reset
            </a>

        </div>

    </div>
</form>

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
                                <td class="text-muted"><?= date('d M Y', strtotime($row['created_at'])) ?></td>
                                <td class="fw-semibold text-dark"><?= $row['nama_rs'] ?></td>
                                <td class="text-secondary fw-medium"><?= $row['nama_pasien'] ?></td>
                                <td class="fw-bold text-dark"><?= $row['golongan_darah'] . $row['rhesus'] ?></td>
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
                            <tr>
                                <td colspan="8" class="text-center text-muted">
                                    Belum ada data permintaan.
                                </td>
                            </tr>
                            <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection() ?>