<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SiapDonor - Dashboard Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <style>
    body {
      font-family: 'Segoe UI', system-ui, sans-serif;
    }
    .sidebar-active {
      background-color: #fee2e2;
      color: #b91c1c;
      border-left: 4px solid #b91c1c;
    }
  </style>
</head>
<body class="bg-gray-50">

  <!-- HEADER -->
  <header class="bg-[#9f1239] text-white">
    <div class="flex items-center justify-between px-6 py-3">
      <div class="flex items-center gap-3">
        <i class="fas fa-droplet text-3xl"></i>
        <div>
          <h1 class="text-2xl font-bold">SiapDonor</h1>
          <p class="text-xs -mt-1">Donor Darah Cepat</p>
        </div>
      </div>
      
      <button class="lg:hidden text-2xl">
        <i class="fas fa-bars"></i>
      </button>

      <div class="flex items-center gap-3">
        <div class="flex items-center gap-2 bg-white/20 px-3 py-1 rounded-lg">
          <img src="https://i.pravatar.cc/32" alt="Admin" class="w-8 h-8 rounded-full">
          <div>
            <p class="text-sm font-medium">Admin Utama</p>
            <p class="text-xs text-white/70">Admin</p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="flex">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white border-r min-h-screen hidden lg:block">
      <nav class="mt-6">
        <a href="#" class="sidebar-active flex items-center gap-3 px-6 py-3 text-sm font-medium">
          <i class="fas fa-home w-5"></i>
          <span>Dashboard</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-6 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50">
          <i class="fas fa-users w-5"></i>
          <span>Data Donor</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-6 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50">
          <i class="fas fa-search w-5"></i>
          <span>Cari Donor</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-6 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50">
          <i class="fas fa-hand-holding-medical w-5"></i>
          <span>Permintaan Darah</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-6 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50">
          <i class="fas fa-history w-5"></i>
          <span>Riwayat</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-6 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50">
          <i class="fas fa-user-cog w-5"></i>
          <span>Pengguna</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-6 py-3 text-sm font-medium text-gray-600 hover:bg-gray-50 mt-8">
          <i class="fas fa-sign-out-alt w-5"></i>
          <span>Logout</span>
        </a>
      </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-6">
      <h1 class="text-2xl font-bold mb-1">Dashboard</h1>
      <p class="text-gray-600 mb-6">Selamat datang, <span class="font-semibold text-red-700">Admin Utama!</span></p>

      <!-- STAT CARDS -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Card 1 -->
        <div class="bg-white rounded-2xl shadow-sm p-6 flex items-center gap-4">
          <div class="w-14 h-14 bg-red-100 text-red-600 rounded-2xl flex items-center justify-center text-3xl">
            👤
          </div>
          <div>
            <p class="text-4xl font-bold text-gray-800">120</p>
            <p class="text-gray-600">Total Donor</p>
          </div>
          <a href="#" class="ml-auto text-red-600 text-sm font-medium hover:underline">Lihat detail →</a>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl shadow-sm p-6 flex items-center gap-4">
          <div class="w-14 h-14 bg-green-100 text-green-600 rounded-2xl flex items-center justify-center text-3xl">
            👤
          </div>
          <div>
            <p class="text-4xl font-bold text-gray-800">85</p>
            <p class="text-gray-600">Donor Aktif</p>
          </div>
          <a href="#" class="ml-auto text-green-600 text-sm font-medium hover:underline">Lihat detail →</a>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl shadow-sm p-6 flex items-center gap-4">
          <div class="w-14 h-14 bg-orange-100 text-orange-600 rounded-2xl flex items-center justify-center text-3xl">
            🔒
          </div>
          <div>
            <p class="text-4xl font-bold text-gray-800">18</p>
            <p class="text-gray-600">Permintaan Masuk</p>
          </div>
          <a href="#" class="ml-auto text-orange-600 text-sm font-medium hover:underline">Lihat detail →</a>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- AKTIVITAS TERBARU -->
        <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm p-6">
          <div class="flex justify-between items-center mb-4">
            <h2 class="font-semibold text-lg">Aktivitas Terbaru</h2>
            <a href="#" class="text-red-600 text-sm hover:underline">Lihat semua aktivitas →</a>
          </div>
          
          <table class="w-full">
            <thead>
              <tr class="border-b">
                <th class="text-left py-3 text-sm font-medium text-gray-500">No</th>
                <th class="text-left py-3 text-sm font-medium text-gray-500">Aktivitas</th>
                <th class="text-left py-3 text-sm font-medium text-gray-500">Tanggal</th>
                <th class="text-left py-3 text-sm font-medium text-gray-500">Oleh</th>
              </tr>
            </thead>
            <tbody class="text-sm">
              <tr class="border-b">
                <td class="py-3">1</td>
                <td class="py-3">Donor baru ditambahkan</td>
                <td class="py-3">20 Mei 2025</td>
                <td class="py-3 text-red-600">PMI Makassar</td>
              </tr>
              <tr class="border-b">
                <td class="py-3">2</td>
                <td class="py-3">Permintaan darah baru</td>
                <td class="py-3">20 Mei 2025</td>
                <td class="py-3 text-red-600">RS Wahidin</td>
              </tr>
              <tr class="border-b">
                <td class="py-3">3</td>
                <td class="py-3">Status permintaan diperbarui</td>
                <td class="py-3">19 Mei 2025</td>
                <td class="py-3 text-red-600">PMI Makassar</td>
              </tr>
              <tr>
                <td class="py-3">4</td>
                <td class="py-3">Donor diperbarui</td>
                <td class="py-3">19 Mei 2025</td>
                <td class="py-3">Admin</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- AKSI CEPAT -->
        <div>
          <div class="bg-white rounded-2xl shadow-sm p-6 mb-6">
            <h2 class="font-semibold mb-4">Aksi Cepat</h2>
            <button class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-xl font-medium flex items-center justify-center gap-2 mb-3">
              <i class="fas fa-plus"></i>
              Tambah Donor
            </button>
            <button class="w-full border border-red-600 text-red-600 hover:bg-red-50 py-3 rounded-xl font-medium">
              Cari Donor
            </button>
          </div>

          <!-- INFORMASI -->
          <div class="bg-white rounded-2xl shadow-sm p-6">
            <h3 class="font-semibold mb-2">Informasi</h3>
            <p class="text-sm text-gray-600">
              Pastikan data donor selalu diperbarui agar pencarian donor lebih akurat dan cepat.
            </p>
          </div>
        </div>

      </div>
    </main>
  </div>

</body>
</html>