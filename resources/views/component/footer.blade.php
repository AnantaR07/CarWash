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

    /* Styling Footer */
    .footer {
      background-color: #333;
      color: white;
      padding: 40px 20px;
      text-align: center;
    }
    .footer .footer-content {
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }
    .footer .footer-content .section {
      flex: 1;
      min-width: 200px;
      margin: 10px;
    }
    .footer .footer-content h3 {
      color: #ffd700;
      margin-bottom: 10px;
    }
    .footer .footer-content p, .footer .footer-content ul {
      font-size: 14px;
      line-height: 1.5;
    }
    .footer .footer-content ul {
      list-style-type: none;
      padding: 0;
    }
    .footer .footer-content ul li {
      margin-bottom: 5px;
    }

    /* Quick Links Styling */
    .footer .footer-content ul li a {
      color: white;
      text-decoration: none; /* No underline */
      font-size: 14px;
      transition: color 0.3s ease; /* Smooth color change */
    }

    .footer .footer-content ul li a:hover {
      color: #ffd700; /* Change color to gold on hover */
    }

    /* Styling for Footer Bottom */
    .footer .footer-bottom {
      background-color: #222;
      padding: 10px 0;
      font-size: 12px;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
      .footer .footer-content {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="footer-content">
      <!-- Section 1: About Us -->
      <div class="section">
        <h3>About Us</h3>
        <p>"Kami menawarkan layanan cuci mobil terbaik untuk menjaga kendaraan anda tetap bersih dan mengkilap. Pesan Sekarang!"</p>
      </div>
      <!-- Section 2: Quick Links -->
      <div class="section">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Daftar Pencucian Mobil</a></li>
        </ul>
      </div>
      <!-- Section 3: Contact Info -->
      <div class="section">
        <h3>Contact Info</h3>
        <p><strong>Email:</strong> support@carwash.com</p>
        <p><strong>Phone:</strong> 087750704842</p>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <p>&copy; 2024 Carwash Online. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
