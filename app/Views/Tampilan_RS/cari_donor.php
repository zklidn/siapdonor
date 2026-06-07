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
    <div style="margin-bottom: 30px;">
        <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Cari Donor</h1>
        <p style="color: #6b7280; font-size: 14px;">Temukan donor yang sesuai dengan kebutuhan Anda di Kota Palu</p>
    </div>

    <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
        
        <div style="display: flex; gap: 20px; align-items: flex-end; margin-bottom: 30px; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 250px;">
                <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display:block;">Golongan Darah</label>
                <select style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; color: #4b5563; background: #f9fafb;">
                    <option>Semua golongan darah</option>
                    <option>A+</option><option>A-</option><option>B+</option><option>B-</option>
                    <option>AB+</option><option>AB-</option><option>O+</option><option>O-</option>
                </select>
            </div>
            <div style="flex: 1; min-width: 250px;">
                <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display:block;">Kecamatan di Palu</label>
                <select style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; color: #4b5563; background: #f9fafb;">
                    <option>Semua kecamatan</option>
                    <option>Palu Barat</option><option>Palu Timur</option><option>Palu Selatan</option><option>Palu Utara</option>
                </select>
            </div>
            <button style="background: #8b0000; color: white; padding: 10px 25px; border-radius: 8px; border: none; font-weight: 600; cursor: pointer; height: 42px;">
                <i class="fa-solid fa-magnifying-glass" style="margin-right: 8px;"></i> Cari Donor
            </button>
        </div>

        <h3 style="margin-bottom: 20px; font-size: 16px; color: #111827;">Hasil Pencarian</h3>
        
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; min-width: 900px;">
                <thead>
                    <tr style="border-bottom: 2px solid #f3f4f6; color: #6b7280;">
                        <th style="padding: 15px 10px;">Nama Pendonor</th>
                        <th style="padding: 15px 10px;">Gol. Darah</th>
                        <th style="padding: 15px 10px;">Kecamatan</th>
                        <th style="padding: 15px 10px;">No. Telepon</th>
                        <th style="padding: 15px 10px;">Status</th>
                        <th style="padding: 15px 10px;">Aksi</th>
                    </tr>
                </thead>
                <tbody style="color: #4b5563;">
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Andi Pratama</td>
                        <td style="padding: 18px 10px;">A+</td>
                        <td style="padding: 18px 10px;">Palu Barat</td>
                        <td style="padding: 18px 10px;">0812-3456-7890</td>
                        <td style="padding: 18px 10px;"><span style="background: #dcfce7; color: #166534; padding: 4px 8px; border-radius: 6px; font-size: 11px;">Tersedia</span></td>
                        <td style="padding: 18px 10px; display: flex; gap: 10px;">
                            <i class="fa-solid fa-phone" style="color: #8b0000; cursor: pointer;"></i>
                            <i class="fa-brands fa-whatsapp" style="color: #16a34a; cursor: pointer;"></i>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Siti Nurhaliza</td>
                        <td style="padding: 18px 10px;">O+</td>
                        <td style="padding: 18px 10px;">Palu Selatan</td>
                        <td style="padding: 18px 10px;">0853-9876-5432</td>
                        <td style="padding: 18px 10px;"><span style="background: #dcfce7; color: #166534; padding: 4px 8px; border-radius: 6px; font-size: 11px;">Tersedia</span></td>
                        <td style="padding: 18px 10px; display: flex; gap: 10px;">
                            <i class="fa-solid fa-phone" style="color: #8b0000; cursor: pointer;"></i>
                            <i class="fa-brands fa-whatsapp" style="color: #16a34a; cursor: pointer;"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?= $this->endSection() ?>