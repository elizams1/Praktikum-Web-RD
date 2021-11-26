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
            <h1 class="text-center">Data Mahasiswa</h1>
            <table class="table table-striped table-hover">                
                <tr align="center">
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                    <th colspan="2">Action</th>
                </tr>

                <?php
                    include 'koneksi.php';
                    $sql="select * from datamhs order by id asc";
                    $result=mysqli_query($connect,$sql);                    
                    while ($data=mysqli_fetch_array($result)){                    
                ?>        
                <tr>
                    <td><?php echo $data['nim'];?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['prodi'];?></td>
                    <td><?php echo $data['angkatan'];?></td>
                    <td><a href="ubah.php?id=<?= $data["id"];?>" class="btn btn-primary" id="ubah">Ubah</a></td>
                    <td><a href="delete.php?id=<?= $data["id"];?>" class="btn btn-danger" id="hapus" onclick="javascript: return confirm('Anda yakin akan hapus data?')">Hapus</a></td>
                </tr>
                
                <?php                                
                    }
                ?>                                               
            </table>
            <a href="./index.php" class="btn btn-primary">Tambah Data Mahasiswa</a> 
        </div>
    </body>
</html>
