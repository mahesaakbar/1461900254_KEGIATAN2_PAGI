<!DOCTYPE html>
<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pertemuan2";

$link = mysqli_connect($servername, $username, $password, $dbname);
if (!$link){
        die("Connection Failed:".mysqli_connect_error());
    }
?>

<form action="" method="post">
<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>kode_penerbit</th>
        <th>nama_penerbit</th>
        <th>alamat_penerbit</th>
        <th>telp_penerbit</th>
    </tr>
    <?php

            $q = $link->query("select * from ms_penerbit");  
                while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
                    echo "<tr>";
                    echo "<th><b>".$r['kode_penerbit']."</b></th>";
                    echo "<th><b>".$r['nama_penerbit']."</b></th>";
                    echo "<th><b>".$r['alamat_penerbit']."</b></th>";  
                    echo "<th><b>".$r['telp_penerbit']."</b></th>";
                    
            ?>   
                
                </tr>
                </center>

                <?php } ?>
            

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "pertemuan2";
                
                $link = mysqli_connect($servername, $username, $password, $dbname);
                if (!$link){
                        die("Connection Failed:".mysqli_connect_error());
                    }
                ?>
                
                <form action="" method="post">
                <table border="1" cellpadding="0" cellspacing="0">
                    <tr>
                        <th>kode_penerbit</th>
                        <th>nama_penerbit</th>
                        <th>alamat_penerbit</th>
                        <th>telp_penerbit</th>
                    </tr>
                    <?php
                
                            $q = $link->query("select * from ms_penerbit where nama_penerbit='shueisa'");  
                                while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
                                    echo "<tr>";
                                    echo "<th><b>".$r['kode_penerbit']."</b></th>";
                                    echo "<th><b>".$r['nama_penerbit']."</b></th>";
                                    echo "<th><b>".$r['alamat_penerbit']."</b></th>";  
                                    echo "<th><b>".$r['telp_penerbit']."</b></th>";
                                    
                            ?>   
                                
                                </tr>
                                </center>
                
                                <?php } ?>

                
</table>
</form>
</html> 
    