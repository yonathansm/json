<?php
$json_data=file_get_contents("mahasiswa.json");
$obj = json_decode($json_data);
echo "NIM : "; echo $obj->nim;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "Alamat : "; echo $obj->alamat;
echo "<br>";
echo "No HP : "; echo $obj->no_hp;
echo "<br>";
echo "Mata Kuliah 1 : ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Mata Kuliah 2 : ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Mata Kuliah 3 : ";echo $obj->mata_kuliah[2];
?>