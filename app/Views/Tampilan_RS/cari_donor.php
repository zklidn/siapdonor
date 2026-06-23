<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('rs') ?>" class="menu-item">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('rs/cari_donor') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-magnifying-glass"></i> Cari Donor
    </a>
    <a href="<?= base_url('rs/permintaan_darah') ?>" class="menu-item">
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
        <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px; font-weight: 700;">Cari Donor</h1>
        <p style="color: #6b7280; font-size: 14px;">Temukan donor yang sesuai dengan kebutuhan Anda di Kota Palu dan Sekitarnya</p>
    </div>

    <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
        
        <div style="display: flex; gap: 20px; align-items: flex-end; margin-bottom: 30px; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 250px;">
                <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display:block;">Golongan Darah</label>
                <select style="width: 100%; padding: 11px; border: 1px solid #e5e7eb; border-radius: 8px; color: #4b5563; background: #f9fafb; outline: none;">
                    <option>Pilih golongan darah</option>
                    <option>A+</option><option>A-</option><option>B+</option><option>B-</option>
                    <option>AB+</option><option>AB-</option><option>O+</option><option>O-</option>
                </select>
            </div>
            <div style="flex: 1; min-width: 250px;">
                <label style="font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; display:block;">Pilih Lokasi Kecamatan / Wilayah</label>
                <select style="width: 100%; padding: 11px; border: 1px solid #e5e7eb; border-radius: 8px; color: #4b5563; background: #f9fafb; outline: none;">
                    <option>Semua Lokasi</option>
                    <option>Mantikulore (Palu)</option>
                    <option>Palu Barat (Palu)</option>
                    <option>Palu Selatan (Palu)</option>
                    <option>Palu Timur (Palu)</option>
                    <option>Palu Utara (Palu)</option>
                    <option>Ulujadi (Palu)</option>
                    <option>Biromaru (Sigi)</option>
                    <option>Banawa (Donggala)</option>
                </select>
            </div>
            <button style="background: #8b0000; color: white; padding: 10px 25px; border-radius: 8px; border: none; font-weight: 600; cursor: pointer; height: 44px; display: flex; align-items: center; gap: 8px; font-size: 14px;">
                <i class="fa-solid fa-magnifying-glass"></i> Cari Donor
            </button>
        </div>

        <h3 style="margin-bottom: 20px; font-size: 16px; font-weight: 700; color: #111827;">Hasil Pencarian Donor</h3>
        
        <div style="overflow-x: auto; margin-bottom: 25px;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; min-width: 900px;">
                <thead>
<<<<<<< HEAD
                    <tr style="border-bottom: 2px solid #f3f4f6; color: #6b7280;">
                        <th style="padding: 15px 10px;">Nama Pendonor</th>
                        <th style="padding: 15px 10px;">Gol. Darah</th>
                        <th style="padding: 15px 10px;">Kecamatan</th>
                        <th style="padding: 15px 10px;">No. Telepon</th>
                        <th style="padding: 15px 10px;">Status</th>
=======
                    <tr style="border-bottom: 1px solid #e5e7eb; background: #f9fafb;">
                        <th style="padding: 12px 15px; color: #4b5563; font-weight: 600;">Nama</th>
                        <th style="padding: 12px 15px; color: #4b5563; font-weight: 600; text-align: center;">Gol. Darah</th>
                        <th style="padding: 12px 15px; color: #4b5563; font-weight: 600;">Lokasi Saat Ini</th>
                        <th style="padding: 12px 15px; color: #4b5563; font-weight: 600;">No. Telepon</th>
                        <th style="padding: 12px 15px; color: #4b5563; font-weight: 600;">Status</th>
                        <th style="padding: 12px 15px; color: #4b5563; font-weight: 600; text-align: center;">Aksi</th>
>>>>>>> sunflower
                    </tr>
                </thead>
                <tbody style="color: #374151;">
                    <?php 
                    $list_pencarian_donor = isset($hasil_pencarian) ? $hasil_pencarian : [
                        ['nama' => 'Andi Pratama', 'gol' => 'O+', 'lokasi' => 'Mantikulore, Palu', 'telepon' => '0812-3456-7890', 'status' => 'Tersedia'],
                        ['nama' => 'Siti Nurhaliza', 'gol' => 'A-', 'lokasi' => 'Palu Barat, Palu', 'telepon' => '0813-4567-8901', 'status' => 'Tersedia'],
                        ['nama' => 'Rizky Maulana', 'gol' => 'B+', 'lokasi' => 'Biromaru, Sigi', 'telepon' => '0814-5678-9012', 'status' => 'Tersedia'],
                        ['nama' => 'Dewi Lestari', 'gol' => 'AB+', 'lokasi' => 'Palu Selatan, Palu', 'telepon' => '0815-6789-0123', 'status' => 'Tersedia'],
                        ['nama' => 'Fajar Nugroho', 'gol' => 'A-', 'lokasi' => 'Banawa, Donggala', 'telepon' => '0816-7890-1234', 'status' => 'Tersedia']
                    ];
                    
                    foreach ($list_pencarian_donor as $row): ?>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
<<<<<<< HEAD
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Andi Pratama</td>
                        <td style="padding: 18px 10px;">A+</td>
                        <td style="padding: 18px 10px;">Palu Barat</td>
                        <td style="padding: 18px 10px;">0812-3456-7890</td>
                        <td style="padding: 18px 10px;"><span style="background: #dcfce7; color: #166534; padding: 4px 8px; border-radius: 6px; font-size: 11px;">Tersedia</span></td>
                        <td style="padding: 18px 10px; display: flex; gap: 10px;">
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Siti Nurhaliza</td>
                        <td style="padding: 18px 10px;">O+</td>
                        <td style="padding: 18px 10px;">Palu Selatan</td>
                        <td style="padding: 18px 10px;">0853-9876-5432</td>
                        <td style="padding: 18px 10px;"><span style="background: #dcfce7; color: #166534; padding: 4px 8px; border-radius: 6px; font-size: 11px;">Tersedia</span></td>
                        <td style="padding: 18px 10px; display: flex; gap: 10px;">
=======
                        <td style="padding: 14px 15px; display: flex; align-items: center; gap: 12px; font-weight: 500; color: #111827;">
                            <div style="width: 32px; height: 32px; border-radius: 50%; background: #e5e7eb; display: flex; align-items: center; justify-content: center; color: #9ca3af; font-size: 13px;">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <?= $row['nama'] ?>
                        </td>
                        <td style="padding: 14px 15px; text-align: center;">
                            <span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 4px 10px; border-radius: 6px; font-size: 12px; border: 1px solid #fca5a5; display: inline-block; min-width: 36px; text-align: center;">
                                <?= $row['gol'] ?>
                            </span>
                        </td>
                        <td style="padding: 14px 15px; color: #4b5563;"><?= $row['lokasi'] ?></td>
                        <td style="padding: 14px 15px; color: #4b5563; font-weight: 500;"><?= $row['telepon'] ?></td>
                        <td style="padding: 14px 15px;">
                            <span style="background: #dcfce7; color: #166534; padding: 4px 10px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                                <?= $row['status'] ?>
                            </span>
                        </td>
                        <td style="padding: 14px 15px;">
                            <div style="display: flex; gap: 18px; justify-content: center; align-items: center;">
                                <a href="tel:<?= str_replace('-', '', $row['telepon']) ?>" style="color: #8b0000; font-size: 18px; text-decoration: none; transition: transform 0.2s; display: inline-block;" title="Telepon" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                    <i class="fa-solid fa-phone"></i>
                                </a>
                                <a href="https://wa.me/<?= str_replace('-', '', $row['telepon']) ?>" target="_blank" style="color: #25D366; font-size: 20px; text-decoration: none; transition: transform 0.2s; display: inline-block;" title="WhatsApp" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </div>
>>>>>>> sunflower
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; font-size: 13px; color: #6b7280;">
            <div>
                Menampilkan 1 - 5 dari <strong style="color: #111827;">124</strong> data
            </div>
            <div style="display: flex; gap: 6px;">
                <a href="#" style="padding: 6px 12px; border: 1px solid #e5e7eb; border-radius: 6px; color: #4b5563; text-decoration: none;"><i class="fa-solid fa-chevron-left" style="font-size: 11px;"></i></a>
                <a href="#" style="padding: 6px 12px; border: 1px solid #8b0000; background: #8b0000; color: white; border-radius: 6px; font-weight: 600; text-decoration: none;">1</a>
                <a href="#" style="padding: 6px 12px; border: 1px solid #e5e7eb; border-radius: 6px; color: #4b5563; text-decoration: none;">2</a>
                <a href="#" style="padding: 6px 12px; border: 1px solid #e5e7eb; border-radius: 6px; color: #4b5563; text-decoration: none;">3</a>
                <span style="padding: 6px 4px;">...</span>
                <a href="#" style="padding: 6px 12px; border: 1px solid #e5e7eb; border-radius: 6px; color: #4b5563; text-decoration: none;">25</a>
                <a href="#" style="padding: 6px 12px; border: 1px solid #e5e7eb; border-radius: 6px; color: #4b5563; text-decoration: none;"><i class="fa-solid fa-chevron-right" style="font-size: 11px;"></i></a>
            </div>
        </div>

    </div>
</main>
<<<<<<< HEAD
<?= $this->endSection() ?>
=======
<?= $this->endSection() ?>
>>>>>>> sunflower
