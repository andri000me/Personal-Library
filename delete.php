<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'querydb.php';

$id = $_GET["id"];

if(hapus($id) > 0 ) {
    echo "
      <script>
        alert('Data Telah Berhasil Dihapus!');
        document.location.href = 'koleksi_buku.php'
      </script>
    ";
}else{
    echo "
    <script>
      alert('Data Gagal Dihapus, Ayo coba lagi');
      document.location.href = 'koleksi_buku.php'
    </script>
  ";
  }

?>