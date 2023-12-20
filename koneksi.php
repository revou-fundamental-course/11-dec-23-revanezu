<?php
include "koneksi.php";
$koneksi = mysqli_connect("localhost","root","","databasereva");
if (isset($_POST["tblsubmit"])) {
    $nama = '$_POST' ["fnama"];
    $tangggalLahir = '$_POST' ["ftanggal lahir"];
    $jeniKelamin = '$_POST' ["fjeniskelamin"];
    $pesan = '$_POST' ["fpesan"];
$query= "INSERT INTO tablereva VALUES ('$nama','$tangggalLahir','$jeniKelamin','$pesan')";
mysqli_query($koneksi,$query);
echo "telah tersimpan";
}
?>