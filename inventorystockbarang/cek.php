<?php

// yang belum login bakal diarahkan ke cek.php abis itu ke halaman login.php 
// bagi yang sudah login bakal ke cek.php trs langsung masuk ke index.php g bakal ketemu page login.php 

if(isset($_SESSION['log'])){

} else {
    header('location:login.php');
}

?>