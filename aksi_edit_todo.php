<?php
$mysqli=mysqli_connect('localhost','root','','db_todo_list');
mysqli_select_db($mysqli,'db_todo_list') or die("database tidak ditemukan");
$id=$_POST['id'];
$tugas=$_POST['tugas'];
$jangka_waktu=$_POST['jangka_waktu'];
$keterangan=$_POST['keterangan'];
$sql ="UPDATE tbl_todo SET tugas='$tugas', jangka_waktu='$jangka_waktu', keterangan='$keterangan' WHERE id='$id' ";
 // echo $sql;
mysqli_query($mysqli,$sql);
header("location:http://localhost/final-chellange/index.php?halaman=todo&pesan_berhasil_edit=berhasil");
?>