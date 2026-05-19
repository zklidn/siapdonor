<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
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

=======
    <title>SiapDonor - Verifikasi Berhasil</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { background-color: #f9fafb; display: flex; justify-content: center; align-items: center; min-height: 100vh; padding: 20px; }
        .auth-card { background-color: #ffffff; width: 100%; max-width: 420px; padding: 50px 32px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05); text-align: center; }
        .success-icon { color: #22c55e; font-size: 60px; margin-bottom: 20px; }
        .title { font-size: 22px; font-weight: 700; color: #111827; margin-bottom: 10px; }
        .message { font-size: 14px; color: #4b5563; margin-bottom: 30px; line-height: 1.5; }
        .loader { border: 3px solid #f3f3f3; border-top: 3px solid #8b0000; border-radius: 50%; width: 24px; height: 24px; animation: spin 1s linear infinite; margin: 0 auto 10px auto; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        .redirect-text { font-size: 12px; color: #9ca3af; }
    </style>
</head>
<body>
    <div class="auth-card">
        <i class="fa-solid fa-circle-check success-icon"></i>
        <h2 class="title">Verifikasi Berhasil!</h2>
        <p class="message">Akun Anda telah berhasil diverifikasi.<br>Anda akan diarahkan ke dashboard.</p>
        <div class="loader"></div>
        <div class="redirect-text">Mengalihkan...</div>
    </div>
>>>>>>> sunflower
</body>
</html>