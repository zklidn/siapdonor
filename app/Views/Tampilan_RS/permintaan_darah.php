<?= $this->include('layout/header') ?> <style>

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