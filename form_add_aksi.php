<?php
    include "koneksi.php";

    // percabangan
    if (isset($_POST['pesan'])){
        //data array
        $nama_lengkap = $_POST['Nama_pemesan'];
        $no_identitas = $_POST['No_identitas'];
        $no_hp = $_POST['No_hp'];
        $kelas_penumpang = $_POST['Kelas_penumpang'];
        $jadwal_berangkat = $_POST['Jadwal'];
        $jumlah_penumpang = $_POST['Jumlah_penumpang'];
        $jumlah_penumpang_lansia = $_POST['Jumlah_penumpang_lansia'];
        $harga_tiket = $_POST['Harga_tiket'];
        $total_bayar = $_POST['Total_bayar'];

        $simpan = " INSERT INTO tabel_pemesanan_tiket (
            Nama_pemesan,No_identitas,No_hp,Kelas_penumpang,Jadwal,Jumlah_penumpang,Jumlah_penumpang_lansia,Harga_tiket,Total_bayar) 
            VALUES ('$nama_lengkap', '$no_identitas', '$no_hp', '$kelas_penumpang', '$jadwal_berangkat', '$jumlah_penumpang', 
            '$jumlah_penumpang_lansia', '$harga_tiket', '$total_bayar')";

            $result = mysqli_query($conn,$simpan);

            if($result){
                echo "<script>alert('Data telah berhasil disimpan');window.location='hasil_pesan_tiket.php'</script>";
            }
    }
?>