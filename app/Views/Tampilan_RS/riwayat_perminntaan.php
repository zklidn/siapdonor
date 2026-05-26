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

    /* BAR FILTER RIWAYAT */
    .filter-card {
        background: #ffffff;
        padding: 20px 24px;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.02);
        border: 1px solid #e5e7eb;
        margin-bottom: 30px;
    }
    .filter-grid {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr auto;
        gap: 16px;
        align-items: flex-end;
    }
    .filter-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    .filter-group label {
        font-size: 13px;
        font-weight: 600;
        color: #4b5563;
    }
    .form-control {
        width: 100%;
        padding: 11px 14px;
        border: 1.5px solid #e5e7eb;
        border-radius: 10px;
        font-size: 14px;
        color: #1f2937;
        background-color: #fff;
        outline: none;
        transition: border-color 0.2s;
    }
    .form-control:focus {
        border-color: #8b0000;
    }

    .btn-filter {
        background: #8b0000;
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: 0.2s;
        height: 45px;
    }
    .btn-filter:hover {
        background: #6b0000;
    }

    /* KOTAK TABEL RIWAYAT */
    .table-card {
        background: #ffffff;
        padding: 24px;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.02);
        border: 1px solid #e5e7eb;
    }
    .table-title {
        font-size: 16px;
        font-weight: 700;
        color: #111827;
        margin-bottom: 20px;
    }

    /* Tabel Data */
    .history-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }
    .history-table th {
        font-size: 13px;
        font-weight: 600;
        color: #4b5563;
        padding: 14px 16px;
        background: #f9fafb;
        border-bottom: 1px solid #e5e7eb;
    }
    .history-table td {
        padding: 14px 16px;
        font-size: 14px;
        color: #374151;
        border-bottom: 1px solid #f3f4f6;
        vertical-align: middle;
    }

    /* Badge Golongan Darah Bulat Tipis Merah */
    .blood-badge {
        background: #fee2e2;
        color: #8b0000;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 13px;
        border: 1px solid #fca5a5;
    }

    /* Status Badges */
    .badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        display: inline-block;
    }
    .status-success { background: #d1fae5; color: #059669; } /* Selesai */
    .status-canceled { background: #fee2e2; color: #dc2626; } /* Dibatalkan */

    /* Ikon Detail */
    .btn-view-detail {
        color: #9ca3af;
        transition: 0.2s;
    }
    .btn-view-detail:hover {
        color: #8b0000;
    }

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
    <h1>Riwayat Permintaan</h1>
    <p>Arsip data seluruh permohonan darah rumah sakit yang telah selesai atau dibatalkan.</p>
</div>

<div class="filter-card">
    <form action="#" method="GET" class="filter-grid">
        <div class="filter-group">
            <label for="periode">Periode</label>
            <input type="text" id="periode" name="periode" class="form-control" placeholder="01/05/2026 - 31/05/2026">
        </div>

        <div class="filter-group">
            <label for="blood_type">Golongan Darah</label>
            <select id="blood_type" name="blood_type" class="form-control">
                <option value="">Semua</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>

        <div class="filter-group">
            <label for="status">Status</label>
            <select id="status" name="status" class="form-control">
                <option value="">Semua</option>
                <option value="selesai">Selesai</option>
                <option value="batal">Batal</option>
            </select>
        </div>

        <button type="submit" class="btn-filter">Filter</button>
    </form>
</div>

<div class="table-card">
    <table class="history-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Pasien</th>
                <th>Gol. Darah</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Selesai Pada</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>18 Mei 2026, 11:20</td>
                <td>Andi Saputra</td>
                <td><span class="blood-badge">O+</span></td>
                <td>3 Kantong</td>
                <td><span class="badge status-success">Selesai</span></td>
                <td>18 Mei 2026, 15:30</td>
                <td><a href="#" class="btn-view-detail"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>18 Mei 2026, 09:10</td>
                <td>Siti Aisyah</td>
                <td><span class="blood-badge">A-</span></td>
                <td>2 Kantong</td>
                <td><span class="badge status-success">Selesai</span></td>
                <td>18 Mei 2026, 12:45</td>
                <td><a href="#" class="btn-view-detail"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>17 Mei 2026, 16:05</td>
                <td>Dewi Lestari</td>
                <td><span class="blood-badge">B+</span></td>
                <td>4 Kantong</td>
                <td><span class="badge status-success">Selesai</span></td>
                <td>17 Mei 2026, 20:10</td>
                <td><a href="#" class="btn-view-detail"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>17 Mei 2026, 10:30</td>
                <td>Budi Santoso</td>
                <td><span class="blood-badge">AB+</span></td>
                <td>2 Kantong</td>
                <td><span class="badge status-success">Selesai</span></td>
                <td>17 Mei 2026, 14:20</td>
                <td><a href="#" class="btn-view-detail"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
            <tr>
                <td>5</td>
                <td>16 Mei 2026, 08:45</td>
                <td>Rina Marlina</td>
                <td><span class="blood-badge">O-</span></td>
                <td>1 Kantong</td>
                <td><span class="badge status-canceled">Batal</span></td>
                <td>16 Mei 2026, 11:20</td>
                <td><a href="#" class="btn-view-detail"><i class="fa-solid fa-eye"></i></a></td>
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
            <li class="page-item"><a href="#" class="page-link">32</a></li>
            <li class="page-item"><a href="#" class="page-link"><i class="fa-solid fa-chevron-right"></i></a></li>
        </ul>
    </div>
</div>

<?= $this->include('layout/footer') ?> ```