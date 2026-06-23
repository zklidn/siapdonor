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
    <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Permintaan
    </a>
    <a href="<?= base_url('rs/laporan_rs') ?>" class="menu-item">
        <i class="fa-solid fa-file-lines"></i> Laporan
    </a>
</aside>

<main class="content-area">
    <div style="margin-bottom: 30px;">
        <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Riwayat Permintaan</h1>
        <p style="color: #6b7280; font-size: 14px;">Riwayat semua permintaan darah</p>
    </div>

    <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
        
        <div style="display: flex; gap: 20px; align-items: flex-end; margin-bottom: 30px; flex-wrap: wrap;">
            
            <div style="flex: 1; min-width: 300px; max-width: 500px;">
                <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display:block;">Periode Permintaan</label>
                <div style="display: flex; gap: 10px; align-items: center;">
                    <input type="date" name="tanggal_awal" style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; color: #4b5563; background: #f9fafb; font-family: 'Inter', sans-serif;">
                    <span style="color: #9ca3af; font-weight: 500; font-size: 14px;">s/d</span>
                    <input type="date" name="tanggal_akhir" style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; color: #4b5563; background: #f9fafb; font-family: 'Inter', sans-serif;">
                </div>
            </div>
            
            <button style="background: #8b0000; color: white; padding: 10px 25px; border-radius: 8px; border: none; font-weight: 600; cursor: pointer; height: 42px;">
                Filter
            </button>
            
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
                        <th style="padding: 15px 10px;">Status</th>
                        <th style="padding: 15px 10px;">Selesai Pada</th>
                    </tr>
                </thead>
                <tbody style="color: #4b5563;">
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px;">1</td>
                        <td style="padding: 18px 10px;">18 Mei 2025, 11:20</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Andi Saputra</td>
                        <td style="padding: 18px 10px;">O+</td>
                        <td style="padding: 18px 10px;">3 Kantong</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #dcfce7; color: #166534; padding: 4px 8px; border-radius: 6px; font-size: 11px; font-weight: 600;">Selesai</span>
                        </td>
                        <td style="padding: 18px 10px;">18 Mei 2025, 15:30</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px;">2</td>
                        <td style="padding: 18px 10px;">18 Mei 2025, 09:10</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Siti Aisyah</td>
                        <td style="padding: 18px 10px;">A-</td>
                        <td style="padding: 18px 10px;">2 Kantong</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #dcfce7; color: #166534; padding: 4px 8px; border-radius: 6px; font-size: 11px; font-weight: 600;">Selesai</span>
                        </td>
                        <td style="padding: 18px 10px;">18 Mei 2025, 12:45</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="display: flex; justify-content: flex-end; margin-top: 25px; gap: 5px;">
             <span style="padding: 6px 14px; background: #8b0000; color: white; border-radius: 6px; cursor: pointer;">1</span>
             <span style="padding: 6px 14px; cursor: pointer; border: 1px solid #e5e7eb; border-radius: 6px;">2</span>
             <span style="padding: 6px 14px;">...</span>
             <span style="padding: 6px 14px; cursor: pointer; border: 1px solid #e5e7eb; border-radius: 6px;">32</span>
        </div>
    </div>
</main>

<?= $this->endSection() ?>
