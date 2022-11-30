<?php
include "config.php";

if (isset($_POST['cari'])) {
  $cari=$_POST['cari'];
  $sql= "SELECT * FROM tbl_todo WHERE tugas LIKE'%$cari%'";
}else{
  $sql= "SELECT * FROM tbl_todo;";
}

$hasil= mysqli_query($mysqli,$sql);
?>
<?php
  if (isset($_GET['pesan_berhasil_tambah'])) {
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil ditambah!</strong> Kamu bisa memeriksanya di bawah.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
  }

  if (isset($_GET['pesan_berhasil_edit'])) {
    echo '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil diedit!</strong> Kamu bisa memeriksanya di bawah.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    ';
  }

  if (isset($_GET['pesan_berhasil_hapus'])) {
    echo '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil dihapus!</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    ';
  }
?>
<h2>Tabel Todo List</h2>

<!-- Button trigger modal -->
<button style="float: right;" type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <i class="fa fa-plus"></i> Tambah
</button>
<br>
<br>
<br>
<form action="index.php?halaman=todo" method="POST">
<div class="row d-flex justify-content-end mb-2">
  <div class="col-2">
    <input type="text" name="cari" class="col-12 form-control">
  </div>
  <div class="col-1">
    <button type="subbit class="col-10 form-control">
      Cari
    </button>
  </div>
</div>
</form>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title text-body" id="exampleModalLabel">Tambah Tugas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="aksi_tambah_todo.php">
      <div class="modal-body"> 
        <div class="mb-3">
            <label class="form-label text-body">Tugas</label>
            <input type="text" class="form-control" placeholder="Tugas" name="tugas">
        </div>
        <div class="mb-3">
            <label class="form-label text-body">Jangka Waktu</label>
            <input type="date" class="form-control" name="jangka_waktu">
        </div>
        <div class="mb-3">
            <label class="form-label text-body">Keterangan</label>
            <select class="form-control" name="keterangan">
                <option>Belum Selesai</option>
                <option>Selesai</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<table border="1" class="table table-bordered teks-putih">

  <tr>
    <td>No</td><td>Tugas</td><td>Jangka Waktu</td><td>Keterangan</td><td>Aksi</td>
 </tr>
 <?php
$no=1;
while ($row= mysqli_fetch_array($hasil)) {
echo "<tr>
  <td>$no</td><td>$row[tugas]</td><td>$row[jangka_waktu]</td><td>$row[keterangan]</td>
  <td> 
  <a class='btn btn-warning fa fa-pencil' href='index.php?halaman=edit_todo&id=$row[id]'> Edit</a>"?>
  <a class='btn btn-danger fa fa-trash'  href='aksi_hapus_todo.php?id=<?=$row['id']?>' onclick='return confirm("are you sure?")'> Hapus</a>
  </td>
<?php
echo  
 "</tr>";
 $no++;
 }
?>
</table>
