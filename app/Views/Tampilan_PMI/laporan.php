<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('dashboard-pmi') ?>" class="menu-item">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('data-donor') ?>" class="menu-item">
        <i class="fa-solid fa-hand-holding-droplet"></i> Data Donor
    </a>
    <a href="#" class="menu-item">
        <i class="fa-solid fa-magnifying-glass"></i> Cari Donor
    </a>
    <a href="#" class="menu-item">
        <i class="fa-solid fa-file-invoice-dollar"></i> Permintaan
    </a>
    <a href="#" class="menu-item">
        <i class="fa-solid fa-globe"></i> Riwayat
    </a>
    <a href="#" class="menu-item menu-active">
        <i class="fa-solid fa-file-lines"></i> Laporan
    </a>
</aside>

<main class="content-area">
    
    <?php
        $nama_hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        $nama_bulan = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        
        $hari_ini = $nama_hari[date('w')];
        $tanggal_ini = date('d');
        $bulan_ini = $nama_bulan[date('n')];
        $tahun_ini = date('Y');
        
        $tanggal_sekarang = $hari_ini . ", " . $tanggal_ini . " " . $bulan_ini . " " . $tahun_ini;
    ?>

    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px;">
        <div>
            <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Laporan</h1>
            <p style="color: #6b7280; font-size: 14px;">Laporan kegiatan donor dan stok darah</p>
        </div>
        <div style="color: #6b7280; font-size: 13px; display: flex; align-items: center; gap: 8px; background: white; padding: 8px 15px; border-radius: 8px; border: 1px solid #e5e7eb;">
            <i class="fa-regular fa-calendar"></i> <?= $tanggal_sekarang ?>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1.5fr; gap: 20px; margin-bottom: 25px;">
        
        <div style="background: white; padding: 20px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; align-items: flex-end; gap: 15px; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 150px;">
                <label style="display: block; font-size: 12px; color: #4b5563; font-weight: 600; margin-bottom: 8px;">Jenis Laporan</label>
                <select style="width: 100%; padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 13px; color: #111827; background: #f9fafb; cursor: pointer;">
                    <option>Laporan Stok Darah</option>
                    <option>Laporan Aktivitas Donor</option>
                    <option>Laporan Permintaan RS</option>
                </select>
            </div>
            <div style="flex: 1; min-width: 180px;">
                <label style="display: block; font-size: 12px; color: #4b5563; font-weight: 600; margin-bottom: 8px;">Periode</label>
                <input type="text" value="01/05/2025 - 20/05/2025" style="width: 100%; padding: 10px 15px; border: 1px solid #e5e7eb; border-radius: 8px; outline: none; font-size: 13px; color: #111827; background: #f9fafb; text-align: center;">
            </div>
            <div>
                <button style="background: #8b0000; color: white; border: none; padding: 11px 20px; border-radius: 8px; font-weight: 600; font-size: 13px; cursor: pointer; transition: 0.2s;">
                    Generate
                </button>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
            <div style="background: white; padding: 15px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: center;">
                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                    <i class="fa-solid fa-user-check" style="color: #4b5563; font-size: 14px;"></i>
                    <span style="font-size: 11px; color: #6b7280; font-weight: 600;">Donor Aktif</span>
                </div>
                <h3 style="font-size: 22px; color: #111827;">85</h3>
            </div>
            
            <div style="background: white; padding: 15px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: center;">
                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                    <i class="fa-solid fa-users" style="color: #dc2626; font-size: 14px;"></i>
                    <span style="font-size: 11px; color: #6b7280; font-weight: 600;">Total Donor</span>
                </div>
                <h3 style="font-size: 22px; color: #111827;">1.248</h3>
            </div>

            <div style="background: white; padding: 15px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: center;">
                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                    <i class="fa-solid fa-droplet" style="color: #dc2626; font-size: 14px;"></i>
                    <span style="font-size: 11px; color: #6b7280; font-weight: 600;">Total Stok Darah</span>
                </div>
                <h3 style="font-size: 20px; color: #111827;">892 <span style="font-size: 12px; color: #6b7280; font-weight: normal;">Kantong</span></h3>
            </div>

            <div style="background: white; padding: 15px; border-radius: 12px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: center;">
                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                    <i class="fa-solid fa-file-invoice" style="color: #dc2626; font-size: 14px;"></i>
                    <span style="font-size: 11px; color: #6b7280; font-weight: 600;">Permintaan Masuk</span>
                </div>
                <h3 style="font-size: 22px; color: #111827;">23</h3>
            </div>
        </div>

    </div>

    <div style="display: grid; grid-template-columns: 1.8fr 1fr; gap: 20px;">
        
        <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb; min-width: 0; overflow: hidden;">
            <h3 style="margin-bottom: 20px; font-size: 15px; color: #111827; font-weight: 600;">Grafik Stok Darah</h3>
            <div style="position: relative; height: 300px; width: 100%;">
                <canvas id="stokDarahChart"></canvas>
            </div>
        </div>

        <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
            <h3 style="margin-bottom: 20px; font-size: 15px; color: #111827; font-weight: 600;">Ringkasan Stok Darah</h3>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: X; column-gap: 30px;">
                
                <div style="display: flex; flex-direction: column;">
                    <div style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid #f3f4f6; font-size: 13px;">
                        <span style="font-weight: 600; color: #111827;">A+</span>
                        <span style="color: #4b5563;">186 Kantong</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid #f3f4f6; font-size: 13px;">
                        <span style="font-weight: 600; color: #111827;">A-</span>
                        <span style="color: #4b5563;">72 Kantong</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid #f3f4f6; font-size: 13px;">
                        <span style="font-weight: 600; color: #111827;">B+</span>
                        <span style="color: #4b5563;">148 Kantong</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; padding: 12px 0; font-size: 13px;">
                        <span style="font-weight: 600; color: #111827;">B-</span>
                        <span style="color: #4b5563;">54 Kantong</span>
                    </div>
                </div>

                <div style="display: flex; flex-direction: column;">
                    <div style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid #f3f4f6; font-size: 13px;">
                        <span style="font-weight: 600; color: #111827;">O+</span>
                        <span style="color: #4b5563;">210 Kantong</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid #f3f4f6; font-size: 13px;">
                        <span style="font-weight: 600; color: #111827;">O-</span>
                        <span style="color: #4b5563;">68 Kantong</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid #f3f4f6; font-size: 13px;">
                        <span style="font-weight: 600; color: #111827;">AB+</span>
                        <span style="color: #4b5563;">96 Kantong</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; padding: 12px 0; font-size: 13px;">
                        <span style="font-weight: 600; color: #111827;">AB-</span>
                        <span style="color: #4b5563;">58 Kantong</span>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div style="margin-top: 40px; color: #9ca3af; font-size: 12px;">
        &copy; 2026 SiapDonor. All rights reserved.
    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const ctx = document.getElementById('stokDarahChart').getContext('2d');
        
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['01 Mei', '05 Mei', '10 Mei', '15 Mei', '20 Mei'],
                datasets: [
                    {
                        label: 'A+',
                        data: [150, 200, 180, 220, 160],
                        borderColor: '#ef4444', // Merah
                        backgroundColor: '#ef4444',
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 3
                    },
                    {
                        label: 'A-',
                        data: [120, 160, 140, 180, 130],
                        borderColor: '#3b82f6', // Biru
                        backgroundColor: '#3b82f6',
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 3
                    },
                    {
                        label: 'B+',
                        data: [90, 130, 110, 140, 100],
                        borderColor: '#8b5cf6', // Ungu
                        backgroundColor: '#8b5cf6',
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 3
                    },
                    {
                        label: 'B-',
                        data: [70, 100, 90, 115, 85],
                        borderColor: '#10b981', // Hijau
                        backgroundColor: '#10b981',
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 3
                    },
                    {
                        label: 'O+',
                        data: [45, 65, 55, 75, 60],
                        borderColor: '#d97706', // Oranye
                        backgroundColor: '#d97706',
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 3
                    },
                    {
                        label: 'O-',
                        data: [25, 45, 35, 55, 40],
                        borderColor: '#f43f5e', // Pink
                        backgroundColor: '#f43f5e',
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 3
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            boxWidth: 8,
                            font: { size: 11, family: "'Inter', sans-serif" }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 250,
                        grid: { color: '#f3f4f6' },
                        ticks: { font: { size: 11, family: "'Inter', sans-serif" } }
                    },
                    x: {
                        grid: { display: false },
                        ticks: { font: { size: 11, family: "'Inter', sans-serif" } }
                    }
                }
            }
        });
    });
</script>

<?= $this->endSection() ?>