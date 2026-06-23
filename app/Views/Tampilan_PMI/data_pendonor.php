<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('pmi') ?>" class="menu-item">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('pmi/data_pendonor') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-users"></i> Data Pendonor
    </a>
    <a href="<?= base_url('pmi/stok_darah') ?>" class="menu-item">
        <i class="fa-solid fa-droplet"></i> Stok Darah
    </a>
    <a href="<?= base_url('pmi/permintaan_darah') ?>" class="menu-item">
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
    <h1 style="margin-bottom: 5px; color: #111827; font-size: 24px; font-weight: 700;">Data Pendonor</h1>
    <p style="color: #6b7280; font-size: 14px; margin-bottom: 25px;">Kelola data pendonor yang terdaftar</p>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 25px;">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 15px;">
            <div style="display: flex; gap: 15px; flex: 1;">
                <div style="position: relative; width: 280px;">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 15px; top: 12px; color: #9ca3af;"></i>
                    <input type="text" placeholder="Cari pendonor..." style="width: 100%; padding: 10px 15px 10px 40px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 14px; background: #f9fafb;">
                </div>
                <select style="padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 14px; color: #4b5563; cursor: pointer; background: #f9fafb;">
                    <option>Semua Status</option>
                    <option>Aktif</option>
                    <option>Nonaktif</option>
                </select>
            </div>

            <a href="<?= base_url('pmi/tambah_donor') ?>" style="background: #8b0000; color: white; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 8px; font-size: 14px; text-decoration: none; transition: 0.2s;">
                <i class="fa-solid fa-plus"></i> Tambah Pendonor
            </a>
        </div>

        <div style="overflow-x: auto; margin-bottom: 25px;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; min-width: 900px;">
                <thead>
                    <tr style="border-bottom: 1px solid #e5e7eb; background: #f9fafb;">
                        <th style="padding: 12px 15px; color: #4b5563; font-weight: 600;">Nama</th>
                        <th style="padding: 12px 15px; color: #4b5563; font-weight: 600; text-align: center;">Gol. Darah</th>
                        <th style="padding: 12px 15px; color: #4b5563; font-weight: 600;">Asal Kota</th>
                        <th style="padding: 12px 15px; color: #4b5563; font-weight: 600;">Lokasi Sekarang</th>
                        <th style="padding: 12px 15px; color: #4b5563; font-weight: 600;">Kontak</th>
                        <th style="padding: 12px 15px; color: #4b5563; font-weight: 600;">Status</th>
                        <th style="padding: 12px 15px; color: #4b5563; font-weight: 600; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    // Menyiapkan variabel array agar siap dicolok ke database dinamis oleh backend nanti
                    $list_pendonor = isset($pendonor_all) ? $pendonor_all : [
                        ['nama' => 'Andi Pratama', 'gol' => 'O+', 'asal' => 'Kota Palu', 'sekarang' => 'Palu Barat', 'kontak' => '0812-3456-7890', 'status' => 'Aktif'],
                        ['nama' => 'Siti Nurhaliza', 'gol' => 'A+', 'asal' => 'Kota Palu', 'sekarang' => 'Palu Timur', 'kontak' => '0812-2222-3333', 'status' => 'Aktif'],
                        ['nama' => 'Rizky Maulana', 'gol' => 'B-', 'asal' => 'Kota Palu', 'sekarang' => 'Palu Selatan', 'kontak' => '0813-4444-5555', 'status' => 'Aktif'],
                        ['nama' => 'Dewi Lestari', 'gol' => 'AB+', 'asal' => 'Kota Palu', 'sekarang' => 'Mantikulore', 'kontak' => '0815-6789-0123', 'status' => 'Aktif'],
                        ['nama' => 'Fajar Nugroho', 'gol' => 'A-', 'asal' => 'Kota Palu', 'sekarang' => 'Ulujadi', 'kontak' => '0812-6666-7777', 'status' => 'Nonaktif']
                    ];
                    
                    foreach ($list_pendonor as $p): ?>
                    <tr style="border-bottom: 1px solid #f3f4f6; transition: 0.2s;">
                        <td style="padding: 14px 15px; display: flex; align-items: center; gap: 12px; font-weight: 500; color: #111827;">
                            <div style="width: 32px; height: 32px; border-radius: 50%; background: #e5e7eb; display: flex; align-items: center; justify-content: center; color: #9ca3af; font-size: 13px;">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <?= $p['nama'] ?>
                        </td>
                        <td style="padding: 14px 15px; text-align: center;">
                            <span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 4px 10px; border-radius: 6px; font-size: 12px; border: 1px solid #fca5a5; display: inline-block; min-width: 36px; text-align: center;">
                                <?= $p['gol'] ?>
                            </span>
                        </td>
                        <td style="padding: 14px 15px; color: #4b5563;"><?= $p['asal'] ?></td>
                        <td style="padding: 14px 15px; color: #4b5563;"><?= $p['sekarang'] ?></td>
                        <td style="padding: 14px 15px; color: #4b5563; font-weight: 500;"><?= $p['kontak'] ?></td>
                        <td style="padding: 14px 15px;">
                            <?php if ($p['status'] == 'Aktif'): ?>
                                <span style="color: #16a34a; font-weight: 600; font-size: 13px;">Aktif</span>
                            <?php else: ?>
                                <span style="color: #ea580c; font-weight: 600; font-size: 13px;">Nonaktif</span>
                            <?php endif; ?>
                        </td>
                        <td style="padding: 14px 15px; text-align: center;">
                            <div style="display: flex; gap: 14px; justify-content: center; color: #9ca3af; font-size: 15px;">
                                <i class="fa-solid fa-eye" style="cursor: pointer;" title="Detail"></i>
                                <i class="fa-solid fa-pen-to-square" style="cursor: pointer;" title="Edit"></i>
                                <i class="fa-solid fa-trash" style="color: #ef4444; cursor: pointer;" title="Hapus"></i>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; font-size: 13px; color: #6b7280;">
            <div>
                Menampilkan 1 - 5 dari <strong style="color: #111827;">1.248</strong> data
            </div>
            <div style="display: flex; gap: 6px; list-style: none;">
                <a href="#" style="padding: 6px 12px; border: 1px solid #e5e7eb; border-radius: 6px; color: #4b5563; text-decoration: none;"><i class="fa-solid fa-chevron-left" style="font-size: 11px;"></i></a>
                <a href="#" style="padding: 6px 12px; border: 1px solid #8b0000; background: #8b0000; color: white; border-radius: 6px; font-weight: 600; text-decoration: none;">1</a>
                <a href="#" style="padding: 6px 12px; border: 1px solid #e5e7eb; border-radius: 6px; color: #4b5563; text-decoration: none;">2</a>
                <a href="#" style="padding: 6px 12px; border: 1px solid #e5e7eb; border-radius: 6px; color: #4b5563; text-decoration: none;">3</a>
                <span style="padding: 6px 6px;">...</span>
                <a href="#" style="padding: 6px 12px; border: 1px solid #e5e7eb; border-radius: 6px; color: #4b5563; text-decoration: none;">250</a>
                <a href="#" style="padding: 6px 12px; border: 1px solid #e5e7eb; border-radius: 6px; color: #4b5563; text-decoration: none;"><i class="fa-solid fa-chevron-right" style="font-size: 11px;"></i></a>
            </div>
        </div>

    </div>
</main>
<?= $this->endSection() ?>