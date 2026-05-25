<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('dashboard') ?>" class="menu-item menu-active"><i class="fa-solid fa-gauge"></i> Dashboard</a>
    <a href="#" class="menu-item"><i class="fa-solid fa-users-gear"></i> Kelola User</a>
    <a href="#" class="menu-item"><i class="fa-solid fa-hand-holding-droplet"></i> Data Donor</a>
    <a href="#" class="menu-item"><i class="fa-solid fa-clock-rotate-left"></i> Riwayat</a>
</aside>

<main class="content-area">
    <h1 style="margin-bottom: 25px; color: #111827;">Dashboard</h1>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 30px;">
        <div style="background: white; padding: 20px; border-radius: 10px; border: 1px solid #e5e7eb; color: #111827;">
            <h3 style="font-size: 24px;">120</h3><p style="color: #6b7280; font-size: 13px;">Total Donor</p>
        </div>
        <div style="background: white; padding: 20px; border-radius: 10px; border: 1px solid #e5e7eb; color: #111827;">
            <h3 style="font-size: 24px;">85</h3><p style="color: #6b7280; font-size: 13px;">Donor Aktif</p>
        </div>
        <div style="background: white; padding: 20px; border-radius: 10px; border: 1px solid #e5e7eb; color: #111827;">
            <h3 style="font-size: 24px;">18</h3><p style="color: #6b7280; font-size: 13px;">Permintaan Masuk</p>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px;">
        <div style="background: white; padding: 20px; border-radius: 10px; border: 1px solid #e5e7eb; color: #111827;">
            <h3 style="margin-bottom: 15px;">Aktivitas Terbaru</h3>
            <table style="width: 100%; border-collapse: collapse; text-align: left;">
                <tr style="border-bottom: 1px solid #eee;"><th style="padding-bottom: 10px; color:#6b7280;">Aktivitas</th><th style="padding-bottom: 10px; color:#6b7280;">Tanggal</th></tr>
                <tr><td style="padding: 10px 0;">Donor baru ditambahkan</td><td>20 Mei 2026</td></tr>
            </table>
        </div>
        <div style="background: white; padding: 20px; border-radius: 10px; border: 1px solid #e5e7eb;">
            <h3 style="margin-bottom: 15px; color: #111827;">Aksi Cepat</h3>
            <button style="background: #8b0000; color: white; width: 100%; padding: 10px; border-radius: 6px; border: none; cursor: pointer; font-weight: bold;">+ Tambah Donor</button>
            <button style="background: white; color: #8b0000; width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #8b0000; cursor: pointer; margin-top: 10px;">Cari Donor</button>
        </div>
    </div>
</main>

<?= $this->endSection() ?>