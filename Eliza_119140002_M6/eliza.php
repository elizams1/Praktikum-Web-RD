<?php
    class hitung{

        var $mangga;
        var $jambu;
        var $salak;
        var $total;

        function totalMangga($jumlah,$harga){
            return $this->mangga=$jumlah*$harga;
        }
        function totalJambu($jumlah,$harga){
            return $this->jambu=$jumlah*$harga;
        }
        function totalSalak($jumlah,$harga){
            return $this->salak=$jumlah*$harga;
        }        
    }

    class total{

        var $total;

        function total($a,$b,$c){
            return $this->total=$a+$b+$c;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Menuliskan tag Meta-->
        <meta charset="utf-8">
         <meta name="descriptions" content="Belajar PHP II">
         <meta name="author" content="Eliza-11914002">
         
        <!--Menggunakan tag title-->
        <title>Minggu6- Eliza</title>

        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">    
        <link rel="stylesheet" type="text/css" href="./minggu6.css">
    </head>
    <body>
        <h1 style="text-align:center; margin-top:20px;">Minggu 6 - Toko Buah</h1>
        <div class="main-content">            
            <div class="card harga-buah">
                <h3 class="card-title">
                    Harga Buah
                </h3>
                <table class="table table-striped">
                    <tr>
                        <th>Nama Buah</th>
                        <th>Harga /Kg</th>
                    </tr>
                    <tr>
                        <td>Mangga</td>
                        <td>Rp. 15.000</td>                  
                    </tr>
                    <tr>
                        <td>Jambu</td>
                        <td>Rp. 13.000</td>                  
                    </tr>
                    <tr>
                        <td>Salak</td>
                        <td>Rp. 10.000</td>                  
                    </tr>
                </table>
            </div>
            <div class="card form-buah">
                <h3 class="card-title">
                    Beli Buah
                </h3>
                <form method="post" action="eliza.php">
                    <div class="mb-3">
                        <label for="mangga" class="form-label">Mangga</label>
                        <input type="text" name="mangga" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="jambu" class="form-label">Jambu</label>
                        <input type="text" name="jambu" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="salak" class="form-label">Salak</label>
                        <input type="text" name="salak" class="form-control">    
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="hitung" class="btn btn-primary">
                    </div>
                </form>
            </div>
                <?php
                    if(isset($_POST['hitung'])){
                        $hasilMangga = new hitung();
                        $jumlahMangga = $_POST["mangga"];
                        
                        $hasilJambu = new hitung();
                        $jumlahJambu = $_POST["jambu"];

                        $hasilSalak = new hitung();
                        $jumlahSalak= $_POST["salak"];  
                        
                        $hargaMangga=$hasilMangga->totalMangga($jumlahMangga,15000);
                        $hargaJambu=$hasilJambu->totalJambu($jumlahJambu,13000);
                        $hargaSalak=$hasilSalak->totalSalak($jumlahSalak,10000);

                        $total= new total();
                ?>
            <div class="card total-buah">
                <table class="table table-striped">
                    <tr>
                        <th>Nama Buah</th>
                        <th>Jumlah Kg</th>
                        <th>Harga</th>                            
                    </tr>
                    <tr>
                        <td>Mangga</td>
                        <td><?php echo $jumlahMangga; ?></td>
                        <td><?php echo $hargaMangga; ?></td>
                    </tr>
                    <tr>
                        <td>Jambu</td>
                        <td><?php echo $jumlahJambu; ?></td>
                        <td><?php echo $hargaJambu;?></td>
                    </tr>
                    <tr>
                        <td>Salak</td>
                        <td><?php echo $jumlahSalak; ?></td>
                        <td><?php echo $hargaSalak; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>TOTAL</b></td>
                        <td><?php echo $total->total($hargaMangga,$hargaJambu,$hargaSalak);?></td>
                    </tr>
                </table>
            </div>                    
                <?php                            
                    }                    
                ?>                
        </div>        
    </body>
    <footer>        
        <p>Copyright &copy; 2021</p>
        <p class="author">By Eliza Maharani - 119140002</p>
    </footer>
</html>
