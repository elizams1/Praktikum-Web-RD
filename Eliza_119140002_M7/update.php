<?php
    include 'koneksi.php';
    // menyimpan data kedalam variabel
    $id         = $_POST['id_mahasiswa'];
    $nim        = $_POST['nim'];
    $nama       = $_POST['nama'];
    $prodi      = $_POST['prodi'];
    $angkatan   = $_POST['angkatan'];
    
    // query SQL untuk insert data ke dalam Mysql
    $query="UPDATE datamhs SET nim='$nim',nama='$nama',prodi='$prodi',angkatan='$angkatan' where id='$id'";
    mysqli_query($connect, $query);
    // mengalihkan ke halaman index.php
    echo "<script>alert('Data yang anda Update sukses');window.location='tampil.php'</script>";
?>