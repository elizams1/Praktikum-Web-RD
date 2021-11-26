<?php
    include 'koneksi.php';

    $id=$_GET["id"];

    $mahasiswa  = mysqli_query($connect, "select * from datamhs where id='$id'");
    $row        = mysqli_fetch_array($mahasiswa);
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Menuliskan tag Meta-->
        <meta charset="utf-8">
         <meta name="descriptions" content="Belajar AJAX">
         <meta name="author" content="Eliza-11914002">
         
        <!--Menggunakan tag title-->
        <title>Minggu7- Eliza</title>

        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">    

        <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Ubah Data Mahasiswa</h1>
            <form method="POST" action="update.php">
                <input type="hidden" value="<?php echo $row['id'];?>" name="id_mahasiswa">
                <div class="form-group mb-3">                                    
                    <label for="nim" class="form-label">NIM </label>
                    <input type="text" class="form-control" name="nim" id="nim" value="<?php echo $row['nim'];?>">                                    
                </div>
                <div class="form-group mb-3">                                                        
                    <label for="nama" class="form-label">Nama </label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama'];?>">                                
                </div>
                <div class="form-group mb-3">
                    <label for="prodi" class="form-label">Program Studi </label>
                    <input type="text" class="form-control" name="prodi" id="prodi" value="<?php echo $row['prodi'];?>">                                    
                </div>
                <div class="form-group mb-3">                                    
                    <label for="angkatan" class="form-label">Angkatan</label>
                    <input type="text" class="form-control" name="angkatan" id="angkatan" value="<?php echo $row['angkatan'];?>">                                    
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>   
            </form>
        </div>                        
    </body>
</html>