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

    .filter-card {
        background: #ffffff;
        padding: 20px 24px;
        border-radius: 14px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.01);
        border: 1px solid #e5e7eb;
        margin-bottom: 25px;
    }
    .filter-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr) auto;
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
    .form-select, .form-input {
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
    .form-select:focus, .form-input:focus {
        border-color: #8b0000;
    }

    .btn-search {
        background: #8b0000;
        color: white;
        padding: 11px 24px;
        border: none;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: 0.2s;
        height: 44px;
    }
    .btn-search:hover {
        background: #6b0000;
    }

    .results-card {
        background: #ffffff;
        padding: 24px;
        border-radius: 14px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.01);
        border: 1px solid #e5e7eb;
    }
    .results-title {
        font-size: 15px;
        font-weight: 700;
        color: #111827;
        margin-bottom: 20px;
    }

    .results-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }
    .results-table th {
        font-size: 12px;
        font-weight: 600;
        color: #4b5563;
        padding: 12px 16px;
        background: #f9fafb;
        border-bottom: 1px solid #e5e7eb;
    }
    .results-table td {
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
        background: #d1fae5;
        color: #059669;
        display: inline-block;
    }

    .action-buttons {
        display: flex;
        gap: 8px;
    }
    .btn-contact {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-size: 13px;
        transition: 0.2s;
    }
    .btn-phone { background: #fee2e2; color: #8b0000; }
    .btn-phone:hover { background: #fca5a5; }
    .btn-wa { background: #d1fae5; color: #059669; }
    .btn-wa:hover { background: #a7f3d0; }

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
    <h1>Cari Donor</h1>
    <p>Temukan donor yang sesuai dengan kebutuhan Anda</p>
</div>

<div class="filter-card">
    <form action="#" method="GET" class="filter-grid">
        <div class="filter-group">
            <label for="blood_type">Golongan Darah</label>
            <select id="blood_type" name="blood_type" class="form-select">
                <option value="">Pilih golongan darah</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>

        <div class="filter-group">
            <label for="location">Lokasi</label>
            <input type="text" id="location" name="location" class="form-input" placeholder="Pilih lokasi">
        </div>

        <div class="filter-group">
            <label for="radius">Radius</label>
            <select id="radius" name="radius" class="form-select">
                <option value="5">5 km</option>
                <option value="10" selected>10 km</option>
                <option value="25">25 km</option>
            </select>
        </div>

        <button type="submit" class="btn-search">
            <i class="fa-solid fa-plus"></i> Cari Donor
        </button>
    </form>
</div>

<div class="results-card">
    <div class="results-title">Hasil Pencarian Donor</div>
    
    <table class="results-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Gol. Darah</th>
                <th>Lokasi Saat Ini</th>
                <th>Jarak</th>
                <th>No. Telepon</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Andi Pratama</td>
                <td><span class="blood-badge">O+</span></td>
                <td>Kota Bandung</td>
                <td>2.4 km</td>
                <td>0812-3456-7890</td>
                <td><span class="status-pill">Tersedia</span></td>
                <td>
                    <div class="action-buttons">
                        <a href="tel:081234567890" class="btn-contact btn-phone"><i class="fa-solid fa-phone"></i></a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="btn-contact btn-wa"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Siti Nurhaliza</td>
                <td><span class="blood-badge">A-</span></td>
                <td>Kota Bandung</td>
                <td>3.1 km</td>
                <td>0813-4567-8901</td>
                <td><span class="status-pill">Tersedia</span></td>
                <td>
                    <div class="action-buttons">
                        <a href="tel:081345678901" class="btn-contact btn-phone"><i class="fa-solid fa-phone"></i></a>
                        <a href="https://wa.me/6281345678901" target="_blank" class="btn-contact btn-wa"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Rizky Maulana</td>
                <td><span class="blood-badge">B+</span></td>
                <td>Kota Bandung</td>
                <td>4.2 km</td>
                <td>0814-5678-9012</td>
                <td><span class="status-pill">Tersedia</span></td>
                <td>
                    <div class="action-buttons">
                        <a href="tel:081456789012" class="btn-contact btn-phone"><i class="fa-solid fa-phone"></i></a>
                        <a href="https://wa.me/6281456789012" target="_blank" class="btn-contact btn-wa"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Dewi Lestari</td>
                <td><span class="blood-badge">AB+</span></td>
                <td>Kota Bandung</td>
                <td>4.8 km</td>
                <td>0815-6789-0123</td>
                <td><span class="status-pill">Tersedia</span></td>
                <td>
                    <div class="action-buttons">
                        <a href="tel:081567890123" class="btn-contact btn-phone"><i class="fa-solid fa-phone"></i></a>
                        <a href="https://wa.me/6281567890123" target="_blank" class="btn-contact btn-wa"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Fajar Nugroho</td>
                <td><span class="blood-badge">O-</span></td>
                <td>Kota Bandung</td>
                <td>5.3 km</td>
                <td>0816-7890-1234</td>
                <td><span class="status-pill">Tersedia</span></td>
                <td>
                    <div class="action-buttons">
                        <a href="tel:081678901234" class="btn-contact btn-phone"><i class="fa-solid fa-phone"></i></a>
                        <a href="https://wa.me/6281678901234" target="_blank" class="btn-contact btn-wa"><i class="fa-brands fa-whatsapp"></i></a>
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
            <li class="page-item"><a href="#" class="page-link">25</a></li>
            <li class="page-item"><a href="#" class="page-link"><i class="fa-solid fa-chevron-right"></i></a></li>
        </ul>
    </div>
</div>

<?= $this->include('layout/footer') ?>