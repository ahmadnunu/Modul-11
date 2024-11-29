<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuba Interior</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            position: relative;
            height: 600px;
            overflow: hidden;
            color: white;
        }

        .hero img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        .hero .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <section class="hero">
    <img src="{{ Vite::asset('resources/images/hero.jpg') }}" alt="Hero">
        <div class="hero-content">
            <h1 class="display-4 fw-bold">Nuba Interior</h1>
            <p class="lead">Transform Your Space with Elegance and Style</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold">About Us</h2>
            <p class="mt-3">At Nuba Interior, we specialize in creating personalized and functional interior designs
                that
                match your taste and lifestyle.</p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Our Projects</h2>
            <div class="row g-3">
                <div class="col-md-4">
                <img src="{{ Vite::asset('resources/images/gambar1.jpg') }}" alt="Gambar 1">
                </div>
                <div class="col-md-4">
                <img src="{{ Vite::asset('resources/images/gambar2.jpg') }}" alt="Gambar 2">
                </div>
                <div class="col-md-4">
                <img src="{{ Vite::asset('resources/images/gambar3.jpg') }}" alt="Gambar 3">
                </div>
                <div class="col-md-4">
                <img src="{{ Vite::asset('resources/images/gambar4.jpg') }}" alt="Gambar 4">
                </div>
                <div class="col-md-4">
                <img src="{{ Vite::asset('resources/images/gambar5.jpg') }}" alt="Gambar 5">
                </div>
                <div class="col-md-4">
                <img src="{{ Vite::asset('resources/images/gambar6.jpg') }}" alt="Gambar 6">
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Nuba Interior. All rights reserved.</p>
    </footer>
</body>

</html>