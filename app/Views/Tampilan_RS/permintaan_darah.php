<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('CSS_Tampilan_RS/permintaan_darah.css') ?>">

<!-- Hapus class 'sidebar-open' agar mengikuti state global -->
<aside class="sidebar" id="sidebar">
    <div class="menu-top">
        <a href="<?= base_url('rs') ?>" class="menu-item">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
        <a href="<?= base_url('rs/permintaan_darah') ?>" class="menu-item menu-active">
            <i class="fa-solid fa-droplet"></i> Permintaan Darah
        </a>
        <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="menu-item">
            <i class="fa-solid fa-file-invoice"></i> Riwayat Permintaan
        </a>
    </div>
</aside>

<!-- Ubah container-fluid menjadi main class="content-area" -->
<main class="content-area bootstrap-wrapper">
    <div class="header-group">
        <h1 class="page-title">Permintaan Darah</h1>
    </div>
    
    <form action="<?= base_url('rs/simpan_permintaan') ?>" method="POST">
        
        <div class="card card-form mb-4 border-0 shadow-sm">
            <div class="card-body p-4">
                <h5 class="fw-bold mb-4 text-dark fs-6">Data Pasien</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label small fw-semibold text-secondary">Nama Pasien <span class="text-danger">*</span></label>
                        <input type="text" name="nama_pasien" class="form-control custom-input" placeholder="Masukkan nama pasien" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-semibold text-secondary">No. Rekam Medis <span class="text-danger">*</span></label>
                        <input type="text" name="no_rm" class="form-control custom-input" placeholder="Masukkan nomor rekam medis" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-semibold text-secondary">Ruangan / Unit <span class="text-danger">*</span></label>
                        <select name="ruangan" class="form-select custom-input" required>
                            <option value="" disabled selected>Pilih ruangan / unit</option>
                            <option value="ICU">ICU</option>
                            <option value="IGD">IGD</option>
                            <option value="Rawat Inap">Rawat Inap</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-semibold text-secondary">Diagnosis</label>
                        <textarea name="diagnosis" class="form-control custom-textarea" rows="2" placeholder="Masukkan diagnosis (opsional)"></textarea>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card card-form mb-4 border-0 shadow-sm">
            <div class="card-body p-4">
                <h5 class="fw-bold mb-4 text-dark fs-6">Kebutuhan Darah</h5>
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <label class="form-label small fw-semibold text-secondary">Golongan Darah <span class="text-danger">*</span></label>
                        <select name="gol_darah" class="form-select custom-input" required>
                            <option value="" disabled selected>Pilih golongan darah</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label small fw-semibold text-secondary">Rhesus <span class="text-danger">*</span></label>
                        <select name="rhesus" class="form-select custom-input" required>
                            <option value="" disabled selected>Pilih rhesus</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label small fw-semibold text-secondary">Jumlah Kantong <span class="text-danger">*</span></label>
                        <input type="number" name="jumlah_kantong" class="form-control custom-input" placeholder="Masukkan jumlah kantong" min="1" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label small fw-semibold text-secondary mb-2">Prioritas / Urgensi <span class="text-danger">*</span></label>
                    <div class="row g-2">
                        <div class="col-md-3">
                            <input type="radio" name="prioritas" id="prioUrgent" value="Urgent" class="btn-check" required>
                            <label class="btn btn-outline-prio btn-prio-urgent d-block text-center py-3" for="prioUrgent">
                                <span class="d-block fw-bold small">URGENT</span>
                                <span class="extra-small text-danger d-block mt-0.5">(< 2 jam)</span>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <input type="radio" name="prioritas" id="prioTinggi" value="Tinggi" class="btn-check">
                            <label class="btn btn-outline-prio btn-prio-tinggi d-block text-center py-3" for="prioTinggi">
                                <span class="d-block fw-bold small">TINGGI</span>
                                <span class="extra-small text-warning d-block mt-0.5">(beberapa jam)</span>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <input type="radio" name="prioritas" id="prioNormal" value="Normal" class="btn-check">
                            <label class="btn btn-outline-prio btn-prio-normal d-block text-center py-3" for="prioNormal">
                                <span class="d-block fw-bold small">NORMAL</span>
                                <span class="extra-small text-primary d-block mt-0.5">(standar)</span>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <input type="radio" name="prioritas" id="prioRendah" value="Rendah" class="btn-check">
                            <label class="btn btn-outline-prio btn-prio-rendah d-block text-center py-3" for="prioRendah">
                                <span class="d-block fw-bold small">RENDAH</span>
                                <span class="extra-small text-success d-block mt-0.5">(tidak mendesak)</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label small fw-semibold text-secondary">Catatan (opsional)</label>
                    <textarea name="catatan" class="form-control custom-textarea" rows="3" placeholder="Masukkan catatan tambahan"></textarea>
                </div>
            </div>
        </div>
        
        <div class="d-flex justify-content-end gap-3 pt-2 mb-5">
            <a href="<?= base_url('rs/permintaan_darah') ?>" class="btn btn-batal px-5 py-2 fw-semibold">Batal</a>
            <button type="submit" class="btn btn-kirim px-5 py-2 fw-semibold">Kirim Permintaan</button>
        </div>
    </form>

</main>

<!-- SCRIPT SWEETALERT DIMASUKKAN DI SINI (TEPAT SEBELUM END SECTION) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        
        <?php if (session()->getFlashdata('success')) : ?>
            Swal.fire({
                icon: 'success',
                title: 'Tersimpan!',
                text: '<?= session()->getFlashdata('success') ?>',
                confirmButtonColor: '#28a745',
                confirmButtonText: 'Oke'
            });
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '<?= session()->getFlashdata('error') ?>',
                confirmButtonColor: '#dc3545',
                confirmButtonText: 'Tutup'
            });
        <?php endif; ?>
        
    });
</script>

<?= $this->endSection() ?>