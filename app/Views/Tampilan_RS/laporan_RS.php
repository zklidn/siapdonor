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

    /* BAR FILTER UTAMA LAPORAN */
    .report-filter-card {
        background: #ffffff;
        padding: 20px 24px;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.02);
        border: 1px solid #e5e7eb;
        margin-bottom: 30px;
    }
    .filter-grid {
        display: grid;
        grid-template-columns: 2fr 2fr auto;
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
        outline: none;
    }
    .btn-generate {
        background: #8b0000;
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        height: 45px;
        transition: 0.2s;
    }
    .btn-generate:hover {
        background: #6b0000;
    }

    /* BARIS COUNTER KOTAK KECIL (TOTALS) */
    .summary-counters {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
        margin-bottom: 30px;
    }
    .counter-box {
        background: #ffffff;
        padding: 20px;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        box-shadow: 0 2px 8px rgba(0,0,0,0.01);
    }
    .counter-label {
        font-size: 12px;
        color: #6b7280;
        font-weight: 600;
        margin-bottom: 6px;
    }
    .counter-value {
        font-size: 24px;
        font-weight: 700;
        color: #111827;
    }

    /* GRID UNTUK GRAFIK & RINGKASAN GOLONGAN DARAH */
    .main-report-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 25px;
    }

    /* Panel Kiri: Grafik */
    .chart-card {
        background: #ffffff;
        padding: 24px;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        box-shadow: 0 4px 12px rgba(0,0,0,0.02);
    }
    .chart-placeholder {
        height: 260px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fafafa;
        border: 1.5px dashed #e5e7eb;
        border-radius: 12px;
        color: #9ca3af;
        font-size: 14px;
    }

    /* Panel Kanan: Ringkasan Kebutuhan Darah */
    .blood-summary-card {
        background: #ffffff;
        padding: 24px;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        box-shadow: 0 4px 12px rgba(0,0,0,0.02);
    }
    .card-title {
        font-size: 15px;
        font-weight: 700;
        color: #111827;
        margin-bottom: 16px;
    }
    
    .blood-row {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #f3f4f6;
        font-size: 14px;
        color: #374151;
    }
    .blood-row:last-child {
        border-bottom: none;
    }
    .blood-name {
        font-weight: 700;
        color: #8b0000;
    }
    .blood-qty {
        font-weight: 600;
    }
</style>

<div class="page-header">
    <h1>Laporan</h1>
    <p>Laporan kebutuhan dan penggunaan darah Rumah Sakit Anda.</p>
</div>

<div class="report-filter-card">
    <form action="#" method="GET" class="filter-grid">
        <div class="filter-group">
            <label for="jenis_laporan">Jenis Laporan</label>
            <select id="jenis_laporan" name="jenis_laporan" class="form-control">
                <option value="kebutuhan">Laporan Kebutuhan Darah</option>
                <option value="penggunaan">Laporan Penggunaan</option>
            </select>
        </div>

        <div class="filter-group">
            <label for="periode">Periode</label>
            <input type="text" id="periode" name="periode" class="form-control" placeholder="01/05/2026 - 31/05/2026">
        </div>

        <button type="submit" class="btn-generate">Generate</button>
    </form>
</div>

<div class="summary-counters">
    <div class="counter-box">
        <div class="counter-label">Total Permintaan</div>
        <div class="counter-value">23</div>
    </div>
    <div class="counter-box">
        <div class="counter-label">Total Kantong</div>
        <div class="counter-value">89</div>
    </div>
    <div class="counter-box">
        <div class="counter-label">Tersalurkan</div>
        <div class="counter-value">76</div>
    </div>
    <div class="counter-box">
        <div class="counter-label">Sisa / Belum</div>
        <div class="counter-value">13</div>
    </div>
</div>

<div class="main-report-grid">
    
    <div class="chart-card">
        <div class="card-title">Grafik Kebutuhan Darah</div>
        <div class="chart-placeholder">
            <i class="fa-solid fa-chart-line fa-2xl" style="margin-right: 10px; color: #cbd5e1;"></i>
            Area Render Grafik Statistik (Garis Multi-Warna Golongan Darah)
        </div>
    </div>

    <div class="blood-summary-card">
        <div class="card-title">Ringkasan Kebutuhan Darah</div>
        
        <div class="blood-row"><span class="blood-name">A+</span><span class="blood-qty">24 Kantong</span></div>
        <div class="blood-row"><span class="blood-name">A-</span><span class="blood-qty">12 Kantong</span></div>
        <div class="blood-row"><span class="blood-name">B+</span><span class="blood-qty">18 Kantong</span></div>
        <div class="blood-row"><span class="blood-name">B-</span><span class="blood-qty">9 Kantong</span></div>
        <div class="blood-row"><span class="blood-name">O+</span><span class="blood-qty">28 Kantong</span></div>
        <div class="blood-row"><span class="blood-name">O-</span><span class="blood-qty">11 Kantong</span></div>
        <div class="blood-row"><span class="blood-name">AB+</span><span class="blood-qty">7 Kantong</span></div>
        <div class="blood-row"><span class="blood-name">AB-</span><span class="blood-qty">4 Kantong</span></div>
    </div>

</div>

<?= $this->include('layout/footer') ?> ```