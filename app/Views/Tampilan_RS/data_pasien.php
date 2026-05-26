<?= $this->include('layout/header') ?> <style>

    .page-header { 
        margin-bottom: 30px; 
    }
    .page-header h1 { 
        font-size: 26px; 
        font-weight: 700; 
        color: #111827; 
        margin-bottom: 4px; 
    }
    .page-header p { 
        font-size: 14px; 
        color: #6b7280; 
    }

    /* KOTAK UTAMA DATA */
    .data-card {
        background: #ffffff;
        padding: 24px;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.02);
        border: 1px solid #e5e7eb;
    }

    /* Top Bar Tabel (Search) */
    .table-control {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    .search-box {
        position: relative;
        width: 320px;
    }
    .search-box input {
        width: 100%;
        padding: 11px 16px 11px 42px;
        border: 1.5px solid #e5e7eb;
        border-radius: 10px;
        font-size: 14px;
        outline: none;
        transition: border-color 0.2s;
    }
    .search-box input:focus {
        border-color: #8b0000;
    }
    .search-box i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #9ca3af;
    }

    /* Tabel Pasien */
    .patient-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }
    .patient-table th {
        font-size: 13px;
        font-weight: 600;
        color: #4b5563;
        padding: 14px 16px;
        background: #f9fafb;
        border-bottom: 1px solid #e5e7eb;
    }
    .patient-table td {
        padding: 14px 16px;
        font-size: 14px;
        color: #374151;
        border-bottom: 1px solid #f3f4f6;
        vertical-align: middle;
    }

    /* Badge Golongan Darah Kotak Merah */
    .blood-badge {
        background: #fee2e2;
        color: #8b0000;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 13px;
        border: 1px solid #fca5a5;
    }

    /* Status Rawat Pasien (Dirawat / Pulang) */
    .badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        display: inline-block;
    }
    .status-care { background: #e0f2fe; color: #0284c7; } /* Dirawat */
    .status-home { background: #f3f4f6; color: #4b5563; } /* Pulang */

    /* Tombol Aksi (View & Edit) */
    .action-links {
        display: flex;
        gap: 12px;
    }
    .btn-action {
        color: #9ca3af;
        font-size: 16px;
        transition: 0.2s;
        text-decoration: none;
    }
    .btn-view:hover { color: #0284c7; }
    .btn-edit:hover { color: #8b0000; }

    /* Pagination */
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
        padding: 8px 14px;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        color: #4b5563;
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        background: white;
        transition: 0.2s;
    }
    .page-link:hover, .page-item.active .page-link {
        background: #8b0000;
        color: white;
        border-color: #8b0000;
    }
</style>

<div class="page-header">
    <h1>Data Pasien / Kebutuhan</h1>
    <p>Kelola data rekam medis internal pasien serta status kebutuhan transfusi darah.</p>
</div>

<div class="data-card">
    <div class="table-control">
        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Cari pasien atau No. RM...">
        </div>
        <div style="font-size: 13px; color: #6b7280;">
            Total Terdata: <strong>23 pasien</strong>
        </div>
    </div>

    <table class="patient-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>No. RM</th>
                <th>Gol. Darah</th>
                <th>Kebutuhan</th>
                <th>Jumlah</th>
                <th>Tanggal Masuk</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><strong>Andi Saputra</strong></td>
                <td>RM001234</td>
                <td><span class="blood-badge">O+</span></td>
                <td>Operasi</td>
                <td>3 Kantong</td>
                <td>20 Mei 2026, 10:30</td>
                <td><span class="badge status-care">Dirawat</span></td>
                <td>
                    <div class="action-links">
                        <a href="#" class="btn-action btn-view" title="Lihat Detail"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn-action btn-edit" title="Edit Data"><i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td><strong>Siti Aisyah</strong></td>
                <td>RM001235</td>
                <td><span class="blood-badge">A-</span></td>
                <td>Transfusi</td>
                <td>2 Kantong</td>
                <td>20 Mei 2026, 09:15</td>
                <td><span class="badge status-care">Dirawat</span></td>
                <td>
                    <div class="action-links">
                        <a href="#" class="btn-action btn-view" title="Lihat"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn-action btn-edit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td><strong>Dewi Lestari</strong></td>
                <td>RM001236</td>
                <td><span class="blood-badge">B+</span></td>
                <td>Trauma</td>
                <td>4 Kantong</td>
                <td>20 Mei 2026, 08:45</td>
                <td><span class="badge status-care">Dirawat</span></td>
                <td>
                    <div class="action-links">
                        <a href="#" class="btn-action btn-view" title="Lihat"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn-action btn-edit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td><strong>Budi Santoso</strong></td>
                <td>RM001237</td>
                <td><span class="blood-badge">AB+</span></td>
                <td>Operasi</td>
                <td>2 Kantong</td>
                <td>19 Mei 2026, 14:20</td>
                <td><span class="badge status-home">Pulang</span></td>
                <td>
                    <div class="action-links">
                        <a href="#" class="btn-action btn-view" title="Lihat"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn-action btn-edit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="pagination-container">
        <ul class="pagination">
            <li class="page-item"><a href="#" class="page-link"><i class="fa-solid fa-chevron-left"></i></a></li>
            <li class="page-item active"><a href="#" class="page-link">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link"><i class="fa-solid fa-chevron-right"></i></a></li>
        </ul>
    </div>
</div>

<?= $this->include('layout/footer') ?> ```