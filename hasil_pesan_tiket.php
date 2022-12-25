<!-- page hasil pesan --> 

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
        <!-- navbar -->
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
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="form.php">Form Pemesanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="hasil_pesan_tiket.php">Hasil Pemesanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="grafik.php">Grafik Pemesanan Tiket</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- content form pemesanan -->
        <div>
            <table  border="1" align="center" cellpadding="13" cellspacing="0">
                <tr>
                    <td>No</td>
                    <td>Nama Pemesan</td>
                    <td>No Identitas</td>
                    <td>No HP</td>
                    <td>Kelas Penumpang</td>
                    <td>Jadwal</td>
                    <td>Jumlah Penumpang</td>
                    <td>Jumlah Penumpang Lansia</td>
                    <td>Harga Tiket</td>
                    <td>Total Bayar</td>
                </tr>
            
                <?php
                    include "koneksi.php";
                    $no=1;
                    $ambildata = mysqli_query($conn, "select * from tabel_pemesanan_tiket ");

                    //Perulangan while
                    while ($tampil = mysqli_fetch_array($ambildata)){
                        echo "
                        <tr>
                            <td>$no</td>
                            <td>$tampil[Nama_pemesan]</td>
                            <td>$tampil[No_identitas]</td>
                            <td>$tampil[No_hp]</td>
                            <td>$tampil[Kelas_penumpang]</td>
                            <td>$tampil[Jadwal]</td>
                            <td>$tampil[Jumlah_penumpang]</td>
                            <td>$tampil[Jumlah_penumpang_lansia]</td>
                            <td>$tampil[Harga_tiket]</td>
                            <td>$tampil[Total_bayar]</td>
                        </tr>";
                        $no++;
                    }
                ?>
            </table>
        </div>


        <!-- import js bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
            crossorigin="anonymous">
        </script>
    
    </body>
</html>
        
        
        
        
        
        
        
        