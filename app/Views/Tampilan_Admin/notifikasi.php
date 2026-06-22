<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('admin') ?>" class="menu-item">
        <i class="fa-solid fa-gauge"></i> Dashboard
    </a>
    <a href="<?= base_url('admin/kelola_user') ?>" class="menu-item">
        <i class="fa-solid fa-users-gear"></i> Kelola User
    </a>
    <a href="<?= base_url('admin/data_donor') ?>" class="menu-item">
        <i class="fa-solid fa-droplet"></i> Data Donor
    </a>
    <a href="<?= base_url('admin/riwayat') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat
    </a>
</aside>

<main class="content-area">
    
    <div style="margin-bottom: 30px;">
        <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Notifikasi</h1>
    </div>

    <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 15px;">
            <div>
                <select style="padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; color: #4b5563; background: #f9fafb; outline: none; cursor: pointer; font-size: 13px;">
                    <option>Semua Notifikasi</option>
                    <option>Belum Dibaca</option>
                    <option>Dibaca</option>
                </select>
            </div>
            
            <div>
                <button style="background: white; border: 1px solid #e5e7eb; color: #4b5563; padding: 10px 15px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer; transition: 0.2s;">
                    Tandai semua sebagai dibaca
                </button>
            </div>
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 13px; min-width: 900px;">
                <thead>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <th style="padding-bottom: 15px; padding-right: 15px; color:#6b7280; font-weight: 600; width: 5%;">No</th>
                        <th style="padding-bottom: 15px; padding-right: 15px; color:#6b7280; font-weight: 600; width: 20%;">Judul</th>
                        <th style="padding-bottom: 15px; padding-right: 15px; color:#6b7280; font-weight: 600; width: 40%;">Pesan</th>
                        <th style="padding-bottom: 15px; padding-right: 15px; color:#6b7280; font-weight: 600; width: 20%;">Tanggal</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600; width: 15%;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 18px 0; color: #4b5563;">1</td>
                        <td style="padding: 18px 0; color: #111827; font-weight: 500;">Permintaan Donor Baru</td>
                        <td style="padding: 18px 0; color: #4b5563;">Ada permintaan donor darah dari RS Bhakti Agung.</td>
                        <td style="padding: 18px 0; color: #4b5563;">08 Mei 2025, 10:30 WIB</td>
                        <td style="padding: 18px 0;">
                            <span style="background: #ffedd5; color: #c2410c; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Belum Dibaca</span>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 18px 0; color: #4b5563;">2</td>
                        <td style="padding: 18px 0; color: #111827; font-weight: 500;">Donor Darah Diterima</td>
                        <td style="padding: 18px 0; color: #4b5563;">Permintaan donor darah Anda telah diterima.</td>
                        <td style="padding: 18px 0; color: #4b5563;">07 Mei 2025, 15:45 WIB</td>
                        <td style="padding: 18px 0;">
                            <span style="background: #dcfce7; color: #166534; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Dibaca</span>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 18px 0; color: #4b5563;">3</td>
                        <td style="padding: 18px 0; color: #111827; font-weight: 500;">Stok Darah Menipis</td>
                        <td style="padding: 18px 0; color: #4b5563;">Stok darah golongan O menipis. Mohon bantu sebarkan informasi.</td>
                        <td style="padding: 18px 0; color: #4b5563;">06 Mei 2025, 09:20 WIB</td>
                        <td style="padding: 18px 0;">
                            <span style="background: #ffedd5; color: #c2410c; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Belum Dibaca</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 25px; font-size: 13px; color: #6b7280; flex-wrap: wrap; gap: 15px;">
            <div>Total Data: 3 Notifikasi</div>
            <div style="display: flex; gap: 8px; align-items: center;">
                <span style="padding: 6px 10px; cursor: pointer; border: 1px solid #e5e7eb; border-radius: 6px; color: #9ca3af;"><i class="fa-solid fa-chevron-left"></i></span>
                <span style="color: #2563eb; font-weight: 600; padding: 6px 12px;">1</span>
                <span style="padding: 6px 10px; cursor: pointer; border: 1px solid #e5e7eb; border-radius: 6px; color: #9ca3af;"><i class="fa-solid fa-chevron-right"></i></span>
            </div>
        </div>

    </div>

    <div style="margin-top: 40px; color: #9ca3af; font-size: 12px;">
        &copy; 2026 SiapDonor. All rights reserved.
    </div>

</main>
<?= $this->endSection() ?>