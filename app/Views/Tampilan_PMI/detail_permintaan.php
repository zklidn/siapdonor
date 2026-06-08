<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('pmi') ?>" class="menu-item">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('pmi/data_pendonor') ?>" class="menu-item">
        <i class="fa-solid fa-users"></i> Data Pendonor
    </a>
    <a href="<?= base_url('pmi/stok_darah') ?>" class="menu-item">
        <i class="fa-solid fa-droplet"></i> Stok Darah
    </a>
    <a href="<?= base_url('pmi/permintaan_darah') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-file-invoice"></i> Permintaan Darah
    </a>
    <a href="<?= base_url('pmi/riwayat_donor') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Donor
    </a>
    <a href="<?= base_url('pmi/laporan') ?>" class="menu-item">
        <i class="fa-solid fa-file-lines"></i> Laporan
    </a>
</aside>

<main class="content-area">
    <div style="margin-bottom: 25px;">
        <a href="<?= base_url('pmi/permintaan_darah') ?>" style="color: #6b7280; text-decoration: none;">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Permintaan
        </a>
        <h1 style="color: #111827; font-size: 24px; margin-top: 10px;">Detail Permintaan Darah</h1>
    </div>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 25px; margin-bottom: 20px;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            <div>
                <h3 style="margin-bottom: 15px; color: #111827;">Data Rumah Sakit & Pasien</h3>
                <p style="font-size: 14px; color: #6b7280; margin-bottom: 5px;">Rumah Sakit: <span style="color: #111827; font-weight: 600;">RS Undata Palu</span></p>
                <p style="font-size: 14px; color: #6b7280; margin-bottom: 5px;">Pasien: <span style="color: #111827; font-weight: 600;">Ahmad Syamsuddin</span></p>
                <p style="font-size: 14px; color: #6b7280;">Sifat: <span style="color: #dc2626; font-weight: 600;">CITO (Darurat)</span></p>
            </div>
            <div>
                <h3 style="margin-bottom: 15px; color: #111827;">Detail Kebutuhan</h3>
                <div style="background: #f9fafb; padding: 15px; border-radius: 8px;">
                    <p style="font-size: 14px;">Gol. Darah: <span style="font-weight: 700; color: #8b0000; font-size: 16px;">A+</span></p>
                    <p style="font-size: 14px;">Jumlah: <span style="font-weight: 700; color: #111827;">3 Kantong</span></p>
                </div>
            </div>
        </div>
    </div>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 25px;">
        <h3 style="margin-bottom: 20px; color: #111827;">Tindakan Petugas</h3>
        
        <form action="<?= base_url('pmi/permintaan_darah') ?>" method="POST">
            <div style="margin-bottom: 20px;">
                <label style="font-size: 13px; font-weight: 600; color: #374151;">Catatan Petugas (Opsional)</label>
                <textarea name="catatan" rows="3" style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; margin-top: 5px;"></textarea>
            </div>

            <div style="display: flex; gap: 15px;">
                <button type="submit" name="status" value="proses" style="background: #16a34a; color: white; padding: 10px 25px; border-radius: 8px; border: none; font-weight: 600; cursor: pointer;">
                    <i class="fa-solid fa-check"></i> Setujui & Proses
                </button>
                <button type="submit" name="status" value="tolak" style="background: #dc2626; color: white; padding: 10px 25px; border-radius: 8px; border: none; font-weight: 600; cursor: pointer;">
                    <i class="fa-solid fa-xmark"></i> Tolak Permintaan
                </button>
            </div>
        </form>
    </div>
</main>
<?= $this->endSection() ?>