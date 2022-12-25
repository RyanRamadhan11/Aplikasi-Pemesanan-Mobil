
<?php
    include('koneksi.php');
    $kelas_penumpang = mysqli_query($conn, "SELECT Kelas_penumpang FROM tabel_pemesanan_tiket");

    $jumlah_penumpang_lansia = mysqli_query($conn, "SELECT Jumlah_penumpang_lansia FROM 
    tabel_pemesanan_tiket
    "); 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pemesanan Tiket Bus JWD</title>

        <!-- import CSS -->
        <link rel="stylesheet" type="text/css" href="assets/style.css">

        <!-- import chart js-->
        <script src="assets/Chart.js" type="text/javascript"></script>

    </head>
    <body>

        <h2>Grafik Pemesan Tiket Bus</h2>
        <h4>Berdasarkan Jumlah Penumpang Lansia</h4>
        
        <center>
            <canvas id="pemesanan"></canvas>
        </center>

        <script>
            var ctx = document.getElementById("pemesanan").getContext('2d');

            //array
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    //Implementasi Array
                    // 'Ekonomi','Eksekutif','Bisnis'
                    labels: [<?php while($row = mysqli_fetch_array($kelas_penumpang)) {
                            echo '"'.$row['Kelas_penumpang']. '",';}?>],
                    datasets: [
                        {
                            label: '# of Votes',
                            data: [<?php while($row = mysqli_fetch_array($jumlah_penumpang_lansia)) {
                                    echo '"'.$row['Jumlah_penumpang_lansia']. '",';}?>],
                            
                            //array color
                            backgroundColor: ['silver', 'aqua', 'yellow'],
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                        beginAtZero:true
                        }
                    }]
                    }
                }
            });
        </script>

    </body>
</html>