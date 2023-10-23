<?php
    $array = [];
    
        for($i=0; $i < 50; $i++){
            array_push($array,random_int(1,100));
        print_r($array[$i]);
        echo " ";
        
        }
    echo "Najmniejsza liczba: ".min($array). "</br>";
    echo "Najwieksza liczba: ".max($array). "</br>";
    $suma = 0;

    foreach ($array as $value) {
        $suma += $value;
    }
    $srednia = $suma / count($array);
    echo "Średnia wartość elementów: $srednia </br>";


    $iloscTrojek = 0;

    foreach ($array as $value) {
        $iloscTrojek += substr_count(strval($value), '3');
    }
    echo "Ilość wystąpień cyfry 3: $iloscTrojek </br>";

    echo "Trzy najmniejsze wartości: ";

    for ($i = 0; $i < 3; $i++) {

      echo $array[$i] . " ";

    }

    echo "</br>";

    echo "Trzy największe wartości: ";

    for ($i = count($array) - 1; $i >= count($array) - 3; $i--) {

       echo $array[$i] . " ";

    }

    echo "</br>";
?>
