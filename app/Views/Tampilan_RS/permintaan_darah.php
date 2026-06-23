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
    <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Permintaan
    </a>
    <a href="<?= base_url('rs/laporan_rs') ?>" class="menu-item">
        <i class="fa-solid fa-file-lines"></i> Laporan
    </a>
</aside>

<main class="content-area">
    <div style="margin-bottom: 30px;">
        <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Permintaan Darah</h1>
        <p style="color: #6b7280; font-size: 14px;">Kelola dan buat permintaan kantong darah baru ke PMI Kota Palu</p>
    </div>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 25px;">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 15px;">
            
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <div style="position: relative; width: 250px;">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 15px; top: 12px; color: #9ca3af;"></i>
                    <input type="text" placeholder="Cari nama pasien..." style="width: 100%; padding: 10px 15px 10px 40px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; background: #f9fafb;">
                </div>

                <select style="padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; color: #4b5563; background: #f9fafb; cursor: pointer;">
                    <option>Semua Status</option>
                    <option>Menunggu Konfirmasi</option>
                    <option>Diproses PMI</option>
                    <option>Selesai</option>
                    <option>Ditolak</option>
                </select>
            </div>
            
            <a href="<?= base_url('rs/buat_permintaan') ?>" style="background: #8b0000; color: white; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 8px; font-size: 14px; text-decoration: none; transition: 0.2s;">
                <i class="fa-solid fa-plus"></i> Buat Permintaan Baru
            </a>

        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; min-width: 900px;">
                <thead>
                    <tr style="border-bottom: 2px solid #f3f4f6;">
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">No</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Tanggal Request</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Nama Pasien</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700; text-align: center;">Gol. Darah</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700; text-align: center;">Jumlah (Kantong)</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Sifat Kebutuhan</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Status Permintaan</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px; color: #4b5563;">1</td>
                        <td style="padding: 18px 10px; color: #4b5563;">08 Jun 2026, 13:00</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Ahmad Syamsuddin</td>
                        <td style="padding: 18px 10px; text-align: center; font-weight: 600; color: #8b0000;">A+</td>
                        <td style="padding: 18px 10px; text-align: center; font-weight: 600;">3</td>
                        <td style="padding: 18px 10px; color: #dc2626; font-weight: 600;">CITO (Darurat)</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #e0e7ff; color: #4338ca; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Menunggu Konfirmasi</span>
                        </td>
                        <td style="padding: 18px 10px;">
                            <i class="fa-solid fa-eye" style="color: #9ca3af; cursor: pointer;" title="Lihat Detail Permintaan"></i>
                            <i class="fa-solid fa-trash" style="color: #ef4444; cursor: pointer; margin-left: 10px;" title="Batalkan Permintaan"></i>
                        </td>
                    </tr>

                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px; color: #4b5563;">2</td>
                        <td style="padding: 18px 10px; color: #4b5563;">08 Jun 2026, 09:15</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Maria Ulfa</td>
                        <td style="padding: 18px 10px; text-align: center; font-weight: 600; color: #8b0000;">O+</td>
                        <td style="padding: 18px 10px; text-align: center; font-weight: 600;">2</td>
                        <td style="padding: 18px 10px; color: #4b5563;">Biasa (Elektif)</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #fef08a; color: #854d0e; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Sedang Diproses</span>
                        </td>
                        <td style="padding: 18px 10px;">
                            <i class="fa-solid fa-eye" style="color: #9ca3af; cursor: pointer;" title="Lihat Detail Permintaan"></i>
                        </td>
                    </tr>

                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px; color: #4b5563;">3</td>
                        <td style="padding: 18px 10px; color: #4b5563;">07 Jun 2026, 16:45</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Budi Santoso</td>
                        <td style="padding: 18px 10px; text-align: center; font-weight: 600; color: #8b0000;">B-</td>
                        <td style="padding: 18px 10px; text-align: center; font-weight: 600;">1</td>
                        <td style="padding: 18px 10px; color: #4b5563;">Biasa (Elektif)</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #dcfce7; color: #166534; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Selesai Diterima</span>
                        </td>
                        <td style="padding: 18px 10px;">
                            <i class="fa-solid fa-eye" style="color: #9ca3af; cursor: pointer;" title="Lihat Detail Permintaan"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 25px; font-size: 14px; color: #6b7280; flex-wrap: wrap; gap: 15px;">
            <div>Menampilkan 1 - 3 dari 3 data</div>
            <div style="display: flex; gap: 8px; align-items: center;">
                <span style="padding: 6px 10px; cursor: pointer; color: #9ca3af;"><i class="fa-solid fa-chevron-left"></i></span>
                <span style="background: #8b0000; color: white; padding: 6px 14px; border-radius: 6px; font-weight: 600; cursor: pointer;">1</span>
                <span style="padding: 6px 10px; cursor: pointer; color: #4b5563;"><i class="fa-solid fa-chevron-right"></i></span>
            </div>
        </div>
    </div>

</main>
<?= $this->endSection() ?>
