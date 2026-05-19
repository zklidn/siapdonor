<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email - Siap Donor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');
        
        body {
            font-family: 'Inter', system-ui, sans-serif;
        }
        
        .card {
            background-color: #9B1C1C;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body class="bg-white min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <!-- Logo -->
                <div class="w-9 h-9 bg-green-700 rounded-lg flex items-center justify-center text-white font-bold text-xl">
                    🏠
                </div>
                <span class="text-2xl font-semibold text-red-800">Siap Donor</span>
            </div>
            <a href="#" class="text-red-800 font-medium hover:underline">Tentang</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-1 flex items-center justify-center p-6">
        <div class="card w-full max-w-md rounded-3xl p-10 text-white">
            <h1 class="text-3xl font-semibold text-center mb-6">
                Verifikasi Email Kamu
            </h1>
            
            <p class="text-center text-white/90 leading-relaxed mb-8">
                Kamu menggunakan <span class="font-medium">Example@gmail.com</span> sebagai<br>
                alamat email akun kamu. Verifikasi Email kamu.
            </p>

            <button onclick="alert('Tombol verifikasi diklik! (Simulasi)')" 
                    class="w-full bg-white text-red-800 font-semibold py-4 px-6 rounded-2xl hover:bg-gray-100 transition-colors text-lg">
                Verifikasi Email Kamu
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-6 text-center text-sm text-gray-600 border-t">
        © 2026 Siap Donor - All rights reserved.
    </footer>

</body>
</html>