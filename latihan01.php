<?php

    $cars =array(" volvol"," BMW"," Toyota"," Daihatsu");
    
    $jmldata = count($cars);
    echo "Jumlah data = ".$jmldata."<br>";
    for($i=0;$i<=3;$i++){
        echo "<br>Kendaraan".$cars[$i];
    }
   
    echo "<hr>";

    echo "<ol>";

    foreach($cars as $dta){
        echo "<li> Kendaraan".$dta."</li>";
    }
    echo "</ol>";
