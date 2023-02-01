<?php
    $a = 2+2*2;
    echo $a;
    // only 10 5 2 1
    // 23 - 10 10 2 1
    // 37 - 10 10 10 5 2
  /* function getChange($num){
        $coin = 0;
        if($num >= 10) $coin = 10;
        else if($num >= 5) $coin = 5;
        else if($num >= 2) $coin = 2;
        else if($num >= 1) $coin = 1;
        
        if($coin != 0){
            echo $coin." ";
            getChange($num-$coin);
        }
    }
    echo getChange(43);*/ // Сдача

    /*function getChange($num){
        $coin = $num >= 10?10:$num >= 5?5:$num >= 2?2:$num >=1?1:0;   
        if($coin !=0){
            echo $coin." ";
            getChange($num-$coin);
        }
    }
        */ //тернарный

    /*function myMin($a, $b){ //Собественный min
        if($a<$b){
            return $a;
        }else{
            return $b;
        }
    }

    echo myMin(4, 9);*/



    /*function myMin($a, $b){
        myMin($a, $b); //бесконечный парадокс
    }*/

    /*$chars = ["A", "B","C","D","E"]; //вывод и подсчет AAAA AAAB AAAC и тд
    $quantity = 1;
    $position = 0;
    for($i=0;$i<count($chars);$i++){
        for($j=0;$j<count($chars);$j++){
            for($k=0;$k<count($chars);$k++){
                for($f=0;$f<count($chars);$f++){
                    $word = $chars[$i]. $chars[$j]. $chars[$k]. $chars[$f];
                    if($word == "CBAD") $position=$quantity;
                    echo $quantity. ")". $word. "<br>";
                    $quantity++;
                }
            }
        }
    }
    echo "CBAD have a position: ".$position;*/
    /*$nums = [45,324,233,52,32]; Масклимальный элемент
    $max = max($nums);
    */

    /*$marks = [4,4,5,4,4,3,4,5];  Среднее арифметическое

    $summ = 0;
    for($i=0; $i<count($marks); $i++){
        $summ = $summ + $marks[$i];
    }
    
    echo ($summ/count($marks));*/
