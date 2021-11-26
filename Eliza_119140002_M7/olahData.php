<?php

include 'koneksi.php';

$nim=$_POST["nim"];
$nama=$_POST['nama'];
$prodi=$_POST['prodi'];
$angkatan=$_POST['angkatan'];

$sql="insert into datamhs (nim,nama,prodi,angkatan) values('$nim','$nama','$prodi','$angkatan')";

$result=mysqli_query($connect,$sql);

echo 
"   <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'tampil.php';
    </script>
";
?>