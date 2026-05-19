<style>
    .page-title { margin-bottom: 20px; }
    .page-title h1 { font-size: 24px; font-weight: 600; color: #111827; }
    .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin: 20px 0; }
    .stat-card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
    .stat-icon { width: 40px; height: 40px; border-radius: 8px; display: flex; justify-content: center; align-items: center; font-size: 18px; margin-bottom: 10px; }
    
    .card-red .stat-icon { background: #fee2e2; color: #ef4444; }
    .card-green .stat-icon { background: #dcfce3; color: #22c55e; }
    .card-orange .stat-icon { background: #ffedd5; color: #f97316; }
    
    .bottom-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 20px; }
    .box { background: white; border-radius: 8px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
    table { width: 100%; border-collapse: collapse; font-size: 13px; text-align: left; margin-top: 15px;}
    th { color: #6b7280; padding-bottom: 12px; font-weight: 500; border-bottom: 1px solid #e5e7eb; }
    td { padding: 12px 0; border-bottom: 1px solid #f3f4f6; }
    .btn-quick { width: 100%; background: #8b0000; color: white; border: none; padding: 10px; border-radius: 6px; cursor: pointer; font-weight: 500; margin-bottom: 10px;}

    @media (max-width: 768px) {
        .bottom-grid { grid-template-columns: 1fr; }
    }
</style>

<div class="page-title">
    <h1>Dashboard</h1>
    <p style="font-size: 14px; color: #6b7280;">Selamat datang, Admin Utama!</p>
</div>

<div class="stats-grid">
    <div class="stat-card card-red">
        <div class="stat-icon"><i class="fa-solid fa-users"></i></div>
        <h3 style="font-size: 24px;">120</h3>
        <p style="font-size: 13px; color: #6b7280;">Total Donor</p>
    </div>
    <div class="stat-card card-green">
        <div class="stat-icon"><i class="fa-solid fa-user-check"></i></div>
        <h3 style="font-size: 24px;">85</h3>
        <p style="font-size: 13px; color: #6b7280;">Donor Aktif</p>
    </div>
    <div class="stat-card card-orange">
        <div class="stat-icon"><i class="fa-solid fa-file-lines"></i></div>
        <h3 style="font-size: 24px;">18</h3>
        <p style="font-size: 13px; color: #6b7280;">Permintaan Masuk</p>
    </div>
</div>

<div class="bottom-grid">
    <div class="box">
        <h3 style="font-size: 16px;">Aktivitas Terbaru</h3>
        <table>
            <thead>
                <tr>
                    <th>Aktivitas</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Donor baru ditambahkan</td>
                    <td>20 Mei 2026</td>
                </tr>
                <tr>
                    <td>Permintaan darah baru</td>
                    <td>20 Mei 2026</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="box">
        <h3 style="font-size: 16px; margin-bottom:15px;">Aksi Cepat</h3>
        <button class="btn-quick">+ Tambah Donor</button>
        <button class="btn-quick" style="background: white; color: #8b0000; border: 1px solid #8b0000;">Cari Donor</button>
    </div>
</div>