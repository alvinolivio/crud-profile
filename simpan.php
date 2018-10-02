<?php
include 'connect.php';

if (isset($_POST)) {
    $sql = "INSERT INTO tabel_biodata VALUES ('', '$_POST[nama]', '$_POST[jenis_kelamin]', '$_POST[alamat]', '$_POST[no_hp]', '$_POST[tgl_lahir]', '$_POST[hobi]')";
    $dbh->exec($sql);
}

header("location:tabel.php");
?>
