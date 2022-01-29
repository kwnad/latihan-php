<?php
if (isset($_POST['kirim'])) {
    $pilih = $_POST['pilih'];
    if ($pilih == 1) {
        $harga = 10000;
        ?>
        <center>
            <h2>Selamat Datang di Bukit Bintang</h2>
            <br>
            <form action="" method="POST">
            <table>
                <tr>
                    <td>Harga Tiket/Orang</td>
                    <td>:</td>
                    <td><?php echo $harga; ?></td>
                </tr>
                <tr>
                  <td>Jumlah Tiket</td>
                  <td>:</td>
                  <td><input type="number" name="jumlah"></td>
                  <td><button type="submit" name="kirim1">Kirim</button></td>
                </tr>
            </table>
            </form>
        </center>
            
    <?php } else if ($pilih == 2) {
        $harga = 15000;
        ?>
        <center>
            <h2>Selamat Datang di Pantai Sadranan</h2>
            <br>
            <form action="" method="POST">
            <table>
                <tr>
                    <td>Harga Tiket/Orang</td>
                    <td>:</td>
                    <td><?php echo $harga; ?></td>
                </tr>
                <tr>
                  <td>Jumlah Tiket</td>
                  <td>:</td>
                  <td><input type="number" name="jumlah"></td>
                  <td><button type="submit" name="kirim2">Kirim</button></td>
                </tr>
            </table>
            </form>
        </center>
        
    <?php } else if ($pilih == 3) {
        $harga = 50000;
        ?>
        <center>
            <h2>Selamat Datang di Candi Borobudur</h2>
            <br>
            <form action="" method="POST">
            <table>
                <tr>
                    <td>Harga Tiket/Orang</td>
                    <td>:</td>
                    <td><?php echo $harga; ?></td>
                </tr>
                <tr>
                  <td>Jumlah Tiket</td>
                  <td>:</td>
                  <td><input type="number" name="jumlah"></td>
                  <td><button type="submit" name="kirim3">Kirim</button></td>
                </tr>
            </table>
            </form>
        </center>
            
    <?php } else if ($pilih == 4) {
        $harga = 50000;
        ?>
        <center>
            <h2>Selamat Datang di Candi Prambanan</h2>
            <br>
            <form action="" method="POST">
            <table>
                <tr>
                    <td>Harga Tiket/Orang</td>
                    <td>:</td>
                    <td><?php echo $harga; ?></td>
                </tr>
                <tr>
                  <td>Jumlah Tiket</td>
                  <td>:</td>
                  <td><input type="number" name="jumlah"></td>
                  <td><button type="submit" name="kirim4">Kirim</button></td>
                </tr>
            </table>
            </form>
        </center>
        
    <?php } else if ($pilih == 5) {
        $harga = 5000;
        ?>
        <center>
            <h2>Selamat Datang di Keraton Yogyakarta</h2>
            <br>
            <form action="" method="POST">
            <table>
                <tr>
                    <td>Harga Tiket/Orang</td>
                    <td>:</td>
                    <td><?php echo $harga; ?></td>
                </tr>
                <tr>
                  <td>Jumlah Tiket</td>
                  <td>:</td>
                  <td><input type="number" name="jumlah"></td>
                  <td><button type="submit" name="kirim5">Kirim</button></td>
                </tr>
            </table>
            </form>
        </center>
        
    <?php } else if ($pilih == 6) {
        $harga = 5000;
        ?>
        <center>
            <h2>Selamat Datang di Malioboro</h2>
            <br>
            <form action="" method="POST">
            <table>
                <tr>
                    <td>Harga Tiket/Orang</td>
                    <td>:</td>
                    <td><?php echo $harga; ?></td>
                </tr>
                <tr>
                  <td>Jumlah Tiket</td>
                  <td>:</td>
                  <td><input type="number" name="jumlah"></td>
                  <td><button type="submit" name="kirim6">Kirim</button></td>
                </tr>
            </table>
            </form>
        </center>
        
    <?php } else if ($pilih == 7) {
        $harga1
        ?>
        <center>
            <h2>Selamat Datang di Pendopo Lawas</h2>
            <br>
            <form action="" method="POST">
            <table align="center" cellpadding="6">
                    <tr>
                      <th colspan="2">MENU</th>
                    </tr>
                    <tr>
                      <th>Makanan</th>
                      <th>Harga</th>
                    </tr>
                    <tr>
                      <td>Nasi Goreng</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Ayam Goreng</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td>Jagung Bakar</td>
                      <td>Rp. 13.000</td>
                    </tr>
                    <tr>
                      <th>Minuman</th>
                      <th>Harga</th>
                    </tr>
                    <tr>
                      <td>Es Teh</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td>Air Mineral</td>
                      <td>Rp. 8.000</td>
                    </tr>
                    <tr>
                      <td>Jus Buah</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                    </tr>
            </table>
            <div  class="cafe">
                <select name="pilih1">
                    <option selected>-- Pilih Makanan --</option>
                    <option value="1">Nasi Goreng</option>
                    <option value="2">Ayam Bakar</option>
                    <option value="3">Jagung Bakar</option>
                    <option value="4">Es Teh</option>
                    <option value="5">Air Mineral</option>
                    <option value="6">Jus Buah</option>
                </select>
                <input type="number" name="jumlah" placeholder="Pesan berapa">
                <input type="submit" name="kirim7" value="Kirim">
            </div>
            </form>
        </center>
    <?php } else if ($pilih == 6) {
        $harga = 100000;
    ?>
        <center>
            <h2>Selamat Datang di Goa Pindul</h2>
            <br>
            <form action="" method="POST">
            <table>
                <tr>
                    <td>Harga Tiket/Orang</td>
                    <td>:</td>
                    <td><?php echo $harga; ?></td>
                </tr>
                <tr>
                  <td>Jumlah Tiket</td>
                  <td>:</td>
                  <td><input type="number" name="jumlah"></td>
                  <td><button type="submit" name="kirim8">Kirim</button></td>
                </tr>
            </table>
            </form>
        </center>
    <?php }
    ?>
    
    <?php if (isset($_POST['kirim1'])) {
                $jumlah = $_POST['jumlah'];
                $total = $jumlah * 10000;

                if ($jumlah >= 10) {
                    $diskon = $total * 0.10;
                    $totalharga = $total - $diskon;
                } else if ($jumlah >= 5) {
                    $diskon = $total * 0.5;
                    $totalharga = $total - $diskon;
                } else if ($jumlah <= 0){
                    $diskon = 0;
                    $totalharga = $total - $diskon;
                }
            }?>
            <h2>Pembayaran</h2>
            <form action="" method="post">
                        <table>
                            <tr>
                                <th>Diskon</th>
                                <th>:</th>
                                <td><?php echo $diskon; ?></td>
                            </tr>
                            <tr>
                                <th>Total Harga</th>
                                <th>:</th>
                                <td><?php echo $totalharga; ?></td>
                            </tr>
                            <tr>
                                <th>Bayar</th>
                                <th>:</th>
                                <td><input type="number" name="bayar"></td>
                                <td><button type="submit" name="submit">Kirim</button></td>
                            </tr>
                        </table>
             </form>
             <?php if (isset($_POST['submit'])) {
               $bayar = $_POST['bayar'];
               
               if ($bayar >= $totalharga) {
                 $kembalian = $bayar - $totalharga;
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                   <tr>
                     <th>Kembalian</th>
                     <th>:</th>
                     <td><?php echo $kembalian; ?></td>
                   </tr>
                 </table>
               <?php } else {
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                 </table>
                 Maaf uang anda kurang
              <?php }
             } ?>
                        
     <?php if (isset($_POST['kirim2'])) {
                $jumlah = $_POST['jumlah'];
                $total = $jumlah * 15000;

                if ($jumlah >= 10) {
                    $diskon = $total * 0.10;
                    $totalharga = $total - $diskon;
                } else if ($jumlah >= 5) {
                    $diskon = $total * 0.5;
                    $totalharga = $total - $diskon;
                } else if ($jumlah <= 0){
                    $diskon = 0;
                    $totalharga = $total - $diskon;
                }
            }?>
            <h2>Pembayaran</h2>
            <form action="" method="post">
                        <table>
                            <tr>
                                <th>Diskon</th>
                                <th>:</th>
                                <td><?php echo $diskon; ?></td>
                            </tr>
                            <tr>
                                <th>Total Harga</th>
                                <th>:</th>
                                <td><?php echo $totalharga; ?></td>
                            </tr>
                            <tr>
                                <th>Bayar</th>
                                <th>:</th>
                                <td><input type="number" name="bayar"></td>
                                <td><button type="submit" name="submit">Kirim</button></td>
                            </tr>
                        </table>
             </form>
             <?php if (isset($_POST['submit'])) {
               $bayar = $_POST['bayar'];
               
               if ($bayar >= $totalharga) {
                 $kembalian = $bayar - $totalharga;
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                   <tr>
                     <th>Kembalian</th>
                     <th>:</th>
                     <td><?php echo $kembalian; ?></td>
                   </tr>
                 </table>
               <?php } else {
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                 </table>
                 Maaf uang anda kurang
              <?php }
             } ?>
                        
       <?php if (isset($_POST['kirim3'])) {
                $jumlah = $_POST['jumlah'];
                $total = $jumlah * 50000;

                if ($jumlah >= 10) {
                    $diskon = $total * 0.10;
                    $totalharga = $total - $diskon;
                } else if ($jumlah >= 5) {
                    $diskon = $total * 0.5;
                    $totalharga = $total - $diskon;
                } else if ($jumlah <= 0){
                    $diskon = 0;
                    $totalharga = $total - $diskon;
                }
            }?>
            <h2>Pembayaran</h2>
            <form action="" method="post">
                        <table>
                            <tr>
                                <th>Diskon</th>
                                <th>:</th>
                                <td><?php echo $diskon; ?></td>
                            </tr>
                            <tr>
                                <th>Total Harga</th>
                                <th>:</th>
                                <td><?php echo $totalharga; ?></td>
                            </tr>
                            <tr>
                                <th>Bayar</th>
                                <th>:</th>
                                <td><input type="number" name="bayar"></td>
                                <td><button type="submit" name="submit">Kirim</button></td>
                            </tr>
                        </table>
             </form>
             <?php if (isset($_POST['submit'])) {
               $bayar = $_POST['bayar'];
               
               if ($bayar >= $totalharga) {
                 $kembalian = $bayar - $totalharga;
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                   <tr>
                     <th>Kembalian</th>
                     <th>:</th>
                     <td><?php echo $kembalian; ?></td>
                   </tr>
                 </table>
               <?php } else {
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                 </table>
                 Maaf uang anda kurang
              <?php }
             } ?>
                        
       <?php if (isset($_POST['kirim4'])) {
                $jumlah = $_POST['jumlah'];
                $total = $jumlah * 50000;

                if ($jumlah >= 10) {
                    $diskon = $total * 0.10;
                    $totalharga = $total - $diskon;
                } else if ($jumlah >= 5) {
                    $diskon = $total * 0.5;
                    $totalharga = $total - $diskon;
                } else if ($jumlah <= 0){
                    $diskon = 0;
                    $totalharga = $total - $diskon;
                }
            }?>
            <h2>Pembayaran</h2>
            <form action="" method="post">
                        <table>
                            <tr>
                                <th>Diskon</th>
                                <th>:</th>
                                <td><?php echo $diskon; ?></td>
                            </tr>
                            <tr>
                                <th>Total Harga</th>
                                <th>:</th>
                                <td><?php echo $totalharga; ?></td>
                            </tr>
                            <tr>
                                <th>Bayar</th>
                                <th>:</th>
                                <td><input type="number" name="bayar"></td>
                                <td><button type="submit" name="submit">Kirim</button></td>
                            </tr>
                        </table>
              </form>
              <?php if (isset($_POST['submit'])) {
               $bayar = $_POST['bayar'];
               
               if ($bayar >= $totalharga) {
                 $kembalian = $bayar - $totalharga;
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                   <tr>
                     <th>Kembalian</th>
                     <th>:</th>
                     <td><?php echo $kembalian; ?></td>
                   </tr>
                 </table>
               <?php } else {
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                 </table>
                 Maaf uang anda kurang
              <?php }
             } ?>
                        
      <?php if (isset($_POST['kirim5'])) {
                $jumlah = $_POST['jumlah'];
                $total = $jumlah * 5000;

                if ($jumlah >= 10) {
                    $diskon = $total * 0.10;
                    $totalharga = $total - $diskon;
                } else if ($jumlah >= 5) {
                    $diskon = $total * 0.5;
                    $totalharga = $total - $diskon;
                } else if ($jumlah <= 0){
                    $diskon = 0;
                    $totalharga = $total - $diskon;
                }
            }?>
            <h2>Pembayaran</h2>
            <form action="" method="post">
                        <table>
                            <tr>
                                <th>Diskon</th>
                                <th>:</th>
                                <td><?php echo $diskon; ?></td>
                            </tr>
                            <tr>
                                <th>Total Harga</th>
                                <th>:</th>
                                <td><?php echo $totalharga; ?></td>
                            </tr>
                            <tr>
                                <th>Bayar</th>
                                <th>:</th>
                                <td><input type="number" name="bayar"></td>
                                <td><button type="submit" name="submit">Kirim</button></td>
                            </tr>
                        </table>
             </form>
             <?php if (isset($_POST['submit'])) {
               $bayar = $_POST['bayar'];
               
               if ($bayar >= $totalharga) {
                 $kembalian = $bayar - $totalharga;
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                   <tr>
                     <th>Kembalian</th>
                     <th>:</th>
                     <td><?php echo $kembalian; ?></td>
                   </tr>
                 </table>
               <?php } else {
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                 </table>
                 Maaf uang anda kurang
              <?php }
             } ?>
                        
      <?php if (isset($_POST['kirim6'])) {
                $jumlah = $_POST['jumlah'];
                $total = $jumlah * 5000;

                if ($jumlah >= 10) {
                    $diskon = $total * 0.10;
                    $totalharga = $total - $diskon;
                } else if ($jumlah >= 5) {
                    $diskon = $total * 0.5;
                    $totalharga = $total - $diskon;
                } else if ($jumlah <= 0){
                    $diskon = 0;
                    $totalharga = $total - $diskon;
                }
            }?>
            <h2>Pembayaran</h2>
            <form action="" method="post">
                        <table>
                            <tr>
                                <th>Diskon</th>
                                <th>:</th>
                                <td><?php echo $diskon; ?></td>
                            </tr>
                            <tr>
                                <th>Total Harga</th>
                                <th>:</th>
                                <td><?php echo $totalharga; ?></td>
                            </tr>
                            <tr>
                                <th>Bayar</th>
                                <th>:</th>
                                <td><input type="number" name="bayar"></td>
                                <td><button type="submit" name="submit">Kirim</button></td>
                            </tr>
                        </table>
              </form>
              <?php if (isset($_POST['submit'])) {
               $bayar = $_POST['bayar'];
               
               if ($bayar >= $totalharga) {
                 $kembalian = $bayar - $totalharga;
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                   <tr>
                     <th>Kembalian</th>
                     <th>:</th>
                     <td><?php echo $kembalian; ?></td>
                   </tr>
                 </table>
               <?php } else {
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                 </table>
                 Maaf uang anda kurang
              <?php }
             } ?>
                        
                        
       <?php if (isset($_POST['kirim7'])) {
                $pilih1 = $_POST['pilih1'];
                $jumlah = $_POST['jumlah'];
                
                if ($pilih1 = 1) {
                  $harga = 15000;
                  $total = $jumlah * $harga;
                } else if ($pilih1 = 2) {
                  $harga = 10000;
                  $total = $jumlah * $harga;
                } else if ($pilih1 = 3) {
                  $harga = 13000;
                  $total = $jumlah * $harga;
                } else if ($pilih1 = 4) {
                  $harga = 10000;
                  $total = $jumlah * $harga;
                } else if ($pilih1 = 5) {
                  $harga = 8000;
                  $total = $jumlah * $harga;
                } else if ($pilih1 = 6) {
                  $harga = 15000;
                  $total = $jumlah * $harga;
                }

                if ($jumlah >= 10) {
                    $diskon = $total * 0.10;
                    $totalharga = $total - $diskon;
                } else if ($jumlah >= 5) {
                    $diskon = $total * 0.5;
                    $totalharga = $total - $diskon;
                } else if ($jumlah <= 0){
                    $diskon = 0;
                    $totalharga = $total - $diskon;
                }
            }?>
            <h2>Pembayaran</h2>
            <form action="" method="post">
                        <table>
                            <tr>
                                <th>Diskon</th>
                                <th>:</th>
                                <td><?php echo $diskon; ?></td>
                            </tr>
                            <tr>
                                <th>Total Harga</th>
                                <th>:</th>
                                <td><?php echo $totalharga; ?></td>
                            </tr>
                            <tr>
                                <th>Bayar</th>
                                <th>:</th>
                                <td><input type="number" name="bayar"></td>
                                <td><button type="submit" name="submit">Kirim</button></td>
                            </tr>
                        </table>
             </form>
             <?php if (isset($_POST['submit'])) {
               $bayar = $_POST['bayar'];
               
               if ($bayar >= $totalharga) {
                 $kembalian = $bayar - $totalharga;
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                   <tr>
                     <th>Kembalian</th>
                     <th>:</th>
                     <td><?php echo $kembalian; ?></td>
                   </tr>
                 </table>
               <?php } else {
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                 </table>
                 Maaf uang anda kurang
              <?php }
             } ?>
                        
      <?php if (isset($_POST['kirim8'])) {
                $jumlah = $_POST['jumlah'];
                $total = $jumlah * 100000;

                if ($jumlah >= 10) {
                    $diskon = $total * 0.10;
                    $totalharga = $total - $diskon;
                } else if ($jumlah >= 5) {
                    $diskon = $total * 0.5;
                    $totalharga = $total - $diskon;
                } else if ($jumlah <= 0){
                    $diskon = 0;
                    $totalharga = $total - $diskon;
                }
            }?>
            <h2>Pembayaran</h2>
            <form action="" method="post">
                        <table>
                            <tr>
                                <th>Diskon</th>
                                <th>:</th>
                                <td><?php echo $diskon; ?></td>
                            </tr>
                            <tr>
                                <th>Total Harga</th>
                                <th>:</th>
                                <td><?php echo $totalharga; ?></td>
                            </tr>
                            <tr>
                                <th>Bayar</th>
                                <th>:</th>
                                <td><input type="number" name="bayar"></td>
                                <td><button type="submit" name="submit">Kirim</button></td>
                            </tr>
                        </table>
             </form>
             <?php if (isset($_POST['submit'])) {
               $bayar = $_POST['bayar'];
               
               if ($bayar >= $totalharga) {
                 $kembalian = $bayar - $totalharga;
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                   <tr>
                     <th>Kembalian</th>
                     <th>:</th>
                     <td><?php echo $kembalian; ?></td>
                   </tr>
                 </table>
               <?php } else {
                 ?>
                 <table>
                   <tr>
                     <th>Bayar</th>
                     <th>:</th>
                     <td><?php echo $bayar; ?></td>
                   </tr>
                 </table>
                 Maaf uang anda kurang
              <?php }
             } ?>
<? php }
?>