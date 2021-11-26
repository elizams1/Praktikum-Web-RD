<?php
    include 'koneksi.php';

    $id=$_GET['id'];
        
    $sql="delete from datamhs where id = $id";
    mysqli_query($connect,$sql);
    

    if($id>0){
        echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = 'tampil.php';
            </script>
        ";
    }          
?>