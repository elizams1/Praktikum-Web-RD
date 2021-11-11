<!DOCTYPE html>
<html>
    <head>
        <!--Menuliskan tag Meta-->
        <meta charset="utf-8">
         <meta name="descriptions" content="Belajar PHP">
         <meta name="author" content="Eliza-11914002">
         
        <!--Menggunakan tag title-->
        <title>Minggu5- Eliza</title>

        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">    
        <link rel="stylesheet" type="text/css" href="./eliza.css">
    </head>
    <body>
        <h1 style="text-align: center; margin: 20px;">Belajar PHP</h1>
        <div class="card">
            <div class="card-body">
                <div class="kalkulator">            
                    <?php
                        if(isset($_POST['hitung'])){
                            $angka1 = $_POST["angka1"];
                            $angka2 = $_POST["angka2"];
                            $operasi = $_POST["operasi"];
                            if($operasi=="+"){
                                $hasil = $angka1 + $angka2;            
                            }
                            else if($operasi=="-"){
                                $hasil = $angka1 - $angka2;            
                            }
                            else if($operasi=="*"){            
                                $hasil = $angka1 * $angka2;            
                            }
                            else if($operasi=="/"){            
                                $hasil = $angka1 / $angka2;        
                            }
                            else if($operasi=="%"){            
                                $hasil = $angka1 % $angka2;            
                            }        
                        }       
                    ?>
                    <div class="form form-kalkulator">
                        <form method="post" action="eliza.php">
                            <div class="mb-3">
                                <label for="angka1" class="form-label">Bilangan 1 </label>
                                <input type="text" name="angka1" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="angka2" class="form-label">Bilangan 2 </label>
                                <input type="text" name="angka2" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="operasi" class="form-label">Operasi</label>
                                <input type="text" name="operasi" class="form-control">    
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="hitung" class="btn btn-primary">
                            </div>                                                                                                               
                        </form>
                        <?php 
                            if(isset($_POST['hitung'])){                
                        ?>
                        <div class="mb-3">
                            <input type="text" name="hasil" value="<?php echo $hasil; ?>" class="hasil form-control">
                        </div>
                        <?php
                            }else{
                        ?>
                        <div class="mb-3">
                            <input type="text" name="hasil" class="hasil form-control"  value="0">
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">
                <div class="urut">
                    <p>Urutkan : "Larine","Aduh","Qifuat","Toda","Anevi","Samid","Kifuat"</p>                    
                    <?php                                                           
                        $nama = array("Larine","Aduh","Qifuat","Toda","Anevi","Samid","Kifuat");
                        for($i=0;$i<7;$i++){
                            for($j=$i+1;$j<7;$j++){
                                if($nama[$i]>$nama[$j]){
                                    $cur=$nama[$i];
                                    $nama[$i]=$nama[$j];
                                    $nama[$j]=$cur;
                                }
                            }
                        }
                        for($i=0;$i<7;$i++){
                            echo "$nama[$i]"."  ";                    
                        }                                                                                
                    ?>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">
                <div class="prima">
                    <p>Berikut merupakan perhitungan bilangan prima dari 1 sampai 50</p>
                    <?php
                        for($i=1;$i<=50;$i++){
                            $bil=0;
                            for($j=1;$j<=$i;$j++){
                                if($i%$j==0){
                                    $bil++;
                                }
                            }
                            if($bil==2){
                                echo $i.' ';
                            }
                        }                    
                    ?>
                </div>
            </div>
        </div>                
    </body>
    <footer>        
        <p>Copyright &copy; 2021</p>
        <p class="author">By Eliza Maharani - 119140002</p>
    </footer>
</html>

