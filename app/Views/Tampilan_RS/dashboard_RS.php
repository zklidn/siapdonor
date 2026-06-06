<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('dashboard-rs') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="#" class="menu-item">
        <i class="fa-solid fa-magnifying-glass"></i> Cari Donor
    </a>
    <a href="#" class="menu-item">
        <i class="fa-solid fa-clipboard-list"></i> Permintaan Darah
    </a>
    <a href="#" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat
    </a>
    
    <div style="margin-top: 30px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
        <a href="#" class="menu-item">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
    </div>
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
            <p style="color: #6b7280; font-size: 14px;">Selamat datang, RS Wahidin!</p>
        </div>
        <div style="color: #6b7280; font-size: 13px; display: flex; align-items: center; gap: 8px; background: white; padding: 8px 15px; border-radius: 8px; border: 1px solid #e5e7eb;">
            <i class="fa-regular fa-calendar"></i> <?= $tanggal_sekarang ?>
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 30px;">
        
        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                <div style="background: #fee2e2; color: #dc2626; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                    <i class="fa-solid fa-file-contract"></i>
                </div>
                <div>
                    <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Permintaan Aktif</p>
                    <h3 style="font-size: 22px; color: #111827;">12</h3>
                </div>
            </div>
            <a href="#" style="color: #dc2626; font-size: 12px; font-weight: 600; text-decoration: none; text-align: right;">Lihat detail</a>
        </div>

        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                <div style="background: #dbeafe; color: #2563eb; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                    <i class="fa-solid fa-user-check"></i>
                </div>
                <div>
                    <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Donor Ditemukan</p>
                    <h3 style="font-size: 22px; color: #111827;">36</h3>
                </div>
            </div>
            <a href="#" style="color: #dc2626; font-size: 12px; font-weight: 600; text-decoration: none; text-align: right;">Lihat detail</a>
        </div>

        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: space-between;">
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                <div style="background: #ffedd5; color: #ea580c; width: 45px; height: 45px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                </div>
                <div>
                    <p style="color: #6b7280; font-size: 12px; margin-bottom: 3px;">Riwayat Permintaan</p>
                    <h3 style="font-size: 22px; color: #111827;">78</h3>
                </div>
            </div>
            <a href="#" style="color: #dc2626; font-size: 12px; font-weight: 600; text-decoration: none; text-align: right;">Lihat detail</a>
        </div>

    </div>

    <div style="display: grid; grid-template-columns: 2.5fr 1fr; gap: 20px;">
        
        <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
            <h3 style="margin-bottom: 20px; font-size: 16px; color: #111827;">Permintaan Terbaru</h3>
            
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 13px;">
                <thead>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">No</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Pasien</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Gol. Darah</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Jumlah</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Status</th>
                        <th style="padding-bottom: 15px; color:#6b7280; font-weight: 600;">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">1</td>
                        <td style="padding: 15px 0; color: #111827;">Andi</td>
                        <td style="padding: 15px 0; color: #111827; font-weight: 600;">O+</td>
                        <td style="padding: 15px 0; color: #4b5563;">3</td>
                        <td style="padding: 15px 0;">
                            <span style="background: #ffedd5; color: #c2410c; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Pending</span>
                        </td>
                        <td style="padding: 15px 0; color: #4b5563;">20 Mei 2025</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">2</td>
                        <td style="padding: 15px 0; color: #111827;">Siti</td>
                        <td style="padding: 15px 0; color: #111827; font-weight: 600;">A-</td>
                        <td style="padding: 15px 0; color: #4b5563;">2</td>
                        <td style="padding: 15px 0;">
                            <span style="background: #dbeafe; color: #1d4ed8; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Diproses</span>
                        </td>
                        <td style="padding: 15px 0; color: #4b5563;">18 Mei 2025</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">3</td>
                        <td style="padding: 15px 0; color: #111827;">Budi</td>
                        <td style="padding: 15px 0; color: #111827; font-weight: 600;">B+</td>
                        <td style="padding: 15px 0; color: #4b5563;">4</td>
                        <td style="padding: 15px 0;">
                            <span style="background: #dcfce7; color: #166534; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Selesai</span>
                        </td>
                        <td style="padding: 15px 0; color: #4b5563;">18 Mei 2025</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">4</td>
                        <td style="padding: 15px 0; color: #111827;">Rina</td>
                        <td style="padding: 15px 0; color: #111827; font-weight: 600;">AB+</td>
                        <td style="padding: 15px 0; color: #4b5563;">2</td>
                        <td style="padding: 15px 0;">
                            <span style="background: #dbeafe; color: #1d4ed8; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Diproses</span>
                        </td>
                        <td style="padding: 15px 0; color: #4b5563;">17 Mei 2025</td>
                    </tr>
                    <tr>
                        <td style="padding: 15px 0; color: #4b5563;">5</td>
                        <td style="padding: 15px 0; color: #111827;">Doni</td>
                        <td style="padding: 15px 0; color: #111827; font-weight: 600;">O-</td>
                        <td style="padding: 15px 0; color: #4b5563;">1</td>
                        <td style="padding: 15px 0;">
                            <span style="background: #dcfce7; color: #166534; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Selesai</span>
                        </td>
                        <td style="padding: 15px 0; color: #4b5563;">16 Mei 2025</td>
                    </tr>
                </tbody>
            </table>
            
            <div style="margin-top: 20px;">
                <a href="#" style="color: #dc2626; font-size: 13px; font-weight: 600; text-decoration: none;">Lihat semua permintaan</a>
            </div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 20px; align-self: start;">
            
            <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
                <h3 style="margin-bottom: 15px; font-size: 16px; color: #111827;">Aksi Cepat</h3>
                <button style="background: #8b0000; color: white; width: 100%; padding: 10px; border-radius: 6px; border: none; cursor: pointer; font-weight: 600; margin-bottom: 10px; transition: 0.2s;">Cari Donor</button>
                <button style="background: white; color: #8b0000; width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #8b0000; cursor: pointer; font-weight: 600; transition: 0.2s;">Buat Permintaan</button>
            </div>

            <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
                <h3 style="margin-bottom: 15px; font-size: 16px; color: #111827;">Informasi</h3>
                <p style="color: #6b7280; font-size: 13px; line-height: 1.6;">
                    Cari donor yang sesuai dengan kebutuhan pasien dengan cepat dan mudah.
                </p>
            </div>

        </div>
        
    </div>

    <div style="margin-top: 40px; color: #9ca3af; font-size: 12px;">
        &copy; 2025 SiapDonor. All rights reserved.
    </div>

</main>
<?= $this->endSection() ?>