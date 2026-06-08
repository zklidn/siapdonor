<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('pmi') ?>" class="menu-item">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('pmi/data_pendonor') ?>" class="menu-item">
        <i class="fa-solid fa-users"></i> Data Pendonor
    </a>
    <a href="<?= base_url('pmi/stok_darah') ?>" class="menu-item menu-active">
        <i class="fa-solid fa-droplet"></i> Stok Darah
    </a>
    <a href="<?= base_url('pmi/permintaan_darah') ?>" class="menu-item">
        <i class="fa-solid fa-file-invoice"></i> Permintaan Darah
    </a>
    <a href="<?= base_url('pmi/riwayat_donor') ?>" class="menu-item">
        <i class="fa-solid fa-clock-rotate-left"></i> Riwayat Donor
    </a>
    <a href="<?= base_url('pmi/laporan') ?>" class="menu-item">
        <i class="fa-solid fa-file-lines"></i> Laporan
    </a>
</aside>

<main class="content-area">
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 30px;">
        <div>
            <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Stok Darah PMI Makassar</h1>
            <p style="color: #6b7280; font-size: 14px;">Pantau ketersediaan stok darah di markas PMI</p>
        </div>
        <button onclick="document.getElementById('modalUpdateStok').style.display='flex'" style="background: #8b0000; color: white; padding: 10px 20px; border-radius: 8px; border: none; font-weight: 600; cursor: pointer; transition: 0.2s;">
            <i class="fa-solid fa-pen-to-square" style="margin-right: 8px;"></i> Update Stok Manual
        </button>
    </div>

    <div style="display: grid; grid-template-columns: repeat(8, 1fr); gap: 15px; margin-bottom: 30px;">
        <?php
        $stok = [
            ['gol' => 'A+', 'jml' => 186], ['gol' => 'A-', 'jml' => 12],
            ['gol' => 'B+', 'jml' => 148], ['gol' => 'B-', 'jml' => 8],
            ['gol' => 'O+', 'jml' => 210], ['gol' => 'O-', 'jml' => 15],
            ['gol' => 'AB+', 'jml' => 96], ['gol' => 'AB-', 'jml' => 5]
        ];
        foreach ($stok as $s) : ?>
            <div style="background: white; padding: 20px 10px; border-radius: 12px; border: 1px solid #e5e7eb; text-align: center;">
                <i class="fa-solid fa-droplet" style="color: #8b0000; margin-bottom: 10px; font-size: 20px;"></i>
                <h4 style="font-size: 16px; font-weight: 700; color: #111827; margin-bottom: 5px;"><?= $s['gol'] ?></h4>
                <p style="font-size: 22px; font-weight: 700; color: #111827;"><?= $s['jml'] ?></p>
                <span style="font-size: 11px; color: #6b7280;">Kantong</span>
            </div>
        <?php endforeach; ?>
    </div>

    <div style="background: white; padding: 25px; border-radius: 12px; border: 1px solid #e5e7eb;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h3 style="font-size: 16px; color: #111827;">Rincian Stok Berdasarkan Komponen</h3>
        </div>
        
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: center; font-size: 14px;">
                <thead>
                    <tr style="border-bottom: 2px solid #f3f4f6; color: #6b7280;">
                        <th style="padding: 15px; text-align: left;">Komponen Darah</th>
                        <th>A+</th> <th>A-</th> <th>B+</th> <th>B-</th> 
                        <th>O+</th> <th>O-</th> <th>AB+</th> <th>AB-</th>
                        <th style="padding: 15px; font-weight: 700; color: #111827;">Total</th>
                    </tr>
                </thead>
                <tbody style="color: #4b5563;">
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 15px; text-align: left; font-weight: 600;">Whole Blood (WB)</td>
                        <td>45</td> <td>3</td> <td>40</td> <td>2</td> 
                        <td>60</td> <td>5</td> <td>30</td> <td>1</td>
                        <td style="font-weight: 700; color: #111827;">186</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 15px; text-align: left; font-weight: 600;">Packed Red Cells (PRC)</td>
                        <td>80</td> <td>5</td> <td>65</td> <td>4</td> 
                        <td>90</td> <td>6</td> <td>40</td> <td>2</td>
                        <td style="font-weight: 700; color: #111827;">292</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 15px; text-align: left; font-weight: 600;">Thrombocyte Concentrate (TC)</td>
                        <td>30</td> <td>2</td> <td>25</td> <td>1</td> 
                        <td>40</td> <td>3</td> <td>15</td> <td>1</td>
                        <td style="font-weight: 700; color: #111827;">117</td>
                    </tr>
                    <tr>
                        <td style="padding: 15px; text-align: left; font-weight: 600;">Fresh Frozen Plasma (FFP)</td>
                        <td>31</td> <td>2</td> <td>18</td> <td>1</td> 
                        <td>20</td> <td>1</td> <td>11</td> <td>1</td>
                        <td style="font-weight: 700; color: #111827;">85</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="modalUpdateStok" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; justify-content: center; align-items: center; backdrop-filter: blur(2px);">
        
        <div style="background: white; width: 500px; border-radius: 12px; padding: 30px; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
            
            <h2 style="font-size: 20px; color: #111827; margin-bottom: 5px;">Update Stok Manual</h2>
            <p style="font-size: 13px; color: #6b7280; margin-bottom: 25px;">Sesuaikan jumlah kantong darah di lemari penyimpanan.</p>
            
            <form action="<?= base_url('pmi/proses_update_stok') ?>" method="POST">
                
                <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                    <div style="flex: 1;">
                        <label style="font-size: 13px; font-weight: 600; color: #374151; display: block; margin-bottom: 8px;">Golongan Darah</label>
                        <select name="gol_darah" style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; outline: none; cursor: pointer;">
                            <option value="A+">A+</option><option value="A-">A-</option>
                            <option value="B+">B+</option><option value="B-">B-</option>
                            <option value="O+">O+</option><option value="O-">O-</option>
                            <option value="AB+">AB+</option><option value="AB-">AB-</option>
                        </select>
                    </div>
                    <div style="flex: 1;">
                        <label style="font-size: 13px; font-weight: 600; color: #374151; display: block; margin-bottom: 8px;">Jenis Update</label>
                        <select name="jenis_update" style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; outline: none; cursor: pointer;">
                            <option value="tambah">+ Penambahan Darah</option>
                            <option value="kurang">- Pengurangan Darah</option>
                        </select>
                    </div>
                </div>

                <div style="margin-bottom: 15px;">
                    <label style="font-size: 13px; font-weight: 600; color: #374151; display: block; margin-bottom: 8px;">Jumlah Kantong</label>
                    <input type="number" name="jumlah" min="1" placeholder="Masukkan angka..." required style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; outline: none;">
                </div>

                <div style="margin-bottom: 25px;">
                    <label style="font-size: 13px; font-weight: 600; color: #374151; display: block; margin-bottom: 8px;">Keterangan / Alasan</label>
                    <textarea name="keterangan" rows="3" placeholder="Misal: Darah kadaluarsa, kantong bocor..." required style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 8px; background: #f9fafb; resize: none; outline: none;"></textarea>
                </div>

                <div style="display: flex; justify-content: flex-end; gap: 10px;">
                    <button type="button" onclick="document.getElementById('modalUpdateStok').style.display='none'" style="background: white; color: #4b5563; border: 1px solid #e5e7eb; padding: 10px 20px; border-radius: 8px; font-weight: 600; cursor: pointer; transition: 0.2s;">Batal</button>
                    
                    <button type="submit" style="background: #8b0000; color: white; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 600; cursor: pointer; transition: 0.2s;">Simpan Update</button>
                </div>
                
            </form>
        </div>
    </div>
    
</main>

<?= $this->endSection() ?>