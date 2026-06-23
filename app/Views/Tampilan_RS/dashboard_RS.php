<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('rs') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('rs/cari_donor') ?>" class="menu-item">
        <i class="fa-solid fa-magnifying-glass"></i> Cari Donor
    </a>
    <a href="<?= base_url('rs/permintaan_darah') ?>" class="menu-item">
        <i class="fa-solid fa-file-invoice"></i> Permintaan Darah
    </a>
    <a href="<?= base_url('rs/riwayat_permintaan') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Permintaan
    </a>
    <a href="<?= base_url('rs/laporan_rs') ?>" class="menu-item">
        <i class="fa-solid fa-file-lines"></i> Laporan
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
            <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px; font-weight: 700;">Dashboard</h1>
            <p style="color: #6b7280; font-size: 14px;">Selamat datang, RS Wahidin!</p>
        </div>
        <div style="color: #6b7280; font-size: 13px; display: flex; align-items: center; gap: 8px; background: white; padding: 8px 15px; border-radius: 8px; border: 1px solid #e5e7eb;">
            <i class="fa-regular fa-calendar"></i> <?= $tanggal_sekarang ?>
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 30px;">
        
        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 16px;">
            <div style="width: 52px; height: 52px; border-radius: 50%; border: 1px solid #fca5a5; background: #fff5f5; color: #8b0000; display: flex; justify-content: center; align-items: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa-solid fa-calendar-day"></i>
            </div>
            <div>
                <p style="color: #4b5563; font-size: 12px; font-weight: 600; margin: 0 0 2px 0;">Kebutuhan Darah Hari Ini</p>
                <h3 style="font-size: 24px; font-weight: 700; color: #111827; margin: 0 0 2px 0; line-height: 1.2;"><?= isset($kebutuhan_hari_ini) ? $kebutuhan_hari_ini : '18' ?></h3>
                <p style="color: #9ca3af; font-size: 11px; margin: 0;">Pasien membutuhkan</p>
            </div>
        </div>

        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 16px;">
            <div style="width: 52px; height: 52px; border-radius: 50%; border: 1px solid #fca5a5; background: #fff5f5; color: #8b0000; display: flex; justify-content: center; align-items: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa-solid fa-spinner"></i>
            </div>
            <div>
                <p style="color: #4b5563; font-size: 12px; font-weight: 600; margin: 0 0 2px 0;">Permintaan Aktif</p>
                <h3 style="font-size: 24px; font-weight: 700; color: #111827; margin: 0 0 2px 0; line-height: 1.2;"><?= isset($permintaan_aktif) ? $permintaan_aktif : '7' ?></h3>
                <p style="color: #9ca3af; font-size: 11px; margin: 0;">Permintaan sedang diprosses</p>
            </div>
        </div>

        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 16px;">
            <div style="width: 52px; height: 52px; border-radius: 50%; border: 1px solid #fca5a5; background: #fff5f5; color: #8b0000; display: flex; justify-content: center; align-items: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa-solid fa-users"></i>
            </div>
            <div>
                <p style="color: #4b5563; font-size: 12px; font-weight: 600; margin: 0 0 2px 0;">Donor Tersedia</p>
                <h3 style="font-size: 24px; font-weight: 700; color: #111827; margin: 0 0 2px 0; line-height: 1.2;"><?= isset($donor_tersedia) ? $donor_tersedia : '124' ?></h3>
                <p style="color: #9ca3af; font-size: 11px; margin: 0;">Donor siap dihubungi</p>
            </div>
        </div>

        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 16px;">
            <div style="width: 52px; height: 52px; border-radius: 50%; border: 1px solid #fca5a5; background: #fff5f5; color: #8b0000; display: flex; justify-content: center; align-items: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <div>
                <p style="color: #4b5563; font-size: 12px; font-weight: 600; margin: 0 0 2px 0;">Permintaan Selesai</p>
                <h3 style="font-size: 24px; font-weight: 700; color: #111827; margin: 0 0 2px 0; line-height: 1.2;"><?= isset($permintaan_selesai) ? $permintaan_selesai : '156' ?></h3>
                <p style="color: #9ca3af; font-size: 11px; margin: 0;">Bulan ini</p>
            </div>
        </div>

    </div>

    <div style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 20px; margin-bottom: 25px;">
        
        <div style="background: white; padding: 24px; border-radius: 12px; border: 1px solid #e5e7eb;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h3 style="font-size: 16px; font-weight: 700; color: #111827; margin: 0;">Kebutuhan Darah Mendesak</h3>
                <a href="#" style="color: #8b0000; font-size: 12px; font-weight: 600; text-decoration: none;">Lihat Semua <i class="fa-solid fa-angle-down"></i></a>
            </div>
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 13px;">
                <thead>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <th style="padding-bottom: 10px; color: #6b7280; font-weight: 500;">Gol. Darah</th>
                        <th style="padding-bottom: 10px; color: #6b7280; font-weight: 500; text-align: center;">Jumlah Kantong</th>
                        <th style="padding-bottom: 10px; color: #6b7280; font-weight: 500;">Pasien</th>
                        <th style="padding-bottom: 10px; color: #6b7280; font-weight: 500; text-align: center;">Prioritas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 12px 0;"><span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 3px 8px; border-radius: 5px; font-size: 11px; border: 1px solid #fca5a5;">O+</span></td>
                        <td style="padding: 12px 0; text-align: center; font-weight: 600;">3</td>
                        <td style="padding: 12px 0; color: #374151;">Andi Saputra</td>
                        <td style="padding: 12px 0; text-align: center;"><span style="background: #fee2e2; color: #dc2626; padding: 3px 10px; border-radius: 6px; font-size: 11px; font-weight: 700;">Tinggi</span></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 12px 0;"><span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 3px 8px; border-radius: 5px; font-size: 11px; border: 1px solid #fca5a5;">A-</span></td>
                        <td style="padding: 12px 0; text-align: center; font-weight: 600;">2</td>
                        <td style="padding: 12px 0; color: #374151;">Siti Aisyah</td>
                        <td style="padding: 12px 0; text-align: center;"><span style="background: #fee2e2; color: #dc2626; padding: 3px 10px; border-radius: 6px; font-size: 11px; font-weight: 700;">Tinggi</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 12px 0;"><span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 3px 8px; border-radius: 5px; font-size: 11px; border: 1px solid #fca5a5;">B+</span></td>
                        <td style="padding: 12px 0; text-align: center; font-weight: 600;">1</td>
                        <td style="padding: 12px 0; color: #374151;">Dewi Lestari</td>
                        <td style="padding: 12px 0; text-align: center;"><span style="background: #ffedd5; color: #ea580c; padding: 3px 10px; border-radius: 6px; font-size: 11px; font-weight: 700;">Sedang</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="background: white; padding: 24px; border-radius: 12px; border: 1px solid #e5e7eb;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h3 style="font-size: 16px; font-weight: 700; color: #111827; margin: 0;">Permintaan Darah Terbaru</h3>
                <a href="#" style="color: #8b0000; font-size: 12px; font-weight: 600; text-decoration: none;">Lihat Semua <i class="fa-solid fa-angle-down"></i></a>
            </div>
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 13px;">
                <thead>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <th style="padding-bottom: 10px; color: #6b7280; font-weight: 500;">No</th>
                        <th style="padding-bottom: 10px; color: #6b7280; font-weight: 500;">Tanggal</th>
                        <th style="padding-bottom: 10px; color: #6b7280; font-weight: 500; text-align: center;">Gol. Darah</th>
                        <th style="padding-bottom: 10px; color: #6b7280; font-weight: 500; text-align: center;">Jumlah</th>
                        <th style="padding-bottom: 10px; color: #6b7280; font-weight: 500; text-align: center;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 11px 0; color: #6b7280;">1</td>
                        <td style="padding: 11px 0; color: #374151;">20 Mei 2026, 10:30</td>
                        <td style="padding: 11px 0; text-align: center; font-weight: 700;">O+</td>
                        <td style="padding: 11px 0; text-align: center; color: #4b5563;">3 Kantong</td>
                        <td style="padding: 11px 0; text-align: center;"><span style="color: #ea580c; font-weight: 600;">Proses</span></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 11px 0; color: #6b7280;">2</td>
                        <td style="padding: 11px 0; color: #374151;">20 Mei 2026, 09:15</td>
                        <td style="padding: 11px 0; text-align: center; font-weight: 700;">A-</td>
                        <td style="padding: 11px 0; text-align: center; color: #4b5563;">2 Kantong</td>
                        <td style="padding: 11px 0; text-align: center;"><span style="color: #ea580c; font-weight: 600;">Proses</span></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 11px 0; color: #6b7280;">3</td>
                        <td style="padding: 11px 0; color: #374151;">20 Mei 2026, 08:45</td>
                        <td style="padding: 11px 0; text-align: center; font-weight: 700;">B+</td>
                        <td style="padding: 11px 0; text-align: center; color: #4b5563;">4 Kantong</td>
                        <td style="padding: 11px 0; text-align: center;"><span style="color: #0284c7; font-weight: 600;">Baru</span></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 11px 0; color: #6b7280;">4</td>
                        <td style="padding: 11px 0; color: #374151;">19 Mei 2026, 14:20</td>
                        <td style="padding: 11px 0; text-align: center; font-weight: 700;">AB+</td>
                        <td style="padding: 11px 0; text-align: center; color: #4b5563;">2 Kantong</td>
                        <td style="padding: 11px 0; text-align: center;"><span style="color: #16a34a; font-weight: 600;">Selesai</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 20px;">
        
        <div style="background: white; padding: 24px; border-radius: 12px; border: 1px solid #e5e7eb;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h3 style="font-size: 16px; font-weight: 700; color: #111827; margin: 0;">Donor Terdekat Tersedia</h3>
                <a href="#" style="color: #8b0000; font-size: 12px; font-weight: 600; text-decoration: none;">Lihat Semua <i class="fa-solid fa-angle-down"></i></a>
            </div>
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 13px;">
                <thead>
                    <tr style="border-bottom: 1px solid #e5e7eb;">
                        <th style="padding-bottom: 10px; color: #6b7280; font-weight: 500;">Nama</th>
                        <th style="padding-bottom: 10px; color: #6b7280; font-weight: 500; text-align: center;">Gol. Darah</th>
                        <th style="padding-bottom: 10px; color: #6b7280; font-weight: 500;">Lokasi</th>
                        <th style="padding-bottom: 10px; color: #6b7280; font-weight: 500;">Jarak</th>
                        <th style="padding-bottom: 10px; color: #6b7280; font-weight: 500; text-align: center;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Backend passing data donor terdekat ter-filter berdasar kecamatan palu/sigi/donggala
                    $donor_terdekat = isset($list_donor_terdekat) ? $list_donor_terdekat : [
                        ['nama' => 'Andi Pratama', 'gol' => 'O+', 'lokasi' => 'Mantikulore, Palu', 'jarak' => '2.4 km'],
                        ['nama' => 'Siti Nurhaliza', 'gol' => 'A-', 'lokasi' => 'Palu Barat, Palu', 'jarak' => '3.1 km'],
                        ['nama' => 'Rizky Maulana', 'gol' => 'B+', 'lokasi' => 'Biromaru, Sigi', 'jarak' => '4.2 km'],
                        ['nama' => 'Dewi Lestari', 'gol' => 'AB+', 'lokasi' => 'Palu Selatan, Palu', 'jarak' => '4.8 km'],
                        ['nama' => 'Fajar Nugroho', 'gol' => 'A-', 'lokasi' => 'Banawa, Donggala', 'jarak' => '5.3 km']
                    ];
                    foreach ($donor_terdekat as $d): ?>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 11px 0; display: flex; align-items: center; gap: 8px; font-weight: 500; color: #111827;">
                            <div style="width: 24px; height: 24px; border-radius: 50%; background: #e5e7eb; display: flex; align-items: center; justify-content: center; color: #9ca3af; font-size: 11px;"><i class="fa-solid fa-user"></i></div>
                            <?= $d['nama'] ?>
                        </td>
                        <td style="padding: 11px 0; text-align: center;"><span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 2px 6px; border-radius: 5px; font-size: 11px; border: 1px solid #fca5a5;"><?= $d['gol'] ?></span></td>
                        <td style="padding: 11px 0; color: #4b5563;"><?= $d['lokasi'] ?></td>
                        <td style="padding: 11px 0; color: #4b5563;"><?= $d['jarak'] ?></td>
                        <td style="padding: 11px 0; text-align: center;"><span style="background: #dcfce7; color: #166534; padding: 2px 8px; border-radius: 12px; font-size: 11px; font-weight: 600;">Tersedia</span></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div style="background: white; padding: 24px; border-radius: 12px; border: 1px solid #e5e7eb;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h3 style="font-size: 16px; font-weight: 700; color: #111827; margin: 0;">Kebutuhan Darah Berdasarkan Golongan</h3>
                <a href="#" style="color: #6b7280; font-size: 12px; text-decoration: none;">Lihat Semua <i class="fa-solid fa-angle-down"></i></a>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px; text-align: center;">
                <div><i class="fa-solid fa-droplet" style="color: #8b0000; font-size: 16px; margin-bottom: 4px;"></i> <div style="font-size: 12px; font-weight: 700; color: #111827;">A+</div><span style="font-size: 11px; color: #6b7280;">24 Ktg</span></div>
                <div><i class="fa-solid fa-droplet" style="color: #8b0000; font-size: 16px; margin-bottom: 4px;"></i> <div style="font-size: 12px; font-weight: 700; color: #111827;">A-</div><span style="font-size: 11px; color: #6b7280;">12 Ktg</span></div>
                <div><i class="fa-solid fa-droplet" style="color: #8b0000; font-size: 16px; margin-bottom: 4px;"></i> <div style="font-size: 12px; font-weight: 700; color: #111827;">B+</div><span style="font-size: 11px; color: #6b7280;">18 Ktg</span></div>
                <div><i class="fa-solid fa-droplet" style="color: #8b0000; font-size: 16px; margin-bottom: 4px;"></i> <div style="font-size: 12px; font-weight: 700; color: #111827;">B-</div><span style="font-size: 11px; color: #6b7280;">9 Ktg</span></div>
                
                <div><i class="fa-solid fa-droplet" style="color: #8b0000; font-size: 16px; margin-bottom: 4px;"></i> <div style="font-size: 12px; font-weight: 700; color: #111827;">O+</div><span style="font-size: 11px; color: #6b7280;">28 Ktg</span></div>
                <div><i class="fa-solid fa-droplet" style="color: #8b0000; font-size: 16px; margin-bottom: 4px;"></i> <div style="font-size: 12px; font-weight: 700; color: #111827;">O-</div><span style="font-size: 11px; color: #6b7280;">11 Ktg</span></div>
                <div><i class="fa-solid fa-droplet" style="color: #8b0000; font-size: 16px; margin-bottom: 4px;"></i> <div style="font-size: 12px; font-weight: 700; color: #111827;">AB+</div><span style="font-size: 11px; color: #6b7280;">7 Ktg</span></div>
                <div><i class="fa-solid fa-droplet" style="color: #8b0000; font-size: 16px; margin-bottom: 4px;"></i> <div style="font-size: 12px; font-weight: 700; color: #111827;">AB-</div><span style="font-size: 11px; color: #6b7280;">4 Ktg</span></div>
            </div>
        </div>

    </div>

    <div style="margin-top: 40px; color: #9ca3af; font-size: 12px;">
        &copy; 2026 SiapDonor. All rights reserved.
    </div>

</main>
<?= $this->endSection() ?>