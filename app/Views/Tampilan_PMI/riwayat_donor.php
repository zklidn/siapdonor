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
    <a href="<?= base_url('pmi/permintaan_darah') ?>" class="menu-item">
        <i class="fa-solid fa-file-invoice"></i> Permintaan Darah
    </a>
    <a href="<?= base_url('pmi/riwayat_donor') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Donor
    </a>
    <a href="<?= base_url('pmi/laporan') ?>" class="menu-item">
        <i class="fa-solid fa-file-lines"></i> Laporan
    </a>
</aside>

<main class="content-area">
    <div style="margin-bottom: 30px;">
        <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Riwayat Transaksi Donor</h1>
        <p style="color: #6b7280; font-size: 14px;">Rekapitulasi data permintaan darah yang telah terselesaikan</p>
    </div>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 25px;">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 15px;">
            <div style="display: flex; gap: 10px; flex-wrap: wrap; align-items: center;">
                <input type="date" style="padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; color: #6b7280; background: #f9fafb;">
                <span style="color: #9ca3af;">s/d</span>
                <input type="date" style="padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; color: #6b7280; background: #f9fafb;">
                
                <select style="padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; color: #4b5563; background: #f9fafb; cursor: pointer;">
                    <option>Semua Golongan</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>O+</option>
                    <option>O-</option>
                </select>
            </div>
            
            <div style="position: relative; width: 250px;">
                <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 15px; top: 12px; color: #9ca3af;"></i>
                <input type="text" placeholder="Cari RS/Pendonor..." style="width: 100%; padding: 10px 15px 10px 40px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; background: #f9fafb;">
            </div>
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; min-width: 800px;">
                <thead>
                    <tr style="border-bottom: 2px solid #f3f4f6;">
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">No</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Rumah Sakit</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Gol. Darah</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Jumlah</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Tgl Selesai</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px; color: #4b5563;">1</td>
                        <td style="padding: 18px 10px; font-weight: 600;">RS Undata Palu</td>
                        <td style="padding: 18px 10px;">A+</td>
                        <td style="padding: 18px 10px;">3 Kantong</td>
                        <td style="padding: 18px 10px;">15 Mei 2026</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #dcfce7; color: #166534; padding: 5px 10px; border-radius: 6px; font-size: 12px; font-weight: 600;">Selesai</span>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px; color: #4b5563;">2</td>
                        <td style="padding: 18px 10px; font-weight: 600;">RS Samaritan</td>
                        <td style="padding: 18px 10px;">O+</td>
                        <td style="padding: 18px 10px;">2 Kantong</td>
                        <td style="padding: 18px 10px;">18 Mei 2026</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #dcfce7; color: #166534; padding: 5px 10px; border-radius: 6px; font-size: 12px; font-weight: 600;">Selesai</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 25px; font-size: 14px; color: #6b7280; flex-wrap: wrap; gap: 15px;">
            <div>Menampilkan 1 - 2 dari 2 data</div>
            <div style="display: flex; gap: 8px; align-items: center;">
                <span style="padding: 6px 10px; cursor: pointer; color: #9ca3af;"><i class="fa-solid fa-chevron-left"></i></span>
                <span style="background: #8b0000; color: white; padding: 6px 14px; border-radius: 6px; font-weight: 600; cursor: pointer;">1</span>
                <span style="padding: 6px 10px; cursor: pointer; color: #4b5563;"><i class="fa-solid fa-chevron-right"></i></span>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>