<?php
  function hasil(){
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
    // $eksekutif = 150000;
    // $Bisnis = 100000;
    // $Ekonomi = 70000;
    $total;
    error_reporting(0);
  
        //Output program dan Pemanggilan Array
        foreach($no_identitas as $key => $val){
        ?>
          <table border="0" width="500" cellpadding="1" cellspacing="1" >
      
            <tr>
              <td><?php echo '&nbsp Nama Pemesan';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$nama_lengkap;?></td>
            </tr>
          
            <tr>
              <td><?php echo '&nbsp No Identitas';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$no_identitas[$key];?></td>
            </tr>
          
            <tr>
              <td><?php echo '&nbsp Kelas Penumpang';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$kelas_penumpang;?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp jadwal_berangkat';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$jadwal_berangkat;?></td>
            </tr>
          
            <tr>
              <td><?php echo '&nbsp Jumlah Penumpang';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$jumlah_penumpang;?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Jumlah Penumpang Lansia';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$jumlah_penumpang_lansia;?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Harga Tiket';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td>
                <?php
                //Menentukan harga tiket
                if($kelas_penumpang == "Bisnis"){
                    $harga_tiket = 100000;
                  }elseif($kelas_penumpang == "Ekonomi"){
                    $harga_tiket = 70000;
                  }elseif($tipe == "Eksekutif"){
                    $harga_tiket = 150000;
                }?>
              </td>
            </tr>

            <tr>
              <td>
                <?php echo '&nbsp Total Bayar';?>
              </td>
              <td><?php echo '&nbsp : ';?></td>
              <td>
                <?php
                //Menentukan harga tiket
                if($kelas_penumpang == "Bisnis"){
                    $total_bayar = $harga_tiket * $jumlah_penumpang ;
                  }elseif($kelas_penumpang == "Ekonomi"){
                    $total_bayar = $harga_tiket * $jumlah_penumpang ;
                  }elseif($tipe == "Eksekutif"){
                    $total_bayar = $harga_tiket * $jumlah_penumpang ;
                }?>
              </td>            
            </tr>
          </table>
            <?php 
          }
        }?>

<!-- Tampilan Awal Form Pemesanan -->
<html>
  <form method="POST" name="frmpost" action="">
    <table width="500" border="1" cellpadding="0" cellspacing="0" align="center">
      <tr>
        <th><h2> Form Pemesanan </h2></th>
      </tr>
      <tr>
        <td>
          <table width="500" border="0" cellpadding="6" cellspacing="6" align="center">

            <tr height="40"> 
                <td width="200" valign="center">Nama Pemesan</td>
                <td width="10" valign="center"> : </td>
                <td><input type="text" name="Nama_pemesan" size="30"/></td>
            </tr>

            <tr height="30">
              <td width="200" valign="center">No Identitas</td>
              <td width="10" valign="center"> : </td>
              <td><input type="text" name="No_identitas" size="30"/></td>
            </tr>

            <tr height="30"> 
              <td width="200" valign="center">No HP</td>
              <td width="10" valign="center"> : </td>
              <td><input type="text" name="No_hp" size="30"/></td>
            </tr>

            <tr height="30"> 
              <td width="200" valign="center">Kelas Penumpang</td>
              <td width="10" valign="center"> : </td>
              <td>
                <select name="Kelas_penumpang">
                  <option value="">-- Pilih salah satu --</option>
                  <option value="ekonomi">Ekonomi</option>
                  <option value="bisnis">Bisnis</option>
                  <option value="eksekutif">Eksekutif</option>
                </select>
              </td>
            </tr>

            <tr height="30"> 
              <td width="200" valign="center">Jadwal Berangkat</td>
              <td width="10" valign="center"> : </td>
              <td><input type="date" name="Jadwal" size="30"/></td>
            </tr>

            <tr height="30"> 
              <td width="200" valign="center">Jumlah Penumpang</td>
              <td width="10" valign="center"> : </td>
              <td><input type="text" name="Jumlah_penumpang" size="30"/></td>
            </tr>

            <tr height="30"> 
              <td width="200" valign="center">Jumlah Penumpang Lansia</td>
              <td width="10" valign="center"> : </td>
              <td><input type="text" name="Jumlah_penumpang_lansia" size="30"/></td>
            </tr>

            <tr height="30"> 
              <td width="200" valign="center">Harga Tiket</td>
              <td width="10" valign="center"> : </td>
              <td><input type="text" name="Harga_tiket" size="30"/></td>
            </tr>

            <tr height="30"> 
              <td width="200" valign="center">Total Bayar</td>
              <td width="10" valign="center"> : </td>
              <td><input type="text" name="Total_bayar" size="30"/></td>
            </tr>

            <tr>
              <td colspan="3">
                <input type="checkbox" name="" value=""/>
                  Saya dan/atau rombongan telah membaca, memahami dan setuju berdasarkan syarat dan
                  ketentuan yang telah di tetapkan
              </td>
            </tr>

            <tr>
              <td align="right" colspan="2"><input type="submit" name="pesan" value="Pesan Tiket" /></td>
              <td><input type="submit" name="pesan" value="Hitung Total Bayar"/></td>
              <td><input type="reset" name="btnCancel" value="Cancel" /></td>
            </tr>

          </table>
        </tr>
      </td>
    </table>
    <br>
    <br>
        
    <table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr>
              <td>
                <?php
                //Pemanggilan Function
                  hasil();
                ?>
              </td>
            </tr>
    </table>
  </form>
</html>