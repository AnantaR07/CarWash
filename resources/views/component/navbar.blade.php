<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carwash Online</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #004aad;
      color: white;
      position: relative;
    }
    .navbar .logo img {
      height: 60px;
      width: 60px;
      border-radius: 50%; /* Membuat logo bundar */
      object-fit: cover;
    }
    .navbar ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      transition: transform 0.3s ease;
    }
    .navbar ul li {
      margin: 0 15px;
    }
    .navbar ul li a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }
    .navbar ul li a:hover {
      color: #ffd700;
    }
    .navbar .button {
      background-color: #ffd700;
      color: #004aad;
      padding: 10px 20px;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      text-transform: uppercase;
      font-weight: bold;
      transition: all 0.3s ease-in-out;
      color: white;
      text-decoration: none; /* No underline */
    }

    /* Animasi untuk tombol login */
    .navbar .button:hover {
      background-color: #e5c700;
      color: #ffffff;
      transform: scale(1.1) rotate(5deg); /* Memperbesar dan sedikit memutar tombol */
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); /* Efek bayangan */
    }

    /* Tombol toggle pada layar kecil */
    .navbar .toggle-btn {
      display: none;
      flex-direction: column;
      justify-content: space-around;
      align-items: center;
      height: 30px;
      width: 30px;
      background-color: transparent;
      border: none;
      cursor: pointer;
      position: absolute;
      right: 20px; /* Posisikan di pojok kanan */
      top: 20px;
      z-index: 10;
    }

    .navbar .toggle-btn div {
      width: 25px;
      height: 3px;
      background-color: white;
      transition: transform 0.3s ease;
    }

    /* Responsif untuk layar kecil */
    @media (max-width: 768px) {
      .navbar {
        flex-direction: column; /* Navbar menjadi vertikal */
        align-items: flex-start;
      }
      .navbar ul {
        flex-direction: column;
        width: 100%; /* Menggunakan lebar penuh */
        padding: 0;
        display: none; /* Menyembunyikan menu di layar kecil */
        transform: translateY(-100%); /* Menyembunyikan menu di atas layar */
      }
      .navbar ul li {
        margin: 10px 0;
      }
      .navbar .button {
        align-self: stretch; /* Membuat tombol memanjang */
        text-align: center;
      }
      .navbar .toggle-btn {
        display: flex; /* Menampilkan tombol toggle */
      }
      .navbar ul.show {
        display: flex; /* Menampilkan menu ketika tombol toggle diklik */
        transform: translateY(0); /* Menampilkan menu dengan animasi */
      }
      .navbar .toggle-btn.open div:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px); /* Rotasi bar pertama */
      }
      .navbar .toggle-btn.open div:nth-child(2) {
        opacity: 0; /* Menghilangkan bar tengah */
      }
      .navbar .toggle-btn.open div:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px); /* Rotasi bar ketiga */
      }
    }
  </style>
</head>
<body>
  <div class="navbar">
    <div class="logo">
      <img src="{{ asset('img/logo.jpg') }}" alt="Carwash Logo">
    </div>
    <!-- Tombol Toggle Menu -->
    <button class="toggle-btn" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
    </button>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Daftar Pencucian Mobil</a></li>
    </ul>
    <a href="{{ route('login') }}" class="button">Login</a>
  </div>

  <script>
    function toggleMenu() {
      const menu = document.querySelector('.navbar ul');
      const toggleBtn = document.querySelector('.toggle-btn');
      menu.classList.toggle('show');
      toggleBtn.classList.toggle('open'); // Menambahkan animasi pada tombol toggle
    }
  </script>
</body>
</html>
