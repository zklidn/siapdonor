<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<style>
    /* Layout Utama Halaman Cari Donor (Kiri Filter, Kanan Hasil) */
    .search-container { 
        display: grid; 
        grid-template-columns: 280px 1fr; /* Kiri 280px, Kanan sisanya */
        gap: 30px; 
        align-items: start; 
    }

    /* --- PANEL KIRI (FILTER) --- */
    .filter-panel { background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb; }
    .panel-title { font-size: 16px; font-weight: 700; margin-bottom: 20px; color: #111827; }
    
    .form-group { margin-bottom: 18px; }
    .form-group label { display: block; font-size: 13px; font-weight: 600; color: #4b5563; margin-bottom: 8px; }
    .form-select { 
        width: 100%; padding: 10px 12px; border: 1px solid #e5e7eb; border-radius: 8px; 
        font-size: 14px; color: #4b5563; outline: none; background: white; cursor: pointer;
    }
    .form-select:focus { border-color: #8b0000; }

    .btn-cari { width: 100%; padding: 12px; background: #8b0000; color: white; border: none; border-radius: 8px; font-weight: 600; cursor: pointer; margin-top: 10px; margin-bottom: 10px; transition: 0.2s; }
    .btn-cari:hover { background: #700000; }
    .btn-reset { width: 100%; padding: 12px; background: white; color: #8b0000; border: 1px solid #8b0000; border-radius: 8px; font-weight: 600; cursor: pointer; transition: 0.2s; }
    .btn-reset:hover { background: #fef2f2; }

    /* --- PANEL KANAN (HASIL) --- */
    .result-panel { display: flex; flex-direction: column; gap: 15px; }
    .donor-card { 
        background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; 
        display: flex; justify-content: space-between; align-items: center; transition: 0.2s;
    }
    .donor-card:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.05); border-color: #8b0000; }
    
    .donor-info-wrapper { display: flex; align-items: center; gap: 20px; }
    .donor-avatar { width: 50px; height: 50px; background: #f3f4f6; border-radius: 12px; display: flex; justify-content: center; align-items: center; color: #9ca3af; font-size: 24px; }
    
    .donor-details h4 { font-size: 16px; font-weight: 700; color: #111827; margin-bottom: 4px; }
    .donor-details p { font-size: 13px; color: #6b7280; margin-bottom: 2px; }
    .donor-details .phone { font-weight: 600; color: #4b5563; margin-top: 4px; }

    .btn-detail-card { padding: 8px 24px; background: white; color: #8b0000; border: 1px solid #8b0000; border-radius: 6px; font-weight: 600; font-size: 13px; cursor: pointer; transition: 0.2s; }
    .btn-detail-card:hover { background: #fef2f2; }

    .result-info { font-size: 13px; color: #6b7280; margin-top: 10px; }
</style>

<div class="search-container">
    
    <div class="filter-panel">
        <h3 class="panel-title">Filter Pencarian</h3>
        
        <div class="form-group">
            <label>Kota</label>
            <select class="form-select">
                <option>Semua Kota</option>
                <option>Makassar</option>
                <option>Gowa</option>
                <option>Maros</option>
            </select>
        </div>
        
        <div class="form-group">
            <label>Golongan Darah</label>
            <select class="form-select">
                <option>Semua</option>
                <option>A</option>
                <option>B</option>
                <option>AB</option>
                <option>O</option>
            </select>
        </div>
        
        <div class="form-group">
            <label>Rhesus</label>
            <select class="form-select">
                <option>Semua</option>
                <option>Positif (+)</option>
                <option>Negatif (-)</option>
            </select>
        </div>
        
        <div class="form-group">
            <label>Status Donor</label>
            <select class="form-select">
                <option>Aktif</option>
                <option>Semua Status</option>
            </select>
        </div>

        <button class="btn-cari">Cari</button>
        <button class="btn-reset">Reset</button>
    </div>

    <div class="result-panel">
        <h3 class="panel-title" style="margin-bottom: 5px;">Hasil Pencarian</h3>

        <div class="donor-card">
            <div class="donor-info-wrapper">
                <div class="donor-avatar"><i class="fa-solid fa-user"></i></div>
                <div class="donor-details">
                    <h4>Andi Saputra</h4>
                    <p>Makassar | O+ | Aktif</p>
                    <p class="phone">0813-3456-7890</p>
                </div>
            </div>
            <button class="btn-detail-card">Detail</button>
        </div>

        <div class="donor-card">
            <div class="donor-info-wrapper">
                <div class="donor-avatar"><i class="fa-solid fa-user"></i></div>
                <div class="donor-details">
                    <h4>Siti Nurhaliza</h4>
                    <p>Gowa | A- | Aktif</p>
                    <p class="phone">0812-1221-3330</p>
                </div>
            </div>
            <button class="btn-detail-card">Detail</button>
        </div>

        <div class="donor-card">
            <div class="donor-info-wrapper">
                <div class="donor-avatar"><i class="fa-solid fa-user"></i></div>
                <div class="donor-details">
                    <h4>Muhammad Rizki</h4>
                    <p>Maros | B+ | Aktif</p>
                    <p class="phone">0813-4444-5555</p>
                </div>
            </div>
            <button class="btn-detail-card">Detail</button>
        </div>

        <div class="donor-card">
            <div class="donor-info-wrapper">
                <div class="donor-avatar"><i class="fa-solid fa-user"></i></div>
                <div class="donor-details">
                    <h4>Rudi Hartono</h4>
                    <p>Makassar | O+ | Aktif</p>
                    <p class="phone">0812-8585-0909</p>
                </div>
            </div>
            <button class="btn-detail-card">Detail</button>
        </div>

        <div class="result-info">Menampilkan 1 - 4 dari 85 data</div>
    </div>

</div>

<?= $this->endSection() ?>