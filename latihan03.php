<?php
    $mhs = array(
        array("Nama"=>"Dengkol","ID "=>"87","Kota"=>"Bangli"),
        array("Nama "=>"Dejayo","ID"=>"88","Kota"=>"Sumatra"),
        array("Nama "=>"Dolar","ID"=>"89","Kota"=>"Jawa"),
        array("Nama "=>"Redo","ID"=>"90","Kota"=>"Papua"),
       
    );
    // echo $mhs[0]["Nama"];
    // echo "<hr>";
    // print_r($mhs);
    // echo "<hr>";

    // foreach($mhs as $dta){

    //     foreach ($dta as $lb => $nval){
    //         echo $lb. ":".$nval."<br>";
    //     }
    //     echo "<br>";
    // }

    header("content-type: application/jason");
    echo json_encode($mhs);