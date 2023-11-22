<?php
 session_start();
// session itu buat nyimpen kita udah pernah kunjungi belom siii
// membuat koneksi ke database 
$conn = mysqli_connect("localhost","root","","inventorystockbarang");


//kita buat inputan dari tombol modal yang ada di web stock barang
// menambah barang baru

if(isset($_POST['addnewbarang'])){
    // kita ambil input barang 

    $namabarang = $_POST['namabarang'];
    $jumlahbarang = $_POST['jumlahbarang'];
    $kondisibarang = $_POST['kondisibarang'];
    $tipebarang = $_POST['tipebarang'];
    $keterangan = $_POST['keterangan'];

    $addtotable = mysqli_query($conn,"insert into stock (namabarang,jumlahbarang, kondisibarang, tipebarang, keterangan) values ('$namabarang','$jumlahbarang','$kondisibarang','$tipebarang','$keterangan')");
    if($addtotable){
        header('location:index.php');
    } else {
        echo 'gagal';
        header('location:index.php');
    }
}

   
?>