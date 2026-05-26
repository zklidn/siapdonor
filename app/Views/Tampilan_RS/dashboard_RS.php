<?= $this->include('layout/header') ?> <style>

    .dashboard-header { 
        margin-bottom: 30px; 
    }
    .dashboard-header h1 { 
        font-size: 26px; 
        font-weight: 700; 
        color: #111827; 
        margin-bottom: 4px; 
    }
    .dashboard-header p { 
        font-size: 14px; 
        color: #6b7280; 
    }

    /* 3 Kotak Statistik */
    .stats-grid { 
        display: grid; 
        grid-template-columns: repeat(3, 1fr); 
        gap: 20px; 
        margin-bottom: 35px; 
    }
    .stat-card { 
        background: #ffffff; 
        padding: 24px; 
        border-radius: 16px; 
        box-shadow: 0 4px 12px rgba(0,0,0,0.02); 
        border: 1px solid #e5e7eb; 
    }
    .stat-label { 
        font-size: 12px; 
        font-weight: 700; 
        color: #6b7280; 
        text-transform: uppercase; 
        letter-spacing: 0.5px; 
        margin-bottom: 12px; 
    }
    .stat-main { 
        display: flex; 
        align-items: center; 
        justify-content: space-between; 
    }
    .stat-value { 
        font-size: 32px; 
        font-weight: 700; 
        color: #111827; 
    }
    .stat-icon { 
        width: 48px; 
        height: 48px; 
        border-radius: 12px; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
        font-size: 20px; 
    }
    
    /* Warna Ikon Statistik */
    .icon-total { background: #fee2e2; color: #8b0000; }
    .icon-process { background: #fef3c7; color: #d97706; }
    .icon-success { background: #d1fae5; color: #059669; }

    /* Layout Kolom Bawah */
    .dashboard-grid { 
        display: grid; 
        grid-template-columns: 2fr 1fr; 
        gap: 25px; 
    }
    
    /* Sisi Kiri: Tabel Permintaan Darah RS */
    .table-container { 
        background: #ffffff; 
        padding: 24px; 
        border-radius: 16px; 
        box-shadow: 0 4px 12px rgba(0,0,0,0.02); 
        border: 1px solid #e5e7eb; 
    }
    .panel-title { 
        font-size: 16px; 
        font-weight: 700; 
        color: #111827; 
        margin-bottom: 20px; 
        display: flex; 
        align-items: center; 
        gap: 8px; 
    }
    
    .custom-table { 
        width: 100%; 
        border-collapse: collapse; 
        text-align: left; 
    }
    .custom-table th { 
        font-size: 13px; 
        font-weight: 600; 
        color: #4b5563; 
        padding: 14px 16px; 
        background: #f9fafb; 
        border-bottom: 1px solid #e5e7eb; 
    }
    .custom-table td { 
        padding: 14px 16px; 
        font-size: 14px; 
        color: #374151; 
        border-bottom: 1px solid #f3f4f6; 
    }
    
    /* Status Badges */
    .badge { 
        padding: 6px 12px; 
        border-radius: 20px; 
        font-size: 12px; 
        font-weight: 600; 
        display: inline-block; 
    }
    .badge-pending { background: #fef3c7; color: #d97706; }
    .badge-process { background: #e0f2fe; color: #0284c7; }
    .badge-success { background: #d1fae5; color: #059669; }

    /* Sisi Kanan: Tombol Aksi Cepat (Quick Actions) */
    .actions-container { 
        display: flex; 
        flex-direction: column; 
        gap: 15px; 
    }
    .action-card { 
        background: #ffffff; 
        padding: 24px; 
        border-radius: 16px; 
        box-shadow: 0 4px 12px rgba(0,0,0,0.02); 
        border: 1px solid #e5e7eb; 
        text-align: center; 
        cursor: pointer; 
        transition: all 0.2s ease-in-out; 
        text-decoration: none; 
        display: block; 
    }
    .action-card:hover { 
        transform: translateY(-3px); 
        box-shadow: 0 6px 20px rgba(139,0,0,0.06); 
        border-color: #8b0000; 
    }
    .action-card i { 
        font-size: 26px; 
        color: #8b0000; 
        margin-bottom: 12px; 
    }
    .action-card h3 { 
        font-size: 15px; 
        font-weight: 700; 
        color: #111827; 
        margin-bottom: 4px; 
    }
    .action-card p { 
        font-size: 12px; 
        color: #6b7280; 
        line-height: 1.4; 
    }
</style>

<div class="dashboard-header">
    <h1>Dashboard</h1>
    <p>Selamat datang, Petugas RSUD Sejahtera!</p>
</div>

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-label">Total Permintaan Darah</div>
        <div class="stat-main">
            <div class="stat-value">42</div>
            <div class="stat-icon icon-total"><i class="fa-solid fa-file-medical"></i></div>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Sedang Diproses PMI</div>
        <div class="stat-main">
            <div class="stat-value">5</div>
            <div class="stat-icon icon-process"><i class="fa-solid fa-spinner fa-spin"></i></div>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Permintaan Berhasil</div>
        <div class="stat-main">
            <div class="stat-value">37</div>
            <div class="stat-icon icon-success"><i class="fa-solid fa-circle-check"></i></div>
        </div>
    </div>
</div>

<div class="dashboard-grid">
    
    <div class="table-container">
        <div class="panel-title">
            <i class="fa-solid fa-clock-rotate-left" style="color: #8b0000;"></i> Status Permintaan Darah Terbaru
        </div>
        <table class="custom-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Gol. Darah</th>
                    <th>Jumlah</th>
                    <th>Status Sistem</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Suryadi Atmoko</td>
                    <td><strong>A+</strong></td>
                    <td>2 Kantong</td>
                    <td><span class="badge badge-pending">Menunggu PMI</span></td>
                </tr>
                <tr>