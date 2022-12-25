<!-- Ryan Ramadhan -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pemesanan Tiket Bus JWD</title>

        <!-- import bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
        <!-- import CSS -->
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
                            <a class="nav-link active" href="pemesanan.html">Form Pemesanan</a>
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

        <!-- form pemesanan -->
        <div class="card-main">
            <form action="form_add_aksi.php" method="POST">
                <table border="1" align="center" cellpadding="25" cellspacing="15">
                    <thead>
                        <th colspan="2"><h3>Form Pemesanan  </h3></th>
                    </thead>
                    <tbody>




                        <tr>





                        
                            <td width="200">Nama Lengkap</td>
                            <td width="200">
                                <input type="text" name="Nama_pemesan" size="30"/>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Nomor Identitas</td>
                            <td width="200">
                                <input type="text" name="No_identitas" size="30"/>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">No HP</td>
                            <td width="200">
                                <input type="text" name="No_hp" size="30"/>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">Kelas Penumpang</td>
                            <td>
                                <select name="Kelas_penumpang">
                                    <option value="">-- Pilih salah satu --</option>
                                    <option value="ekonomi">Ekonomi</option>
                                    <option value="bisnis">Bisnis</option>
                                    <option value="eksekutif">Eksekutif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" >Jadwal Keberangkatan</td>
                            <td width="200">
                                <input type="date" name="Jadwal" size="30"/>
                            </td>
                        </tr>
                        <tr>
                            <td width="300">Jumlah Penumpang Bukan Lansia (usia < 60)</td>
                            <td width="200">
                                <input type="text" name="Jumlah_penumpang" size="30"/>
                            </td>
                        </tr>
                        <tr>
                            <td width="300">Jumlah Penumpang Lansia (usia 60 tahun ke atas)</td>
                            <td width="200">
                                <input type="text" name="Jumlah_penumpang_lansia" size="30"/>
                            </td>
                        </tr>
                        <tr>
                            <td width="300">Harga Tiket</td>
                            <td width="200">
                                <input type="text" name="Harga_tiket" size="30"/>
                            </td>
                        </tr>
                        <tr>
                            <td width="300">Total Bayar</td>
                            <td width="200">
                                <input type="text" name="Total_bayar" size="30"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="checkbox" name="" value=""/>
                                Saya dan/atau rombongan telah membaca, memahami dan setuju berdasarkan syarat dan
                                ketentuan yang telah di tetapkan
                            </td>
                        </tr>
                    </tbody>
                    <tfoot bgcolor="Gray" align="center">
                    <tfoot bgcolor="Gray" align="center">
                        <th colspan="2">
                            <input type="submit" name="pesan" value="Hitung Total Bayar"/>
                            <input type="submit" name="pesan" value="Pesan Tiket"/>
                            <input type="reset" name="disproses" value="Cancel"/>
                        </th>
                    </tfoot>
                    </tfoot>
                </table>
            </form>
        </div>

        <!-- footer -->
        <div class="footer">
            <p> Design by : Ryan Ramadhan </p>
        </div>

        <!-- import js bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
            crossorigin="anonymous">
        </script>
        
    </body>
</html>