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
    <div style="margin-bottom: 30px; display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Data Pasien / Kebutuhan</h1>
            <p style="color: #6b7280; font-size: 14px;">Kelola data pasien yang membutuhkan darah</p>
        </div>
        <button style="background: #8b0000; color: white; padding: 10px 20px; border-radius: 8px; border: none; font-weight: 600; cursor: pointer;">
            <i class="fa-solid fa-plus" style="margin-right: 8px;"></i> Tambah Pasien
        </button>
    </div>

    <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; min-width: 900px;">
                <thead>
                    <tr style="border-bottom: 2px solid #f3f4f6; color: #6b7280;">
                        <th style="padding: 15px 10px;">No</th>
                        <th style="padding: 15px 10px;">Nama Pasien</th>
                        <th style="padding: 15px 10px;">Gol. Darah</th>
                        <th style="padding: 15px 10px;">Jumlah</th>
                        <th style="padding: 15px 10px;">Tgl Permintaan</th>
                        <th style="padding: 15px 10px;">Status</th>
                        <th style="padding: 15px 10px;">Aksi</th>
                    </tr>
                </thead>
                <tbody style="color: #4b5563;">
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px;">1</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Budi Santoso</td>
                        <td style="padding: 18px 10px;">B+</td>
                        <td style="padding: 18px 10px;">2 Kantong</td>
                        <td style="padding: 18px 10px;">07 Jun 2026</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #fef3c7; color: #92400e; padding: 4px 8px; border-radius: 6px; font-size: 11px;">Menunggu</span>
                        </td>
                        <td style="padding: 18px 10px; display: flex; gap: 15px;">
                            <i class="fa-solid fa-pen-to-square" style="color: #3b82f6; cursor: pointer;"></i>
                            <i class="fa-solid fa-trash" style="color: #ef4444; cursor: pointer;"></i>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px;">2</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Siti Aminah</td>
                        <td style="padding: 18px 10px;">A-</td>
                        <td style="padding: 18px 10px;">1 Kantong</td>
                        <td style="padding: 18px 10px;">06 Jun 2026</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #dcfce7; color: #166534; padding: 4px 8px; border-radius: 6px; font-size: 11px;">Selesai</span>
                        </td>
                        <td style="padding: 18px 10px; display: flex; gap: 15px;">
                            <i class="fa-solid fa-pen-to-square" style="color: #3b82f6; cursor: pointer;"></i>
                            <i class="fa-solid fa-trash" style="color: #ef4444; cursor: pointer;"></i>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px;">3</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Rahmat Hidayat</td>
                        <td style="padding: 18px 10px;">O+</td>
                        <td style="padding: 18px 10px;">3 Kantong</td>
                        <td style="padding: 18px 10px;">05 Jun 2026</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #fee2e2; color: #991b1b; padding: 4px 8px; border-radius: 6px; font-size: 11px;">Urgent</span>
                        </td>
                        <td style="padding: 18px 10px; display: flex; gap: 15px;">
                            <i class="fa-solid fa-pen-to-square" style="color: #3b82f6; cursor: pointer;"></i>
                            <i class="fa-solid fa-trash" style="color: #ef4444; cursor: pointer;"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?= $this->endSection() ?>