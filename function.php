<?php
session_start();

//membuat konenksi ke database
$conn = mysqli_connect("localhost","root","","lobster");

 //tambah barang
if (isset($_POST['masuk'])){
	
     
	 $nama = $_POST['nama'];
	 $tmp = $_POST['tmp'];
	 $tgl = $_POST['tgl'];
	 $jenis = $_POST['jenis'];
	 $harga = $_POST['harga'];
	 $desk = $_POST['desk'];
     


     $addtotable = mysqli_query($conn,"insert into masuk(nama, tmp, tgl, jenis, harga,desk) values('$nama','$tmp','$tgl','$jenis','$harga','$desk')");

     if ($addtotable) {
     	header('location:index.php');
     } else{
     	echo 'gagal';
     	header('location:index.php');
     }
	}

 //update barang
     if(isset($_POST['updatebarang'])){
           $idbarang = $_POST['idbarang'];
           $pengirim = $_POST['pengirim'];
           $alamat = $_POST['alamat'];
           


           $update = mysqli_query($conn,"update barang set pengirim='$pengirim', alamat='$alamat', tanggal='$tanggal', notelp='$notelp', penerima='$penerima', deskripsi='$deskripsi', berat='$berat' where idbarang='$idbarang'");
          if ($update) {
               header('location:index.php');
          } else{
               echo 'gagal';
               header('location:index.php');
          }



 }


 //hapus barang
 if(isset($_POST['hapus'])){
     $id = $_POST['id'];

     $hapus = mysqli_query($conn, "delete from masuk where id='$id'");

         
          if($hapus) {
               header('location:index.php');
          } else{
               echo 'gagal';
               header('location:index.php');
          }
 }
     


 //tambah barang keluar
if (isset($_POST['keluar'])){
  
      
   $idnya = $_POST['idnya'];
   $namanya = $_POST['namanya'];
   $total = $_POST['total'];
   $desknya = $_POST['desknya'];
  
  



     $addtotable = mysqli_query($conn,"insert into keluar(idp, nama, total, deskripsi) values('$idnya','$namanya','$total','desknya')");

     if ($addtotable) {
      header('location:index.php');
     } else{
      echo 'gagal';
      header('location:keluar.php');
     }
  }

  //hapus barang
 if(isset($_POST['hapusbarang'])){
     $idp = $_POST['idp'];

     $hapus = mysqli_query($conn, "delete from keluar where idp='$idp'");

         
          if($hapus) {
               header('location:index.php');
          } else{
               echo 'gagal';
               header('location:index.php');
          }
 }

?>