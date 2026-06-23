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

    .data-card {
        background: #ffffff;
        padding: 24px;
        border-radius: 14px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.01);
        border: 1px solid #e5e7eb;
    }

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
        padding: 10px 16px 10px 42px;
        border: 1.5px solid #e5e7eb;
        border-radius: 10px;
        font-size: 14px;
        color: #1f2937;
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
        font-size: 12px;
        font-weight: 600;
        color: #4b5563;
        padding: 12px 16px;
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
    .status-dirawat { background: #d1fae5; color: #059669; } /* Dirawat */
    .status-pulang { background: #f3f4f6; color: #4b5563; } /* Pulang */

    .action-links {
        display: flex;
        gap: 14px;
    }
    .btn-action {
        color: #9ca3af;
        font-size: 16px;
        transition: 0.2s;
        text-decoration: none;
    }
    .btn-view:hover { color: #0284c7; }
    .btn-edit:hover { color: #8b0000; }

    /* Navigasi Pagination Halaman */
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
    <h1>Data Pasien / Kebutuhan</h1>
    <p>Kelola data pasien dan kebutuhan darah</p>
</div>

<div class="data-card">
    <div class="table-control">
        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Cari pasien...">
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
                <td>Andi Saputra</td>
                <td>RM001234</td>
                <td><span class="blood-badge">O+</span></td>
                <td>Operasi</td>
                <td>3 Kantong</td>
                <td>20 Mei 2025, 10:30</td>
                <td><span class="status-pill status-dirawat">Dirawat</span></td>
                <td>
                    <div class="action-links">
                        <a href="#" class="btn-action btn-view" title="Lihat"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn-action btn-edit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Siti Aisyah</td>
                <td>RM001235</td>
                <td><span class="blood-badge">A-</span></td>
                <td>Transfusi</td>
                <td>2 Kantong</td>
                <td>20 Mei 2025, 09:15</td>
                <td><span class="status-pill status-dirawat">Dirawat</span></td>
                <td>
                    <div class="action-links">
                        <a href="#" class="btn-action btn-view" title="Lihat"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn-action btn-edit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Dewi Lestari</td>
                <td>RM001236</td>
                <td><span class="blood-badge">B+</span></td>
                <td>Trauma</td>
                <td>4 Kantong</td>
                <td>20 Mei 2025, 08:45</td>
                <td><span class="status-pill status-dirawat">Dirawat</span></td>
                <td>
                    <div class="action-links">
                        <a href="#" class="btn-action btn-view" title="Lihat"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn-action btn-edit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Budi Santoso</td>
                <td>RM001237</td>
                <td><span class="blood-badge">AB+</span></td>
                <td>Operasi</td>
                <td>2 Kantong</td>
                <td>19 Mei 2025, 14:20</td>
                <td><span class="status-pill status-pulang">Pulang</span></td>
                <td>
                    <div class="action-links">
                        <a href="#" class="btn-action btn-view" title="Lihat"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn-action btn-edit" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Rina Marlina</td>
                <td>RM001238</td>
                <td><span class="blood-badge">O-</span></td>
                <td>Anemia</td>
                <td>1 Kantong</td>
                <td>19 Mei 2025, 09:30</td>
                <td><span class="status-pill status-pulang">Pulang</span></td>
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
            <li class="page-item"><a href="#" class="page-link">...</a></li>
            <li class="page-item"><a href="#" class="page-link">5</a></li>
            <li class="page-item"><a href="#" class="page-link"><i class="fa-solid fa-chevron-right"></i></a></li>
        </ul>
    </div>
</div>

<?= $this->include('layout/footer') ?> 