<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('rs') ?>" class="menu-item">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('rs/cari_donor') ?>" class="menu-item">
        <i class="fa-solid fa-magnifying-glass"></i> Cari Donor
    </a>
    <a href="<?= base_url('rs/permintaan_darah') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-file-invoice-dollar"></i> Permintaan Darah
    </a>
    <a href="<?= base_url('rs/riwayat_perminntaan') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Permintaan
    </a>
    <a href="<?= base_url('rs/laporan_RS') ?>" class="menu-item">
        <i class="fa-solid fa-file-lines"></i> Laporan
    </a>
</aside>

<main class="content-area">
    <div style="margin-bottom: 25px;">
        <a href="<?= base_url('rs/permintaan_darah') ?>" style="color: #6b7280; text-decoration: none; font-size: 13px;">
            <i class="fa-solid fa-arrow-left" style="margin-right: 5px;"></i> Kembali ke Daftar Permintaan
        </a>
        <h1 style="color: #111827; font-size: 24px; margin-top: 10px;">Formulir Permintaan Darah</h1>
    </div>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 30px;">
        <form action="<?= base_url('rs/simpan_permintaan') ?>" method="POST">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                
                <div>
                    <h3 style="margin-bottom: 20px; font-size: 16px; color: #111827;">Data Pasien</h3>
                    <div style="margin-bottom: 15px;">
                        <label style="font-size: 13px; font-weight: 600; color: #374151; display: block; margin-bottom: 5px;">Nama Pasien</label>
                        <input type="text" name="nama_pasien" placeholder="Masukkan nama pasien" style="width: 100%; padding: 11px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; outline: none; font-size: 14px;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label style="font-size: 13px; font-weight: 600; color: #374151; display: block; margin-bottom: 5px;">No. Rekam Medis</label>
                        <input type="text" name="no_rm" placeholder="Contoh: 123456" style="width: 100%; padding: 11px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; outline: none; font-size: 14px;">
                    </div>
                </div>

                <div>
                    <h3 style="margin-bottom: 20px; font-size: 16px; color: #111827;">Detail Permintaan</h3>
                    <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                        <div style="flex: 1;">
                            <label style="font-size: 13px; font-weight: 600; color: #374151; display: block; margin-bottom: 5px;">Gol. Darah</label>
                            <select name="gol_darah" style="width: 100%; padding: 11px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; outline: none; font-size: 14px; cursor: pointer;">
                                <option>A+</option><option>B+</option><option>O+</option><option>AB+</option>
                                <option>A-</option><option>B-</option><option>O-</option><option>AB-</option>
                            </select>
                        </div>
                        <div style="flex: 1;">
                            <label style="font-size: 13px; font-weight: 600; color: #374151; display: block; margin-bottom: 5px;">Jumlah (Kantong)</label>
                            <input type="number" name="jumlah" placeholder="0" style="width: 100%; padding: 11px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; outline: none; font-size: 14px;">
                        </div>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label style="font-size: 13px; font-weight: 600; color: #374151; display: block; margin-bottom: 5px;">Sifat Kebutuhan</label>
                        <select name="urgensi" style="width: 100%; padding: 11px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; outline: none; font-size: 14px; cursor: pointer;">
                            <option>Biasa (Elektif)</option>
                            <option>CITO (Darurat)</option>
                        </select>
                    </div>
                </div>
            </div>

            <div style="margin-top: 20px; border-top: 1px solid #e5e7eb; padding-top: 20px; text-align: right;">
                <button type="submit" style="background: #8b0000; color: white; padding: 12px 30px; border-radius: 8px; border: none; font-weight: 600; cursor: pointer; transition: 0.2s;">
                    Kirim Permintaan
                </button>
            </div>
        </form>
    </div>
</main>

<?= $this->endSection() ?>