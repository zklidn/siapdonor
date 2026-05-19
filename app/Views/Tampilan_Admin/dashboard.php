<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<style>
    .stats-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 30px; }
    .stat-card { background: white; padding: 20px; border-radius: 10px; border: 1px solid #e5e7eb; box-shadow: 0 1px 2px rgba(0,0,0,0.05); }
    .bottom-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 20px; }
    .box { background: white; padding: 20px; border-radius: 10px; border: 1px solid #e5e7eb; box-shadow: 0 1px 2px rgba(0,0,0,0.05); }
    .btn-red { background: #8b0000; color: white; width: 100%; padding: 10px; border-radius: 6px; border: none; cursor: pointer; font-weight: bold; }
    .btn-outline { background: white; color: #8b0000; width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #8b0000; cursor: pointer; margin-top: 10px; }
</style>

<h1 style="margin-bottom: 5px;">Dashboard</h1>
<p style="color: #6b7280; margin-bottom: 20px;">Selamat datang, Admin Utama!</p>

<div class="stats-grid">
    <div class="stat-card"><h3>120</h3><p style="color: #6b7280;">Total Donor</p></div>
    <div class="stat-card"><h3>85</h3><p style="color: #6b7280;">Donor Aktif</p></div>
    <div class="stat-card"><h3>18</h3><p style="color: #6b7280;">Permintaan Masuk</p></div>
</div>

<div class="bottom-grid">
    <div class="box">
        <h3>Aktivitas Terbaru</h3>
        <table style="width: 100%; margin-top: 15px; border-collapse: collapse;">
            <tr style="border-bottom: 1px solid #eee; text-align: left;"><th style="padding: 8px 0;">Aktivitas</th><th style="padding: 8px 0;">Tanggal</th></tr>
            <tr><td style="padding: 10px 0;">Donor baru ditambahkan</td><td style="padding: 10px 0;">20 Mei 2026</td></tr>
        </table>
    </div>
    <div class="box">
        <h3 style="margin-bottom: 15px;">Aksi Cepat</h3>
        <button class="btn-red">+ Tambah Donor</button>
        <button class="btn-outline">Cari Donor</button>
    </div>
</div>

<?= $this->endSection() ?>