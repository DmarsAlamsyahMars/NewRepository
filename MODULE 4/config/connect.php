<!-- File ini berisi koneksi dengan database MySQL -->
<?php 
// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$connect = mysqli_connect("localhost:8080", "root", "", "db_wad_modul4");
// 
// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$connect){
    echo"Connection unsuccessful!";
}
else{
    echo"Connection succeeded";
}
// 
 
?>