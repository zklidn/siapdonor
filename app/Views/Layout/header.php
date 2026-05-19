<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiapDonor</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        
        /* Background kita set putih full biar match sama desain verif email */
        body { background-color: #ffffff; display: flex; flex-direction: column; min-height: 100vh; }
        
        /* Header dengan garis bawah dan font merah gelap */
        header { 
            background-color: #ffffff; 
            padding: 20px 40px; 
            border-bottom: 1px solid #000000; /* Garis hitam bawah */
            display: flex; justify-content: space-between; align-items: center; 
        }
        header .logo { display: flex; align-items: center; gap: 15px; }
        header .logo img { height: 35px; } /* Ukuran gambar logo */
        header .logo h2 { color: #800000; font-size: 22px; font-weight: 700; }
        header nav a { text-decoration: none; color: #800000; font-weight: 700; font-size: 18px; }
        header nav a:hover { opacity: 0.7; }

        /* Area tengah */
        main { flex: 1; display: flex; justify-content: center; align-items: center; padding: 20px; }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo Siap Donor">
            <h2>Siap Donor</h2>
        </div>
        <nav>
            <a href="#">Tentang</a>
        </nav>
    </header>

    <main>