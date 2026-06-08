<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<section class="auth-section">
    <div class="auth-card">
        
        <div class="brand-header">
            <div class="brand-logo-container">
                <img src="<?= base_url('logo.png') ?>" alt="Ikon SiapDonor" class="brand-icon">
                <span class="brand-name">SiapDonor</span>
            </div>
            <div class="brand-subtitle">Sistem Informasi Donor Darah</div>
        </div>

        <div class="form-header">
            <h2>Lengkapi Biodata</h2>
            <p>Lengkapi profil instansi Anda sebelum mulai</p>
        </div>

        <form action="/profile/simpan_biodata" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="nama_instansi">Nama Instansi</label>
                <input type="text" id="nama_instansi" name="nama_instansi" class="form-control" placeholder="RS Wahidin Sudirohusodo" required>
            </div>

            <div class="form-group">
                <label for="no_telepon">Nomor Telepon</label>
                <input type="tel" id="no_telepon" name="no_telepon" class="form-control" placeholder="Contoh: 0812xxxx" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat Lengkap</label>
                <textarea id="alamat" name="alamat" class="form-control" rows="3" placeholder="Masukkan alamat instansi" required style="resize: none;"></textarea>
            </div>

            <div class="form-group">
                <label for="foto_profil">Foto Profil / Logo Instansi</label>
                <input type="file" id="foto_profil" name="foto_profil" class="form-control" accept="image/*" required style="padding: 10px;">
                <small style="font-size: 11px; color: #6b7280; margin-top: 5px; display: block;">Format: JPG, PNG (Maks 2MB)</small>
            </div>

            <button type="submit" class="btn-primary">Simpan Biodata</button>
        </form>

    </div>
</section>

<script>
    // Kamu bisa tambahkan fungsi validasi sederhana di sini jika ingin membatasi ukuran file
    const fileInput = document.getElementById('foto_profil');
    fileInput.addEventListener('change', function() {
        if (this.files[0].size > 2000000) { // 2MB
            alert("Ukuran file terlalu besar! Maksimal 2MB.");
            this.value = "";
        }
    });
</script>