<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<aside class="sidebar" id="sidebar">
    <a href="<?= base_url('pmi') ?>" class="menu-item">
        <i class="fa-solid fa-house"></i> Dashboard
    </a>
    <a href="<?= base_url('pmi/data_pendonor') ?>" class="menu-item">
        <i class="fa-solid fa-users"></i> Data Pendonor
    </a>
    <a href="<?= base_url('pmi/stok_darah') ?>" class="menu-item">
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
    <div style="margin-bottom: 30px;">
        <h1 style="color: #111827; font-size: 24px; margin-bottom: 5px;">Stok Darah</h1>
        <p style="color: #6b7280; font-size: 14px;">Pantau ketersediaan stok darah di setiap golongan</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(8, 1fr); gap: 15px; margin-bottom: 30px;">
        <?php
        $stok = [
            ['gol' => 'A+', 'jml' => 186], ['gol' => 'A-', 'jml' => 72],
            ['gol' => 'B+', 'jml' => 148], ['gol' => 'B-', 'jml' => 54],
            ['gol' => 'O+', 'jml' => 210], ['gol' => 'O-', 'jml' => 68],
            ['gol' => 'AB+', 'jml' => 96], ['gol' => 'AB-', 'jml' => 58]
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
        <h3 style="margin-bottom: 20px; font-size: 16px; color: #111827;">Stok Darah per Rumah Sakit</h3>
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: center; font-size: 14px;">
                <thead>
                    <tr style="border-bottom: 2px solid #f3f4f6; color: #6b7280;">
                        <th style="padding: 15px; text-align: left;">Rumah Sakit</th>
                        <th>A+</th> <th>A-</th> <th>B+</th> <th>B-</th> 
                        <th>O+</th> <th>O-</th> <th>AB+</th> <th>AB-</th>
                        <th style="padding: 15px; font-weight: 700; color: #111827;">Total</th>
                    </tr>
                </thead>
                <tbody style="color: #4b5563;">
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 15px; text-align: left; font-weight: 600;">RS Undata Palu</td>
                        <td>45</td> <td>12</td> <td>30</td> <td>10</td> 
                        <td>50</td> <td>15</td> <td>20</td> <td>8</td>
                        <td style="font-weight: 700; color: #111827;">190</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 15px; text-align: left; font-weight: 600;">RS Samaritan</td>
                        <td>20</td> <td>5</td> <td>15</td> <td>4</td> 
                        <td>25</td> <td>6</td> <td>10</td> <td>2</td>
                        <td style="font-weight: 700; color: #111827;">87</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 15px; text-align: left; font-weight: 600;">RS Anutapura</td>
                        <td>35</td> <td>8</td> <td>25</td> <td>7</td> 
                        <td>40</td> <td>10</td> <td>15</td> <td>5</td>
                        <td style="font-weight: 700; color: #111827;">145</td>
                    </tr>
                    <tr>
                        <td style="padding: 15px; text-align: left; font-weight: 600;">RS Madani</td>
                        <td>15</td> <td>3</td> <td>10</td> <td>2</td> 
                        <td>18</td> <td>4</td> <td>5</td> <td>1</td>
                        <td style="font-weight: 700; color: #111827;">58</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?= $this->endSection() ?>