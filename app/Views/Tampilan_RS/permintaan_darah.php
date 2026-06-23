<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<<<<<<< HEAD
    .page-header { 
        margin-bottom: 25px; 
    }
    .page-header h1 { 
        font-size: 24px; 
        font-weight: 700; 
        color: #111827; 
        margin-bottom: 4px; 
    }
    .page-header p { 
        font-size: 14px; 
        color: #6b7280; 
    }

    .table-nav-control {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    .filter-tabs {
        display: flex;
        gap: 20px;
        border-bottom: 1px solid #e5e7eb;
        padding-bottom: 8px;
    }
    .tab-item {
        font-size: 14px;
        color: #6b7280;
        text-decoration: none;
        font-weight: 500;
        padding-bottom: 8px;
        position: relative;
    }
    .tab-item.active {
        color: #8b0000;
        font-weight: 600;
    }
    .tab-item.active::after {
        content: '';
        position: absolute;
        bottom: -9px;
        left: 0;
        width: 100%;
        height: 2px;
        background: #8b0000;
    }

    .btn-add-request {
        background: #8b0000;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: 0.2s;
        text-decoration: none;
    }
    .btn-add-request:hover {
        background: #6b0000;
    }

    .table-card {
        background: #ffffff;
        padding: 24px;
        border-radius: 14px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.01);
        border: 1px solid #e5e7eb;
    }

    .request-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }
    .request-table th {
        font-size: 12px;
        font-weight: 600;
        color: #4b5563;
        padding: 12px 16px;
        background: #f9fafb;
        border-bottom: 1px solid #e5e7eb;
    }
    .request-table td {
        padding: 14px 16px;
        font-size: 14px;
        color: #374151;
        border-bottom: 1px solid #f3f4f6;
        vertical-align: middle;
    }

    .blood-badge {
        background: #fee2e2;
        color: #8b0000;
        font-weight: 700;
        padding: 3px 8px;
        border-radius: 5px;
        font-size: 12px;
        border: 1px solid #fca5a5;
    }

    .status-pill {
        padding: 4px 10px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 600;
        display: inline-block;
    }
    .status-proses { background: #fef3c7; color: #d97706; }
    .status-baru { background: #e0f2fe; color: #0284c7; }
    .status-selesai { background: #d1fae5; color: #059669; }

    .btn-view-detail {
        color: #9ca3af;
        transition: 0.2s;
    }
    .btn-view-detail:hover {
        color: #8b0000;
    }

    /* Navigasi Pagination */
    .pagination-container {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
    }
    .pagination {
        display: flex;
        gap: 5px;
        list-style: none;
    }
    .page-link {
        padding: 6px 12px;
        border: 1px solid #e5e7eb;
        border-radius: 6px;
        color: #4b5563;
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        background: white;
    }
    .page-link:hover, .page-item.active .page-link {
        background: #8b0000;
        color: white;
        border-color: #8b0000;
    }
</style>

<div class="page-header">
    <h1>Permintaan Darah</h1>
    <p>Buat dan kelola permintaan darah untuk pasien</p>
</div>

<div class="table-nav-control">
    <div class="filter-tabs">
        <a href="#" class="tab-item">Semua Permintaan</a>
        <a href="#" class="tab-item active">Permintaan Aktif</a>
        <a href="#" class="tab-item">Permintaan Selesai</a>
        <a href="#" class="tab-item">Draft</a>
    </div>
    <a href="#" class="btn-add-request">
        <i class="fa-solid fa-plus"></i> Buat Permintaan
    </a>
</div>

<div class="table-card">
    <table class="request-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Pasien</th>
                <th>Gol. Darah</th>
                <th>Jumlah</th>
                <th>Kebutuhan</th>
                <th>Lokasi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>20 Mei 2025, 10:30</td>
                <td>Andi Saputra</td>
                <td><span class="blood-badge">O+</span></td>
                <td>3 Kantong</td>
                <td>Operasi</td>
                <td>ICU RSUD Sejahtera</td>
                <td><span class="status-pill status-proses">Proses</span></td>
                <td><a href="#" class="btn-view-detail"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>20 Mei 2025, 09:15</td>
                <td>Siti Aisyah</td>
                <td><span class="blood-badge">A-</span></td>
                <td>2 Kantong</td>
                <td>Transfusi</td>
                <td>ICU RSUD Sejahtera</td>
                <td><span class="status-pill status-proses">Proses</span></td>
                <td><a href="#" class="btn-view-detail"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>20 Mei 2025, 08:45</td>
                <td>Dewi Lestari</td>
                <td><span class="blood-badge">B+</span></td>
                <td>4 Kantong</td>
                <td>Trauma</td>
                <td>IGD RSUD Sejahtera</td>
                <td><span class="status-pill status-baru">Baru</span></td>
                <td><a href="#" class="btn-view-detail"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>19 Mei 2025, 14:20</td>
                <td>Budi Santoso</td>
                <td><span class="blood-badge">AB+</span></td>
                <td>2 Kantong</td>
                <td>Operasi</td>
                <td>ICU RSUD Sejahtera</td>
                <td><span class="status-pill status-selesai">Selesai</span></td>
                <td><a href="#" class="btn-view-detail"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
            <tr>
                <td>5</td>
                <td>19 Mei 2025, 09:30</td>
                <td>Rina Marlina</td>
                <td><span class="blood-badge">O-</span></td>
                <td>1 Kantong</td>
                <td>Anemia</td>
                <td>Rawat Inap</td>
                <td><span class="status-pill status-selesai">Selesai</span></td>
                <td><a href="#" class="btn-view-detail"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
        </tbody>
    </table>

    <div class="pagination-container">
        <ul class="pagination">
            <li class="page-item"><a href="#" class="page-link"><i class="fa-solid fa-chevron-left"></i></a></li>
            <li class="page-item active"><a href="#" class="page-link">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link"><i class="fa-solid fa-chevron-right"></i></a></li>
        </ul>
    </div>
</div>

<?= $this->include('layout/footer') ?>
=======
<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('rs') ?>" class="menu-item">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('rs/cari_donor') ?>" class="menu-item">
        <i class="fa-solid fa-magnifying-glass"></i> Cari Donor
    </a>
    <a href="<?= base_url('rs/permintaan_darah') ?>" class="menu-item menu-active">
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
        <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Permintaan Darah</h1>
        <p style="color: #6b7280; font-size: 14px;">Kelola dan buat permintaan kantong darah baru ke PMI Kota Palu</p>
    </div>

    <div style="background: white; border-radius: 12px; border: 1px solid #e5e7eb; padding: 25px;">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 15px;">
            
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <div style="position: relative; width: 250px;">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 15px; top: 12px; color: #9ca3af;"></i>
                    <input type="text" placeholder="Cari nama pasien..." style="width: 100%; padding: 10px 15px 10px 40px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; background: #f9fafb;">
                </div>

                <select style="padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; color: #4b5563; background: #f9fafb; cursor: pointer;">
                    <option>Semua Status</option>
                    <option>Menunggu Konfirmasi</option>
                    <option>Diproses PMI</option>
                    <option>Selesai</option>
                    <option>Ditolak</option>
                </select>
            </div>
            
            <a href="<?= base_url('rs/buat_permintaan') ?>" style="background: #8b0000; color: white; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 8px; font-size: 14px; text-decoration: none; transition: 0.2s;">
                <i class="fa-solid fa-plus"></i> Buat Permintaan Baru
            </a>

        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; min-width: 900px;">
                <thead>
                    <tr style="border-bottom: 2px solid #f3f4f6;">
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">No</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Tanggal Request</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Nama Pasien</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700; text-align: center;">Gol. Darah</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700; text-align: center;">Jumlah (Kantong)</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Sifat Kebutuhan</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Status Permintaan</th>
                        <th style="padding: 15px 10px; color: #111827; font-weight: 700;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px; color: #4b5563;">1</td>
                        <td style="padding: 18px 10px; color: #4b5563;">08 Jun 2026, 13:00</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Ahmad Syamsuddin</td>
                        <td style="padding: 18px 10px; text-align: center; font-weight: 600; color: #8b0000;">A+</td>
                        <td style="padding: 18px 10px; text-align: center; font-weight: 600;">3</td>
                        <td style="padding: 18px 10px; color: #dc2626; font-weight: 600;">CITO (Darurat)</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #e0e7ff; color: #4338ca; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Menunggu Konfirmasi</span>
                        </td>
                        <td style="padding: 18px 10px;">
                            <i class="fa-solid fa-eye" style="color: #9ca3af; cursor: pointer;" title="Lihat Detail Permintaan"></i>
                            <i class="fa-solid fa-trash" style="color: #ef4444; cursor: pointer; margin-left: 10px;" title="Batalkan Permintaan"></i>
                        </td>
                    </tr>

                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px; color: #4b5563;">2</td>
                        <td style="padding: 18px 10px; color: #4b5563;">08 Jun 2026, 09:15</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Maria Ulfa</td>
                        <td style="padding: 18px 10px; text-align: center; font-weight: 600; color: #8b0000;">O+</td>
                        <td style="padding: 18px 10px; text-align: center; font-weight: 600;">2</td>
                        <td style="padding: 18px 10px; color: #4b5563;">Biasa (Elektif)</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #fef08a; color: #854d0e; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Sedang Diproses</span>
                        </td>
                        <td style="padding: 18px 10px;">
                            <i class="fa-solid fa-eye" style="color: #9ca3af; cursor: pointer;" title="Lihat Detail Permintaan"></i>
                        </td>
                    </tr>

                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 18px 10px; color: #4b5563;">3</td>
                        <td style="padding: 18px 10px; color: #4b5563;">07 Jun 2026, 16:45</td>
                        <td style="padding: 18px 10px; font-weight: 600; color: #111827;">Budi Santoso</td>
                        <td style="padding: 18px 10px; text-align: center; font-weight: 600; color: #8b0000;">B-</td>
                        <td style="padding: 18px 10px; text-align: center; font-weight: 600;">1</td>
                        <td style="padding: 18px 10px; color: #4b5563;">Biasa (Elektif)</td>
                        <td style="padding: 18px 10px;">
                            <span style="background: #dcfce7; color: #166534; padding: 5px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Selesai Diterima</span>
                        </td>
                        <td style="padding: 18px 10px;">
                            <i class="fa-solid fa-eye" style="color: #9ca3af; cursor: pointer;" title="Lihat Detail Permintaan"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 25px; font-size: 14px; color: #6b7280; flex-wrap: wrap; gap: 15px;">
            <div>Menampilkan 1 - 3 dari 3 data</div>
            <div style="display: flex; gap: 8px; align-items: center;">
                <span style="padding: 6px 10px; cursor: pointer; color: #9ca3af;"><i class="fa-solid fa-chevron-left"></i></span>
                <span style="background: #8b0000; color: white; padding: 6px 14px; border-radius: 6px; font-weight: 600; cursor: pointer;">1</span>
                <span style="padding: 6px 10px; cursor: pointer; color: #4b5563;"><i class="fa-solid fa-chevron-right"></i></span>
            </div>
        </div>
    </div>

</main>
<?= $this->endSection() ?>
>>>>>>> 9e38052ac64e126a033f0ee1c93746fa65681efa
