<?php

// menangkap data nama dengan method post

$nama = $_POST['nama'];

// menangkap data usia dengan method post

$jeniskelamin = $_POST['jeniskelamin'];

$Agama = $_POST['Agama'];

$alamat = $_POST['alamat'];

$tempatlahir = $_POST['tempatlahir'];

$tanggallahir = $_POST['tanggallahir'];

$hobi = $_POST['hobi'];

$citacita = $_POST['citacita'];

$usia = $_POST['usia'];

$asalsekolah = $_POST['asalsekolah'];



// menampilkan data nama

echo "Nama = " . $nama;

echo "<br/>";

// menampilkan data usia
echo "jenis kelamin = " .$jeniskelamin;
echo "<br/>";

echo "Agama =  " . $Agama;
echo "<br/>";

echo "alamat =  " . $alamat;
echo "<br/>";

echo "tempat lahir =  " . $tempatlahir;
echo "<br/>";

echo "tanggal lahir =  " . $tanggallahir;
echo "<br/>";

echo "hobi =  " . $hobi;
echo "<br/>";

echo "cita-cita =  " . $citacita;
echo "<br/>";

echo "Usia = " . $usia;
echo "<br/>";

echo "asalsekolah = " . $asalsekolah;
echo "<br/>";


?>