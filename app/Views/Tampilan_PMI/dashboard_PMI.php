<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('dashboard-pmi') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="#" class="menu-item">
        <i class="fa-solid fa-hand-holding-droplet"></i> Data Donor
    </a>
    <a href="#" class="menu-item">
        <i class="fa-solid fa-magnifying-glass"></i> Cari Donor
    </a>
    <a href="#" class="menu-item">
        <i class="fa-solid fa-file-invoice-dollar"></i> Permintaan
    </a>
    <a href="#" class="menu-item">
        <i class="fa-solid fa-globe"></i> Riwayat
    </a>
</aside>

<main class="content-area">
    
    <?php
        $nama_hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        $nama_bulan = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        
        $hari_ini = $nama_hari[date('w')];
        $tanggal_ini = date('d');
        $bulan_ini = $nama_bulan[date('n')];
        $tahun_ini = date('Y');
        
        $tanggal_sekarang = $hari_ini . ", " . $tanggal_ini . " " . $bulan_ini . " " . $tahun_ini;
    ?>

    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px;">
        <div>
            <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Dashboard</h1>
            <p style="color: #6b7280; font-size: 14px;">Selamat datang, PMI Makassar!</p>
        </div>
        <div style="color: #6b7280; font-size: 13px; display: flex; align-items: center; gap: 8px; background: white; padding: 8px 15px; border-radius: 8px; border: 1px solid #e5e7eb;">
            <i class="fa-regular fa-calendar"></i> <?= $tanggal_sekarang ?>
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 30px;">
        
        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                <div style="background: #fee2e2; color: #dc2626; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                    <i class="fa-solid fa-users"></i>
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
                <div style="background: #dcfce7; color: #16a34a; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                    <i class="fa-solid fa-user-check"></i>
                </div>
                <div>
                    <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Donor Aktif</p>
                    <h3 style="font-size: 22px; color: #111827;">892</h3>
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
                    <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Riwayat Permintaan</p>
                    <h3 style="font-size: 22px; color: #111827;">156</h3>
                </div>
            </div>
            <a href="#" style="color: #dc2626; font-size: 12px; font-weight: 600; text-decoration: none; text-align: right;">Lihat detail</a>
        </div>

    </div>

    <div style="display: grid; grid-template-columns: 2.5fr 1fr; gap: 20px;">
        
        <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
            <h3 style="margin-bottom: 20px; font-size: 16px; color: #111827;">Aktivitas Terbaru</h3>
            
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 13px;">
                <thead>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">No</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Aktivitas</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Tanggal</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Oleh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">1</td>
                        <td style="padding: 15px 0; color: #111827;">Donor baru ditambahkan</td>
                        <td style="padding: 15px 0; color: #4b5563;">20 Mei 2025</td>
                        <td style="padding: 15px 0; color: #111827;">PMI Makassar</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">2</td>
                        <td style="padding: 15px 0; color: #111827;">Permintaan darah baru</td>
                        <td style="padding: 15px 0; color: #4b5563;">20 Mei 2025</td>
                        <td style="padding: 15px 0; color: #111827;">RS Wahidin</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">3</td>
                        <td style="padding: 15px 0; color: #111827;">Donor diperbarui</td>
                        <td style="padding: 15px 0; color: #4b5563;">19 Mei 2025</td>
                        <td style="padding: 15px 0; color: #111827;">PMI Makassar</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">4</td>
                        <td style="padding: 15px 0; color: #111827;">Status permintaan diubah</td>
                        <td style="padding: 15px 0; color: #4b5563;">19 Mei 2025</td>
                        <td style="padding: 15px 0; color: #111827;">PMI Makassar</td>
                    </tr>
                    <tr>
                        <td style="padding: 15px 0; color: #4b5563;">5</td>
                        <td style="padding: 15px 0; color: #111827;">Donor baru ditambahkan</td>
                        <td style="padding: 15px 0; color: #4b5563;">18 Mei 2025</td>
                        <td style="padding: 15px 0; color: #111827;">PMI Makassar</td>
                    </tr>
                </tbody>
            </table>
            
            <div style="margin-top: 20px;">
                <a href="#" style="color: #dc2626; font-size: 13px; font-weight: 600; text-decoration: none;">Lihat semua aktivitas</a>
            </div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 20px; align-self: start;">
            
            <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
                <h3 style="margin-bottom: 15px; font-size: 16px; color: #111827;">Aksi Cepat</h3>
                <button style="background: #8b0000; color: white; width: 100%; padding: 10px; border-radius: 6px; border: none; cursor: pointer; font-weight: 600; margin-bottom: 10px; transition: 0.2s;">+ Tambah Donor</button>
                <button style="background: white; color: #8b0000; width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #8b0000; cursor: pointer; font-weight: 600; margin-bottom: 10px; transition: 0.2s;">Cari Donor</button>
                <button style="background: white; color: #8b0000; width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #8b0000; cursor: pointer; font-weight: 600; transition: 0.2s;">Buat Permintaan</button>
            </div>

            <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
                <h3 style="margin-bottom: 15px; font-size: 16px; color: #111827;">Informasi</h3>
                <p style="color: #6b7280; font-size: 13px; line-height: 1.6;">
                    Pastikan data donor selalu diperbarui agar pencarian donor lebih akurat dan cepat.
                </p>
            </div>

        </div>
        
    </div>

    <div style="margin-top: 40px; color: #9ca3af; font-size: 12px;">
        &copy; 2025 SiapDonor. All rights reserved.
    </div>

</main>
<?= $this->endSection() ?>