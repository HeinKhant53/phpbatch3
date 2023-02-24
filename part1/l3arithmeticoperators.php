<?php
    
    //Arthmethic Operators
    //+ - * / %

    $num1 = 100;
    $num2 = 200;
    $num3 = 30.28;
    $city = "Mawlamyine";
    $car = false;
    $myarr = ['maung maung','kyaw kyaw'];
    $colors = array('red','blue','green');

    echo $num1;
    echo $num2;

    echo "<br/>";
    
    echo $num1 + $num2;
    echo "<br/>";
    echo $num1 - $num2;
    echo "<br/>";
    echo $num1 * $num2;
    echo "<br/>";
    echo $num1 / $num2;
    echo "<br/>";
    echo $num1 % $num2;
    echo "<br/>";

    echo "<hr/>";


    //Check Data Type -> var_dump();
    var_dump($num1);
    echo "<br/>";
    var_dump($num1,$num2);
    echo "<br/>";
    echo var_dump($num1);
    echo "<br/>";
    var_dump($num3);
    echo "<br/>";

    var_dump($city);
    echo "<br/>";

    var_dump($car);
    echo "<br/>";

    var_dump($myarr);
    echo "<br/>";
    var_dump($colors);
    echo "<br/>";

    echo "<hr/>";

    $num4 = true; //true = 1 , false = 0
    $num5 = "10";
    $num6 = '20';

    var_dump($num5,$num6);  //result = string
    echo "<br/>";
    echo $num5+$num6; //result = 30
    echo "<br/>";
    echo $num6-$num5; //result = 10
    echo "<br/>";
    echo $num4+$num5; //result = 11
    echo "<br/>";
    var_dump($num5+$num6); //result = int(30)
    echo "<br/>";

    echo "<hr/>";

    //Overwrite
    $num5 = 50;
    $num6 = '60';
    var_dump($num5,$num6);
    echo "<br/>";
    echo $num5+$num6; //result = 110


    echo "<hr/>";

?>