<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('rs') ?>" class="menu-item">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('rs/cari_donor') ?>" class="menu-item">
        <i class="fa-solid fa-magnifying-glass"></i> Cari Donor
    </a>
    <a href="<?= base_url('rs/permintaan_darah') ?>" class="menu-item">
        <i class="fa-solid fa-file-invoice-dollar"></i> Permintaan Darah
    </a>
    <a href="<?= base_url('rs/data_pasien') ?>" class="menu-item">
        <i class="fa-solid fa-hospital-user"></i> Data Pasien / Kebutuhan
    </a>
    <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Permintaan
    </a>
    <a href="<?= base_url('rs/laporan_RS') ?>" class="menu-item">
        <i class="fa-solid fa-file-lines"></i> Laporan
    </a>
</aside>

<main class="content-area">
    <div style="margin-bottom: 30px; display: flex; justify-content: space-between; align-items: flex-end;">
        <div>
            <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Permintaan Darah</h1>
            <p style="color: #6b7280; font-size: 14px;">Buat dan kelola permintaan darah untuk pasien</p>
        </div>
        <button style="background: #8b0000; color: white; padding: 10px 20px; border-radius: 8px; border: none; font-weight: 600; cursor: pointer;">
            + Buat Permintaan
        </button>
    </div>

    <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
        
        <div style="display: flex; gap: 30px; border-bottom: 1px solid #e5e7eb; margin-bottom: 25px;">
            <span style="padding-bottom: 15px; color: #6b7280; cursor: pointer;">Semua Permintaan</span>
            <span style="padding-bottom: 15px; color: #8b0000; cursor: pointer; border-bottom: 2px solid #8b0000; font-weight: 600;">Permintaan Aktif</span>
            <span style="padding-bottom: 15px; color: #6b7280; cursor: pointer;">Permintaan Selesai</span>
            <span style="padding-bottom: 15px; color: #6b7280; cursor: pointer;">Draft</span>
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; min-width: 900px;">
                <thead>
                    <tr style="border-bottom: 2px solid #f3f4f6; color: #6b7280;">
                        <th style="padding: 15px 10px;">No</th>
                        <th style="padding: 15px 10px;">Tanggal</th>
                        <th style="padding: 15px 10px;">Pasien</th>
                        <th style="padding: 15px 10px;">Gol. Darah</th>
                        <th style="padding: 15px 10px;">Jumlah</th>
                        <th style="padding: 15px 10px;">Kebutuhan</th>
                        <th style="padding: 15px 10px;">Lokasi</th>
                        <th style="padding: 15px 10px;">Status</th>
                        <th style="padding: 15px 10px;">Aksi</th>
                    </tr>
                </thead>
                <tbody style="color: #4b5563;">
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px;">1</td>
                        <td style="padding: 18px 10px;">20 Mei 2025, 10:30</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Andi Saputra</td>
                        <td style="padding: 18px 10px;">O+</td>
                        <td style="padding: 18px 10px;">3 Kantong</td>
                        <td style="padding: 18px 10px;">Operasi</td>
                        <td style="padding: 18px 10px;">ICU RSUD Sejahtera</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #ffedd5; color: #ea580c; padding: 4px 8px; border-radius: 6px; font-size: 11px;">Proses</span>
                        </td>
                        <td style="padding: 18px 10px;"><i class="fa-solid fa-eye" style="color: #9ca3af; cursor: pointer;"></i></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px;">2</td>
                        <td style="padding: 18px 10px;">20 Mei 2025, 08:45</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Dewi Lestari</td>
                        <td style="padding: 18px 10px;">B+</td>
                        <td style="padding: 18px 10px;">4 Kantong</td>
                        <td style="padding: 18px 10px;">Trauma</td>
                        <td style="padding: 18px 10px;">IGD RSUD Sejahtera</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #e0e7ff; color: #4338ca; padding: 4px 8px; border-radius: 6px; font-size: 11px;">Baru</span>
                        </td>
                        <td style="padding: 18px 10px;"><i class="fa-solid fa-eye" style="color: #9ca3af; cursor: pointer;"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="display: flex; justify-content: flex-end; margin-top: 25px; gap: 5px;">
             <span style="padding: 6px 14px; background: #8b0000; color: white; border-radius: 6px; cursor: pointer;">1</span>
             <span style="padding: 6px 14px; cursor: pointer; border: 1px solid #e5e7eb; border-radius: 6px;">2</span>
             <span style="padding: 6px 14px;">...</span>
             <span style="padding: 6px 14px; cursor: pointer; border: 1px solid #e5e7eb; border-radius: 6px;">5</span>
        </div>
    </div>
</main>
<?= $this->endSection() ?>