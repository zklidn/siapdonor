<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('CSS_Tampilan_PMI/tambah_pendonor.css') ?>">

<aside class="sidebar" id="sidebar">
    <div class="menu-top">
        <a href="<?= base_url('pmi') ?>" class="menu-item">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
        <a href="<?= base_url('pmi/permintaan_masuk') ?>" class="menu-item">
            <i class="fa-solid fa-inbox"></i> Permintaan Masuk
        </a>
        <a href="<?= base_url('pmi/cari_donor') ?>" class="menu-item">
            <i class="fa-solid fa-user-gear"></i> Cari Donor
        </a>
        <a href="<?= base_url('pmi/tambah_pendonor') ?>" class="menu-item menu-active">
            <i class="fa-solid fa-file-pen"></i> Tambah Pendonor 
        </a>
        <a href="<?= base_url('pmi/update_status_permintaan') ?>" class="menu-item">
            <i class="fa-solid fa-file-pen"></i> Update Status Permintaan 
        </a>
    </div>
</aside>

<div class="container-fluid py-2 bootstrap-wrapper">
    <div class="header-group-clean">
        <h1 class="page-title">Tambah Pendonor Baru</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb-nav d-flex gap-2 list-unstyled mb-0">
                <li class="breadcrumb-nav-item"><a href="<?= base_url('pmi') ?>" class="text-secondary text-decoration-none">Dashboard</a></li>
                <li class="breadcrumb-nav-separator text-muted">/</li>
                <li class="breadcrumb-nav-item"><a href="<?= base_url('pmi/cari_donor') ?>" class="text-secondary text-decoration-none">Cari Donor</a></li>
                <li class="breadcrumb-nav-separator text-muted">/</li>
                <li class="breadcrumb-nav-item active text-dark fw-medium">Tambah Pendonor</li>
            </ol>
        </nav>
    </div>

    <div class="card card-content border-0 shadow-sm mb-4">
        <div class="card-body p-4">
            <h5 class="fw-bold mb-4 text-dark fs-6">Formulir Data Diri Pendonor</h5>

            <form action="<?= base_url('pmi/simpan_pendonor') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="row g-4">
                    <div class="col-md-4 text-center border-end border-light pe-md-4">
                        <label class="form-label text-muted small fw-medium d-block text-start mb-2">Foto Profil Pendonor</label>
                        <div class="upload-box-wrapper mb-3">
                            <div class="upload-preview-circle mx-auto mb-3">
                                <img id="avatar-preview" src="<?= base_url('uploads/avatar_donor/default.png') ?>" alt="Preview">
                            </div>
                            <input type="file" name="foto" id="file-input" class="d-none" accept="image/*">
                            <button type="button" class="btn btn-reset-outline btn-sm px-3" onclick="document.getElementById('file-input').click();">
                                <i class="fa-solid fa-camera me-1"></i> Unggah Foto
                            </button>
                        </div>
                        <p class="text-muted extra-small lh-base">Gunakan format JPG, JPEG, atau PNG. Maksimal ukuran file 2MB.</p>
                    </div>

                    <div class="col-md-8ps-md-4">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label text-muted small fw-medium mb-1">Nama Lengkap Pendonor</label>
                                <input type="text" name="nama_donor" class="form-control custom-filter-input" placeholder="Masukkan nama sesuai KTP" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-medium mb-1">No. Identitas (NIK/KTP)</label>
                                <input type="text" name="no_identitas" class="form-control custom-filter-input" placeholder="Masukkan 16 digit NIK" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-medium mb-1">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control custom-filter-input" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-medium mb-1">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-select custom-filter-input" required>
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label text-muted small fw-medium mb-1">Golongan Darah</label>
                                <select name="gol_darah" class="form-select custom-filter-input" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="O">O</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label text-muted small fw-medium mb-1">Rhesus</label>
                                <select name="rhesus" class="form-select custom-filter-input" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="Positif">Positif (+)</option>
                                    <option value="Negatif">Negatif (-)</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-medium mb-1">No. WhatsApp / Telepon</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 text-muted small">+62</span>
                                    <input type="text" name="telepon" class="form-control border-start-0 ps-1 custom-filter-input" placeholder="81234567xxx" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-muted small fw-medium mb-1">Wilayah / Kecamatan</label>
                                <input type="text" name="wilayah" class="form-control custom-filter-input" placeholder="Misal: Palu Barat, Sigi Biromaru" required>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label text-muted small fw-medium mb-1">Alamat Lengkap Rumah</label>
                                <textarea name="alamat" class="form-control custom-filter-input" rows="3" placeholder="Masukkan nama jalan, nomor rumah, RT/RW..." required></textarea>
                            </div>
                        </div>

                        <div class="d-flex gap-2 justify-content-end mt-4 pt-2">
                            <a href="<?= base_url('pmi/cari_donor') ?>" class="btn btn-reset-outline px-4 py-2 fw-semibold">Batal</a>
                            <button type="submit" class="btn btn-search-maroon px-4 py-2 fw-semibold">Simpan Data Pendonor</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
document.getElementById('file-input').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
            document.getElementById('avatar-preview').setAttribute('src', event.target.result);
        }
        reader.readAsDataURL(file);
    }
});

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