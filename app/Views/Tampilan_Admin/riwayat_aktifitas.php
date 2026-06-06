<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('dashboard') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="#" class="menu-item">
        <i class="fa-solid fa-users-gear"></i> Kelola User
    </a>
    <a href="#" class="menu-item">
        <i class="fa-solid fa-hand-holding-droplet"></i> Data Donor
    </a>
    <a href="#" class="menu-item">
        <i class="fa-solid fa-globe"></i> Riwayat
    </a>
</aside>

<main class="content-area">
    <h1 style="margin-bottom: 25px; color: #111827;">Riwayat Aktivitas</h1>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 25px;">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 15px;">
            
            <div style="position: relative; width: 280px;">
                <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 15px; top: 12px; color: #9ca3af;"></i>
                <input type="text" placeholder="Cari aktivitas..." style="width: 100%; padding: 10px 15px 10px 40px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 14px; background: #f9fafb;">
            </div>
            
            <select style="padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 14px; color: #4b5563; cursor: pointer; background: #f9fafb;">
                <option>Semua Jenis</option>
                <option>Login/Logout</option>
                <option>Penambahan Data</option>
                <option>Perubahan Data</option>
            </select>
            
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; min-width: 800px;">
                <thead>
                    <tr style="border-bottom: 2px solid #f3f4f6;">
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">No</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Aktivitas</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Pengguna</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Waktu</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">IP Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #f3f4f6; transition: 0.2s;">
                        <td style="padding: 18px 10px; color: #4b5563;">1</td>
                        <td style="padding: 18px 10px; font-weight: 500; color: #111827;">Login ke sistem</td>
                        <td style="padding: 18px 10px; color: #4b5563;">Admin Utama</td>
                        <td style="padding: 18px 10px; color: #4b5563;">20 Mei 2026 10:30</td>
                        <td style="padding: 18px 10px; color: #4b5563;">192.168.1.10</td>
                    </tr>

                    <tr style="border-bottom: 1px solid #f3f4f6; transition: 0.2s;">
                        <td style="padding: 18px 10px; color: #4b5563;">2</td>
                        <td style="padding: 18px 10px; font-weight: 500; color: #111827;">Menambah data donor</td>
                        <td style="padding: 18px 10px; color: #4b5563;">PMI Makassar</td>
                        <td style="padding: 18px 10px; color: #4b5563;">20 Mei 2026 09:15</td>
                        <td style="padding: 18px 10px; color: #4b5563;">192.168.1.15</td>
                    </tr>

                    <tr style="border-bottom: 1px solid #f3f4f6; transition: 0.2s;">
                        <td style="padding: 18px 10px; color: #4b5563;">3</td>
                        <td style="padding: 18px 10px; font-weight: 500; color: #111827;">Membuat permintaan</td>
                        <td style="padding: 18px 10px; color: #4b5563;">RS Wahidin</td>
                        <td style="padding: 18px 10px; color: #4b5563;">19 Mei 2026 16:45</td>
                        <td style="padding: 18px 10px; color: #4b5563;">192.168.1.20</td>
                    </tr>

                    <tr style="border-bottom: 1px solid #f3f4f6; transition: 0.2s;">
                        <td style="padding: 18px 10px; color: #4b5563;">4</td>
                        <td style="padding: 18px 10px; font-weight: 500; color: #111827;">Update status permintaan</td>
                        <td style="padding: 18px 10px; color: #4b5563;">PMI Makassar</td>
                        <td style="padding: 18px 10px; color: #4b5563;">19 Mei 2026 11:30</td>
                        <td style="padding: 18px 10px; color: #4b5563;">192.168.1.15</td>
                    </tr>

                    <tr style="border-bottom: 1px solid #f3f4f6; transition: 0.2s;">
                        <td style="padding: 18px 10px; color: #4b5563;">5</td>
                        <td style="padding: 18px 10px; font-weight: 500; color: #111827;">Logout dari sistem</td>
                        <td style="padding: 18px 10px; color: #4b5563;">RS Stella Maris</td>
                        <td style="padding: 18px 10px; color: #4b5563;">18 Mei 2026 14:10</td>
                        <td style="padding: 18px 10px; color: #4b5563;">192.168.1.18</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 25px; font-size: 14px; color: #6b7280; flex-wrap: wrap; gap: 15px;">
            <div>Menampilkan 1 - 5 dari 156 data</div>
            
            <div style="display: flex; gap: 8px; align-items: center;">
                <span style="padding: 6px 10px; cursor: pointer; color: #9ca3af;"><i class="fa-solid fa-chevron-left"></i></span>
                <span style="background: #8b0000; color: white; padding: 6px 14px; border-radius: 6px; font-weight: 600; cursor: pointer;">1</span>
                <span style="padding: 6px 14px; cursor: pointer; border-radius: 6px; transition: 0.2s;">2</span>
                <span style="padding: 6px 14px; cursor: pointer; border-radius: 6px; transition: 0.2s;">3</span>
                <span style="color: #9ca3af; padding: 0 5px;">...</span>
                <span style="padding: 6px 14px; cursor: pointer; border-radius: 6px; transition: 0.2s;">32</span>
                <span style="padding: 6px 10px; cursor: pointer; color: #4b5563;"><i class="fa-solid fa-chevron-right"></i></span>
            </div>
        </div>
        
    </div>
</main>

<?= $this->endSection() ?>