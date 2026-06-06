<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('admin') ?>" class="menu-item">
        <i class="fa-solid fa-gauge"></i> Dashboard
    </a>
    <a href="<?= base_url('admin/kelola_user') ?>" class="menu-item">
        <i class="fa-solid fa-users-gear"></i> Kelola User
    </a>
    <a href="<?= base_url('admin/data_donor') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-droplet"></i> Data Donor
    </a>
    <a href="<?= base_url('admin/riwayat') ?>"  class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat
    </a>
</aside>
    
    <div style="margin-top: 30px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
        <a href="#" class="menu-item">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
    </div>
</aside>

<main class="content-area">
    
    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px;">
        <div>
            <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Dashboard</h1>
            <p style="color: #6b7280; font-size: 14px;">Selamat datang, Admin!</p>
        </div>
        <div style="color: #6b7280; font-size: 13px; display: flex; align-items: center; gap: 8px; background: white; padding: 8px 15px; border-radius: 8px; border: 1px solid #e5e7eb;">
            <i class="fa-regular fa-calendar"></i> Selasa, 20 Mei 2025
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 30px;">
        
        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                <div style="background: #fee2e2; color: #dc2626; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                    <i class="fa-solid fa-id-badge"></i>
                </div>
                <div>
                    <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Total User</p>
                    <h3 style="font-size: 22px; color: #111827;">24</h3>
                </div>
            </div>
            <a href="#" style="color: #dc2626; font-size: 12px; font-weight: 600; text-decoration: none; text-align: right;">Lihat detail</a>
        </div>

        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                <div style="background: #dcfce7; color: #16a34a; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                    <i class="fa-solid fa-user-plus"></i>
                </div>
                <div>
                    <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Total Donor</p>
                    <h3 style="font-size: 22px; color: #111827;">1.245</h3>
                </div>
            </div>
            <a href="#" style="color: #dc2626; font-size: 12px; font-weight: 600; text-decoration: none; text-align: right;">Lihat detail</a>
        </div>

        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                <div style="background: #ffedd5; color: #ea580c; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                    <i class="fa-solid fa-file-invoice"></i>
                </div>
                <div>
                    <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Permintaan Masuk</p>
                    <h3 style="font-size: 22px; color: #111827;">24</h3>
                </div>
            </div>
            <a href="#" style="color: #dc2626; font-size: 12px; font-weight: 600; text-decoration: none; text-align: right;">Lihat detail</a>
        </div>

        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                <div style="background: #f3e8ff; color: #9333ea; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </div>
                <div>
                    <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Aktivitas Permintaan</p>
                    <h3 style="font-size: 22px; color: #111827;">156</h3>
                </div>
            </div>
            <a href="#" style="color: #dc2626; font-size: 12px; font-weight: 600; text-decoration: none; text-align: right;">Lihat detail</a>
        </div>

    </div>

    <div style="display: grid; grid-template-columns: 2.5fr 1fr; gap: 20px;">
        
        <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
            <h3 style="margin-bottom: 20px; font-size: 16px; color: #111827;">Aktivitas Sistem Terbaru</h3>
            
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 13px;">
                <thead>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">No</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Aktivitas</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Waktu</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Oleh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">1</td>
                        <td style="padding: 15px 0; color: #111827;">User baru ditambahkan</td>
                        <td style="padding: 15px 0; color: #4b5563;">20 Mei 2025 10:30</td>
                        <td style="padding: 15px 0; color: #111827;">Admin</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">2</td>
                        <td style="padding: 15px 0; color: #111827;">Donor baru ditambahkan</td>
                        <td style="padding: 15px 0; color: #4b5563;">20 Mei 2025 09:15</td>
                        <td style="padding: 15px 0; color: #111827;">PMI Makassar</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">3</td>
                        <td style="padding: 15px 0; color: #111827;">Permintaan darah baru</td>
                        <td style="padding: 15px 0; color: #4b5563;">19 Mei 2025 16:45</td>
                        <td style="padding: 15px 0; color: #111827;">RS Wahidin</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">4</td>
                        <td style="padding: 15px 0; color: #111827;">Data donor diperbarui</td>
                        <td style="padding: 15px 0; color: #4b5563;">19 Mei 2025 11:20</td>
                        <td style="padding: 15px 0; color: #111827;">PMI Makassar</td>
                    </tr>
                    <tr>
                        <td style="padding: 15px 0; color: #4b5563;">5</td>
                        <td style="padding: 15px 0; color: #111827;">Status permintaan diubah</td>
                        <td style="padding: 15px 0; color: #4b5563;">18 Mei 2025 14:10</td>
                        <td style="padding: 15px 0; color: #111827;">System</td>
                    </tr>
                </tbody>
            </table>
            
            <div style="margin-top: 20px;">
                <a href="#" style="color: #dc2626; font-size: 13px; font-weight: 600; text-decoration: none;">Lihat semua aktivitas</a>
            </div>
        </div>

        <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb; align-self: start;">
            <h3 style="margin-bottom: 15px; font-size: 16px; color: #111827;">Informasi</h3>
            <p style="color: #6b7280; font-size: 13px; line-height: 1.6;">
                Kelola sistem, user, dan pantau aktivitas seluruh pengguna di SiapDonor.
            </p>
        </div>
        
    </div>

    <div style="margin-top: 40px; color: #9ca3af; font-size: 12px;">
        &copy; 2025 SiapDonor. All rights reserved.
    </div>

</main>

<?= $this->endSection() ?>