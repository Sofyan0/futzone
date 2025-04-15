<?php
// Basic PHP structure for FutZone landing page
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutZone - Booking Lapangan Futsal Online</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2e7d32;
            --secondary-color: #1b5e20;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }
        
        /* Header Styles */
        .navbar {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 0.8rem 1rem;
        }
        
        .navbar-brand {
            font-weight: bold;
            color: var(--primary-color);
            font-size: 1.5rem;
        }
        
        .nav-link {
            color: #333;
            font-weight: 500;
            margin: 0 0.5rem;
        }
        
        .btn-register {
            background-color: var(--primary-color);
            color: white;
            border-radius: 4px;
            padding: 0.4rem 1rem;
            font-weight: 500;
        }
        
        /* Hero Section */
        .hero {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://via.placeholder.com/1920x1080');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 6rem 0;
            position: relative;
            height: 500px;
            display: flex;
            align-items: center;
        }
        
        .hero-content h1 {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            max-width: 600px;
        }
        
        .btn-booking {
            background-color: var(--primary-color);
            color: white;
            padding: 0.7rem 2rem;
            font-size: 1.1rem;
            font-weight: 500;
            border: none;
            border-radius: 4px;
        }
        
        /* Features Section */
        .feature-card {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 1.5rem;
            border-radius: 0;
            height: 100%;
        }
        
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        /* Field Section */
        .section-title {
            text-align: center;
            position: relative;
            margin-bottom: 3rem;
        }
        
        .section-title:after {
            content: '';
            display: block;
            width: 100px;
            height: 3px;
            background-color: var(--primary-color);
            margin: 0.5rem auto 0;
        }
        
        .field-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 2rem;
            height: 100%;
        }
        
        .field-img {
            height: 200px;
            background-size: cover;
            background-position: center;
        }
        
        .field-body {
            padding: 1.5rem;
        }
        
        .field-title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 1rem;
        }
        
        .field-text {
            font-size: 0.9rem;
            color: #666;
        }
        
        .btn-field {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 4px;
            padding: 0.5rem 1.5rem;
            display: block;
            width: 100%;
            text-align: center;
            text-decoration: none;
        }
        
        /* Schedule Section */
        .schedule-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .schedule-table th, .schedule-table td {
            border: 1px solid #fff;
            padding: 0.5rem;
            text-align: center;
        }
        
        .schedule-table th {
            background-color: var(--secondary-color);
            color: white;
        }
        
        .schedule-table td {
            background-color: var(--primary-color);
            color: white;
        }
        
        .field-row {
            height: 40px;
        }
        
        /* About Section */
        .about-section {
            background-color: var(--primary-color);
            color: white;
            padding: 3rem 0;
        }
        
        .about-content h2 {
            font-weight: bold;
            margin-bottom: 1rem;
        }
        
        .social-icons a {
            color: white;
            font-size: 1.2rem;
            margin-right: 1rem;
        }
        
        /* Footer */
        footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 2rem 0;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .contact-icon {
            margin-right: 1rem;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <!-- Header/Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">FutZone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">JADWAL LAPANGAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LAPANGAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BOOKING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-register" href="#">REGISTER</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/futsal-field.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 hero-content">
                    <h1>Welcome To <br>FutZone</h1>
                    <p>Mudah, Praktis dan anda dapat melihat ketersediaan jadwal, memilih lapangan, serta melakukan pembayaran secara digital tanpa perlu datang langsung ke lokasi.</p>
                    <a href="#" class="btn btn-booking">Booking</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="images/futzone-building.jpg" alt="FutZone Building" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-3">Selamat Datang di <br><strong>FutZone</strong></h2>
                    <p>Didirikan untuk memenuhi kebutuhan akan lapangan futsal berkualitas, kami telah berkembang menjadi tempat favorit para pecinta futsal.</p>
                    <p>Dengan fasilitas modern dan layanan terbaik, kami terus berusaha memberikan pengalaman bermain yang nyaman dan menyenangkan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-4">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-futbol"></i>
                        </div>
                        <h5>CLUB FOOTBALL</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h5>EVENT FOOTBALL</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h5>CUP FOOTBALL</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5>TEAM FOOTBALL</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Field Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Lapangan Tersedia</h2>
            
            <div class="row">
                <!-- Field 1 -->
                <div class="col-md-4">
                    <div class="field-card">
                        <div class="field-img" style="background-image: url('images/field1.jpg');"></div>
                        <div class="field-body">
                            <h4 class="field-title">Lapangan 1</h4>
                            <p class="field-text">Nikmati pengalaman bermain futsal terbaik di lapangan kami yang terawat. Dengan ukuran standar internasional, rumput sintetis dan fasilitas lengkap untuk memberikan kenyamanan bermain. Anda dapat menikmati setiap momen bermain futsal bersama teman-teman.</p>
                            <a href="#" class="btn-field">Lihat lebih lengkap</a>
                        </div>
                    </div>
                </div>
                
                <!-- Field 2 -->
                <div class="col-md-4">
                    <div class="field-card">
                        <div class="field-img" style="background-image: url('images/field2.jpg');"></div>
                        <div class="field-body">
                            <h4 class="field-title">Lapangan 2</h4>
                            <p class="field-text">Nikmati pengalaman bermain futsal terbaik di lapangan kami yang terawat. Dengan ukuran standar internasional, rumput sintetis dan fasilitas lengkap untuk memberikan kenyamanan bermain. Anda dapat menikmati setiap momen bermain futsal bersama teman-teman.</p>
                            <a href="#" class="btn-field">Lihat lebih lengkap</a>
                        </div>
                    </div>
                </div>
                
                <!-- Field 3 -->
                <div class="col-md-4">
                    <div class="field-card">
                        <div class="field-img" style="background-image: url('images/field3.jpg');"></div>
                        <div class="field-body">
                            <h4 class="field-title">Lapangan 3</h4>
                            <p class="field-text">Nikmati pengalaman bermain futsal terbaik di lapangan kami yang terawat. Dengan ukuran standar internasional, rumput sintetis dan fasilitas lengkap untuk memberikan kenyamanan bermain. Anda dapat menikmati setiap momen bermain futsal bersama teman-teman.</p>
                            <a href="#" class="btn-field">Lihat lebih lengkap</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Additional Fields in a smaller format -->
            <div class="row mt-4">
                <!-- Field 1 -->
                <div class="col-md-3">
                    <div class="field-card">
                        <div class="field-img" style="background-image: url('images/field1.jpg'); height: 150px;"></div>
                        <div class="field-body">
                            <h5 class="field-title">Lapangan 1</h5>
                            <p class="field-text" style="font-size: 0.8rem;">Lapangan futsal berkualitas dengan ukuran standar dan fasilitas lengkap.</p>
                            <a href="#" class="btn-field btn-sm">BOOK</a>
                        </div>
                    </div>
                </div>
                
                <!-- Field 2 -->
                <div class="col-md-3">
                    <div class="field-card">
                        <div class="field-img" style="background-image: url('images/field2.jpg'); height: 150px;"></div>
                        <div class="field-body">
                            <h5 class="field-title">Lapangan 2</h5>
                            <p class="field-text" style="font-size: 0.8rem;">Lapangan futsal berkualitas dengan ukuran standar dan fasilitas lengkap.</p>
                            <a href="#" class="btn-field btn-sm">BOOK</a>
                        </div>
                    </div>
                </div>
                
                <!-- Field 3 -->
                <div class="col-md-3">
                    <div class="field-card">
                        <div class="field-img" style="background-image: url('images/field3.jpg'); height: 150px;"></div>
                        <div class="field-body">
                            <h5 class="field-title">Lapangan 3</h5>
                            <p class="field-text" style="font-size: 0.8rem;">Lapangan futsal berkualitas dengan ukuran standar dan fasilitas lengkap.</p>
                            <a href="#" class="btn-field btn-sm">BOOK</a>
                        </div>
                    </div>
                </div>
                
                <!-- Field 4 -->
                <div class="col-md-3">
                    <div class="field-card">
                        <div class="field-img" style="background-image: url('images/field4.jpg'); height: 150px;"></div>
                        <div class="field-body">
                            <h5 class="field-title">Lapangan 4</h5>
                            <p class="field-text" style="font-size: 0.8rem;">Lapangan futsal berkualitas dengan ukuran standar dan fasilitas lengkap.</p>
                            <a href="#" class="btn-field btn-sm">BOOK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Jadwal Lapangan</h2>
            
            <div class="table-responsive">
                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th>08:00</th>
                            <th>09:00</th>
                            <th>10:00</th>
                            <th>11:00</th>
                            <th>12:00</th>
                            <th>13:00</th>
                            <th>14:00</th>
                            <th>15:00</th>
                            <th>16:00</th>
                            <th>17:00</th>
                            <th>18:00</th>
                            <th>19:00</th>
                            <th>20:00</th>
                            <th>21:00</th>
                            <th>22:00</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // This would typically be populated from a database
                        $fields = [
                            'Lapangan 1', 'Lapangan 2', 'Lapangan 3', 'Lapangan 4',
                            'Lapangan 5', 'Lapangan 6', 'Lapangan 7', 'Lapangan 8',
                            'Lapangan 9', 'Lapangan 10', 'Lapangan 11'
                        ];
                        
                        foreach ($fields as $field) {
                            echo '<tr class="field-row">';
                            echo '<td>' . $field . '</td>';
                            for ($i = 0; $i < 14; $i++) {
                                echo '<td></td>';
                            }
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/gallery1.jpg" alt="Gallery Image 1" class="img-fluid mb-4">
                </div>
                <div class="col-md-4">
                    <img src="images/gallery2.jpg" alt="Gallery Image 2" class="img-fluid mb-4">
                </div>
                <div class="col-md-4">
                    <img src="images/gallery3.jpg" alt="Gallery Image 3" class="img-fluid mb-4">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            Jl. Tebet No.17, Panjang Klanganan,<br>
                            Kec. Tebet Barat, Kota Jakarta Selatan, DKI Jakarta
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            +62 895 3548 22539
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            info@futzone.com
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <h3>FutZone</h3>
                    <p>Kami menyediakan lapangan permainan berkualitas untuk semua pemain yang nyaman dan aman. Dengan lapangan berkualitas, tim dari pemain akan lebih bersemangat dalam bermain.</p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <?php
    // You might want to add PHP functionality for handling database connections, 
    // booking logic, showing available fields, etc.
    ?>
</body>
</html>