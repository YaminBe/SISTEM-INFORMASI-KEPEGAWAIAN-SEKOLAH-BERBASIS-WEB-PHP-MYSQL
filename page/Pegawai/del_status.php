<script src="assets/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="assets/dist/sweetalert.css">

<?php
include 'koneksi/-koneksi.php';
$kdstatus = @$_GET['kdstatus'];
mysql_query("delete from tb_status where id_status = '$kdstatus'") or die(mysql_error());
?>
 <script type="text/javascript">
        swal(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=admin&action=status";       
 </script>


