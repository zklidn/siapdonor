<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('pmi') ?>" class="menu-item menu-active">
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
    <a href="<?= base_url('pmi/riwayat_donor') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Donor
    </a>
    <a href="<?= base_url('pmi/laporan') ?>" class="menu-item">
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
            <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Dashboard</h1>
            <p style="color: #6b7280; font-size: 14px;">Selamat datang, PMI Kota Palu!</p>
        </div>
        <div style="color: #6b7280; font-size: 13px; display: flex; align-items: center; gap: 8px; background: white; padding: 8px 15px; border-radius: 8px; border: 1px solid #e5e7eb;">
            <i class="fa-regular fa-calendar"></i> <?= $tanggal_sekarang ?>
        </div>
    </div>
    
    <!-- ==================== UBAH COMPONENT ATAS: KOTAK INFORMASI BULAT PERSIS GAMBAR 1 ==================== -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 30px;">
        
        <!-- Card 1: Total Pendonor -->
        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 20px;">
            <div style="width: 54px; height: 54px; border-radius: 50%; border: 1px solid #fca5a5; background: #fff5f5; color: #8b0000; display: flex; justify-content: center; align-items: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa-solid fa-users"></i>
            </div>
            <div>
                <p style="color: #4b5563; font-size: 12px; font-weight: 600; margin: 0 0 2px 0;">Total Pendonor</p>
                <h3 style="font-size: 24px; font-weight: 700; color: #111827; margin: 0 0 2px 0; line-height: 1.2;"><?= isset($total_donor) ? $total_donor : '1.248' ?></h3>
                <p style="color: #9ca3af; font-size: 11px; margin: 0;">Seluruh pendonor terdaftar</p>
            </div>
        </div>

        <!-- Card 2: Stok Darah Tersedia -->
        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 20px;">
            <div style="width: 54px; height: 54px; border-radius: 50%; border: 1px solid #fca5a5; background: #fff5f5; color: #8b0000; display: flex; justify-content: center; align-items: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa-solid fa-droplet"></i>
            </div>
            <div>
                <p style="color: #4b5563; font-size: 12px; font-weight: 600; margin: 0 0 2px 0;">Stok Darah Tersedia</p>
                <h3 style="font-size: 24px; font-weight: 700; color: #111827; margin: 0 0 2px 0; line-height: 1.2;"><?= isset($stok_darah) ? $stok_darah : '892' ?></h3>
                <p style="color: #9ca3af; font-size: 11px; margin: 0;">Kantong darah tersedia</p>
            </div>
        </div>

        <!-- Card 3: Permintaan Darah Masuk -->
        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 20px;">
            <div style="width: 54px; height: 54px; border-radius: 50%; border: 1px solid #fca5a5; background: #fff5f5; color: #8b0000; display: flex; justify-content: center; align-items: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa-solid fa-calendar-check"></i>
            </div>
            <div>
                <p style="color: #4b5563; font-size: 12px; font-weight: 600; margin: 0 0 2px 0;">Permintaan Darah Masuk</p>
                <h3 style="font-size: 24px; font-weight: 700; color: #111827; margin: 0 0 2px 0; line-height: 1.2;"><?= isset($permintaan_masuk) ? $permintaan_masuk : '23' ?></h3>
                <p style="color: #9ca3af; font-size: 11px; margin: 0;">Permintaan baru hari ini</p>
            </div>
        </div>

        <!-- Card 4: Donor Aktif -->
        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: center; gap: 20px;">
            <div style="width: 54px; height: 54px; border-radius: 50%; border: 1px solid #fca5a5; background: #fff5f5; color: #8b0000; display: flex; justify-content: center; align-items: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa-solid fa-user-shield"></i>
            </div>
            <div>
                <p style="color: #4b5563; font-size: 12px; font-weight: 600; margin: 0 0 2px 0;">Donor Aktif</p>
                <h3 style="font-size: 24px; font-weight: 700; color: #111827; margin: 0 0 2px 0; line-height: 1.2;"><?= isset($donor_aktif) ? $donor_aktif : '85' ?></h3>
                <p style="color: #9ca3af; font-size: 11px; margin: 0;">Pendonor siap dihubungi</p>
            </div>
        </div>

    </div>

    <!-- TAMPILAN AKTIVITAS TERBARU BAWAAN TEMAN -->
    <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb; margin-bottom: 25px;">
        <h3 style="margin-bottom: 20px; font-size: 16px; color: #111827;">Aktivitas Terbaru</h3>
        
        <div style="overflow-x: auto;">
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
                        <td style="padding: 15px 0; color: #4b5563;">08 Juni 2026</td>
                        <td style="padding: 15px 0; color: #111827;">PMI Kota Palu</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">2</td>
                        <td style="padding: 15px 0; color: #111827;">Permintaan darah baru</td>
                        <td style="padding: 15px 0; color: #4b5563;">08 Juni 2026</td>
                        <td style="padding: 15px 0; color: #111827;">RS Undata</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">3</td>
                        <td style="padding: 15px 0; color: #111827;">Donor diperbarui</td>
                        <td style="padding: 15px 0; color: #4b5563;">07 Juni 2026</td>
                        <td style="padding: 15px 0; color: #111827;">PMI Kota Palu</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">4</td>
                        <td style="padding: 15px 0; color: #111827;">Status permintaan diubah</td>
                        <td style="padding: 15px 0; color: #4b5563;">07 Juni 2026</td>
                        <td style="padding: 15px 0; color: #111827;">PMI Kota Palu</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f9fafb;">
                        <td style="padding: 15px 0; color: #4b5563;">5</td>
                        <td style="padding: 15px 0; color: #111827;">Update stok darah manual</td>
                        <td style="padding: 15px 0; color: #4b5563;">06 Juni 2026</td>
                        <td style="padding: 15px 0; color: #111827;">PMI Kota Palu</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div style="margin-top: 20px;">
            <a href="<?= base_url('pmi/riwayat_donor') ?>" style="color: #dc2626; font-size: 13px; font-weight: 600; text-decoration: none;">Lihat semua aktivitas</a>
        </div>
    </div>

    <!-- AREA PERBAIKAN 3 SECTOR BAWAH YANG SUDAH KITA SEMPURNAKAN SEBELUMNYA -->
    <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 20px;">
        
        <!-- KIRI: DATA DONOR TERBARU -->
        <div style="background: white; padding: 24px; border-radius: 12px; border: 1px solid #e5e7eb;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h3 style="font-size: 16px; font-weight: 700; color: #111827; margin: 0;">Data Donor Terbaru</h3>
                <a href="<?= base_url('pmi/data_pendonor') ?>" style="color: #8b0000; font-size: 13px; font-weight: 600; text-decoration: none;">Lihat Semua</a>
            </div>
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 13px;">
                    <thead>
                        <tr style="border-bottom: 1px solid #e5e7eb;">
                            <th style="padding: 12px 8px; color: #4b5563; font-weight: 600;">Nama</th>
                            <th style="padding: 12px 8px; color: #4b5563; font-weight: 600; text-align: center;">Gol. Darah</th>
                            <th style="padding: 12px 8px; color: #4b5563; font-weight: 600;">Asal Kota</th>
                            <th style="padding: 12px 8px; color: #4b5563; font-weight: 600;">Lokasi Sekarang</th>
                            <th style="padding: 12px 8px; color: #4b5563; font-weight: 600;">Kontak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $list_donor = isset($donor_terbaru) ? $donor_terbaru : [
                            ['nama' => 'Andi Pratama', 'gol_darah' => 'A+', 'asal_kota' => 'Kota Z', 'lokasi_sekarang' => 'Kota C', 'kontak' => '0812-3456-7890'],
                            ['nama' => 'Siti Nurhaliza', 'gol_darah' => 'B+', 'asal_kota' => 'Kota Y', 'lokasi_sekarang' => 'Kota C', 'kontak' => '0813-4567-8901'],
                            ['nama' => 'Rizky Maulana', 'gol_darah' => 'O+', 'asal_kota' => 'Kota X', 'lokasi_sekarang' => 'Kota B', 'kontak' => '0814-5678-9012'],
                            ['nama' => 'Dewi Lestari', 'gol_darah' => 'AB+', 'asal_kota' => 'Kota W', 'lokasi_sekarang' => 'Kota A', 'kontak' => '0815-6789-0123'],
                            ['nama' => 'Fajar Nugroho', 'gol_darah' => 'A-', 'asal_kota' => 'Kota Y', 'lokasi_sekarang' => 'Kota D', 'kontak' => '0816-7860-1234']
                        ];
                        foreach ($list_donor as $d): ?>
                        <tr style="border-bottom: 1px solid #f3f4f6;">
                            <td style="padding: 12px 8px; display: flex; align-items: center; gap: 10px; font-weight: 500; color: #111827;">
                                <div style="width: 28px; height: 28px; border-radius: 50%; background: #e5e7eb; display: flex; align-items: center; justify-content: center; color: #9ca3af; font-size: 12px;">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <?= $d['nama'] ?>
                            </td>
                            <td style="padding: 12px 8px; text-align: center;">
                                <span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 3px 8px; border-radius: 6px; font-size: 11px; border: 1px solid #fca5a5; display: inline-block; min-width: 32px; text-align: center;">
                                    <?= $d['gol_darah'] ?>
                                </span>
                            </td>
                            <td style="padding: 12px 8px; color: #4b5563;"><?= $d['asal_kota'] ?></td>
                            <td style="padding: 12px 8px; color: #4b5563;"><?= $d['lokasi_sekarang'] ?></td>
                            <td style="padding: 12px 8px; color: #374151; font-weight: 500;"><?= $d['kontak'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 20px;">
            
            <!-- FITUR 2: DONOR BERDASARKAN LOKASI -->
            <div style="background: white; padding: 24px; border-radius: 12px; border: 1px solid #e5e7eb; min-height: 210px;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                    <h3 style="font-size: 16px; font-weight: 700; color: #111827; margin: 0;">Donor Berdasarkan Lokasi</h3>
                    <a href="#" style="color: #6b7280; font-size: 12px; text-decoration: none;">Lihat Semua <i class="fa-solid fa-angle-down"></i></a>
                </div>
                
                <div style="display: flex; justify-content: space-between; align-items: flex-start; gap: 10px;">
                    <table style="width: 50%; font-size: 13px; border-collapse: collapse;">
                        <thead>
                            <tr style="border-bottom: 1px solid #e5e7eb; text-align: left;">
                                <th style="padding-bottom: 8px; color: #6b7280; font-weight: 500;">Lokasi Sekarang</th>
                                <th style="padding-bottom: 8px; color: #6b7280; font-weight: 500; text-align: right;">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $list_lokasi = isset($donor_lokasi) ? $donor_lokasi : [
                                ['lokasi' => 'Kota C', 'jumlah' => 320],
                                ['lokasi' => 'Kota B', 'jumlah' => 215],
                                ['lokasi' => 'Kota A', 'jumlah' => 180],
                                ['lokasi' => 'Kota D', 'jumlah' => 165],
                                ['lokasi' => 'Kota E', 'jumlah' => 120]
                            ];
                            foreach ($list_lokasi as $l): ?>
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 8px 0; color: #374151;"><?= $l['lokasi'] ?></td>
                                <td style="padding: 8px 0; text-align: right; font-weight: 600;"><?= $l['jumlah'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    
                    <div style="width: 48%; height: 130px; background: #fff5f5; border-radius: 8px; position: relative; border: 1px solid #fca5a5; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                        <i class="fa-solid fa-map-marked-alt" style="font-size: 60px; color: #fca5a5; opacity: 0.3;"></i>
                        <i class="fa-solid fa-location-dot" style="position: absolute; top: 30%; left: 25%; color: #8b0000; font-size: 14px;"></i>
                        <i class="fa-solid fa-location-dot" style="position: absolute; top: 55%; left: 55%; color: #8b0000; font-size: 18px;"></i>
                        <i class="fa-solid fa-location-dot" style="position: absolute; top: 40%; left: 75%; color: #8b0000; font-size: 12px;"></i>
                    </div>
                </div>
            </div>

            <!-- FITUR 3: DONOR BERDASARKAN GOLONGAN DARAH -->
            <div style="background: white; padding: 24px; border-radius: 12px; border: 1px solid #e5e7eb;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <h3 style="font-size: 16px; font-weight: 700; color: #111827; margin: 0;">Donor Berdasarkan Golongan Darah</h3>
                    <a href="#" style="color: #6b7280; font-size: 12px; text-decoration: none;">Lihat Semua <i class="fa-solid fa-angle-down"></i></a>
                </div>
                
                <?php
                $gol = isset($donor_golongan) ? $donor_golongan : [
                    'A+' => 320, 'B+' => 280, 'O+' => 210, 'AB+' => 150,
                    'A-' => 100, 'B-' => 80,  'O-' => 60,  'AB-' => 48
                ];
                ?>
                <div style="display: flex; flex-direction: column; gap: 14px;">
                    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px;">
                        <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;"><span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 3px 6px; border-radius: 5px; font-size: 11px; border: 1px solid #fca5a5; min-width: 28px; text-align: center;">A+</span> <strong style="color: #374151;"><?= $gol['A+'] ?></strong></div>
                        <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;"><span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 3px 6px; border-radius: 5px; font-size: 11px; border: 1px solid #fca5a5; min-width: 28px; text-align: center;">B+</span> <strong style="color: #374151;"><?= $gol['B+'] ?></strong></div>
                        <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;"><span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 3px 6px; border-radius: 5px; font-size: 11px; border: 1px solid #fca5a5; min-width: 28px; text-align: center;">O+</span> <strong style="color: #374151;"><?= $gol['O+'] ?></strong></div>
                        <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;"><span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 3px 6px; border-radius: 5px; font-size: 11px; border: 1px solid #fca5a5; min-width: 28px; text-align: center;">AB+</span> <strong style="color: #374151;"><?= $gol['AB+'] ?></strong></div>
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px;">
                        <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;"><span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 3px 6px; border-radius: 5px; font-size: 11px; border: 1px solid #fca5a5; min-width: 28px; text-align: center;">A-</span> <strong style="color: #374151;"><?= $gol['A-'] ?></strong></div>
                        <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;"><span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 3px 6px; border-radius: 5px; font-size: 11px; border: 1px solid #fca5a5; min-width: 28px; text-align: center;">B-</span> <strong style="color: #374151;"><?= $gol['B-'] ?></strong></div>
                        <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;"><span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 3px 6px; border-radius: 5px; font-size: 11px; border: 1px solid #fca5a5; min-width: 28px; text-align: center;">O-</span> <strong style="color: #374151;"><?= $gol['O-'] ?></strong></div>
                        <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;"><span style="background: #fee2e2; color: #8b0000; font-weight: 700; padding: 3px 6px; border-radius: 5px; font-size: 11px; border: 1px solid #fca5a5; min-width: 28px; text-align: center;">AB-</span> <strong style="color: #374151;"><?= $gol['AB-'] ?></strong></div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div style="margin-top: 40px; color: #9ca3af; font-size: 12px;">
        &copy; 2026 SiapDonor. All rights reserved.
    </div>

</main>
<?= $this->endSection() ?>