<?php
    $cars = ["auid", "kia", "bmw"];
    $i = 0;
    while($i<count($cars)){
        echo $cars[$i]. "<br>";
        $i++;
    }

    for($i = 0; $i<count($cars); $i++){
        echo $cars[$i]. "<br>";
    }

    $i=0;
    do{
        echo $cars[$i]."<br>";
        $i++;
    }while($i<count($cars));