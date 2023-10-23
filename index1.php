1.

<?php
    $array = [];
    function Fibonacci($number)
    {
        if ($number == 0)
            return 0;
        else if ($number == 1)
            return 1;
        else
            return(Fibonacci($number-1)+
            Fibonacci($number-2));
    }

    $number =30;
    for($counter = 0; $counter < $number; $counter++)
    {
        array_push($array,Fibonacci($counter));
    }
    foreach($array as $liczby){
        echo $liczby, ' ';
    }
?>

2. 

<?php
    $array = [];
    
        for($i=0; $i < 100; $i++){
            array_push($array,pow(2,$i));
        }
    
    foreach($array as $liczby){
        echo $liczby, ' ';
    }
?>

3.

<?php
    $array = [];
    
        for($i=1; $i < 100; $i++){
            array_push($array,3*$i);
        }
    
    foreach($array as $liczby){
        echo $liczby, ' ';
    }
?>
