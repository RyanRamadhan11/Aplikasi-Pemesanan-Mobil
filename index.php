<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket Bus JWD</title>

    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light navcol">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
            </a>
            <button button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form.php">Form Pemesanan</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="hasil_pesan_tiket.php">Hasil Pemesanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="grafik.php">Grafik Pemesanan Tiket</a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card-main">
        <div class="card" style="width: 18rem;">
            <img src="images/bus1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bus Ekonomi 1</h5>
                <p class="card-text">Harga Tiket</p>
                <Rp. class="card-text">Rp. 70.000</p>
                <a href="form.php" class="btn btn-primary">Pesan Tiket</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="images/bus2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bus Eksekutif 1</h5>
                <p class="card-text">Harga Tiket</p>
                <Rp. class="card-text">Rp. 150.000</p>
                <a href="form.php" class="btn btn-primary">Pesan Tiket</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="images/bus3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bus Bisnis 1</h5>
                <p class="card-text">Harga Tiket</p>
                <Rp. class="card-text">Rp. 100.000</p>
                <a href="form.php" class="btn btn-primary">Pesan Tiket</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="images/bus4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bus Eksekutif 2</h5>
                <p class="card-text">Harga Tiket</p>
                <Rp. class="card-text">Rp. 220.000</p>
                <a href="pform.php" class="btn btn-primary">Pesan Tiket</a>
            </div>
        </div>
        
    </div>

    <div class="footer">
        <p> Design by : Ryan Ramadhan </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
        crossorigin="anonymous">
    </script>

</body>
</html>