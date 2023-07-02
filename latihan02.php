<?php
    $age  = array("Petter"=>"78","Ben"=>"56","Joi"=>"98");
    

    echo "Umur dari Petter ".$age["Petter"]. " tahun<br>";
    
    echo "<hr>";
    echo "<ol>";

    foreach($age as $nama => $umur){
        echo "<li> Umur dari ".$nama.":</li>".$umur."<br>";
    }
    echo "</ol>";
    