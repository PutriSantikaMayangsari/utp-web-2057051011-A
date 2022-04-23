<?php

//masukkan file putri
include('Connection.php');

//variable nama, post dan struktur/tipe datanya array
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$country=$_POST['country'];
$subject=$_POST['subject'];

//melakukan query
//mysqli = php 7+
//auto increment adalah fungsi pada databases
mysqli_query($host, "insert into utp values ('', '$fname', '$lname', '$country','$subject')");

//menampilkan informasi ke layar
echo"Data berhasil disimpan!<br>";

// //menampilkan data
// $sql="select * from utp";
// $hasil=mysqli_query($host,$sql);
// echo "<table border=1>";
// //Fungsi fetch_assoc() / mysqli_fetch_assoc() digunakan untuk mengambil baris hasil sebagai array asosiatif. 
// //Catatan: Nama kolom yang dikembalikan dari fungsi ini peka huruf besar / kecil(Case-sensitive).
// while($row=mysqli_fetch_assoc($hasil)){
//     echo "<tr><td>".$row['id']."</td><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['country']."</td><td>".$row['subject']."</td></tr>";

// }
// echo "</table>";

?>
