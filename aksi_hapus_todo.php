<?php
include "config.php";
$id = preg_replace('/[^0-9]/', '', $_GET['id']);
$sql ="DELETE FROM tbl_todo WHERE id='$id'";
// echo $sql;
mysqli_query($mysqli,$sql);
header("location:http://localhost/final-chellange/index.php?halaman=todo&pesan_berhasil_hapus=berhasil");
?>