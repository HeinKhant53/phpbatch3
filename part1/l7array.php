<?php

    //Array 3
    //(i) Indexed Array (Manual Array)
    //(ii) Associative Array
    //(iii) Multidimensional Array


    //(i) Indexed Array (Manual Array)  - Arrays with a numeric index
    $names = array("aung aung","maung maung","zaw zaw","kyaw kyaw","tun tun");
    echo $names;  //warning result -> Array
    echo "<br/>";

    //count() = array length
    echo count($names); //5  
    echo "<br/>";
    print $names;   //warning result -> Array
    echo "<br/>";

    print_r($names);
    echo "<br/>";
    print_r($names,false);
    //Array ( [0] => aung aung [1] => maung maung [2] => zaw zaw [3] => kyaw kyaw [4] => tun tun )
    echo "<br/>";
    print_r($names,"false"); //empty


    echo "<br/>";
    
    $colors = ["red","green","blue","white","black","pink"];
    echo $colors;   //warning
    echo "<br/>";
    echo count($colors);
    echo "<br/>";
    echo "<pre>".print_r($colors,"true")."</prev>";
    echo "<br/>";

    var_dump($colors);
    echo "<br/>";

    $colors[6] = "grey";
    $colors[7] = "stone";
    $colors[8] = "skyblue";

    $colors[0] = "viloet";

    echo "<pre>".print_r($colors,"true")."</pre>";
    echo "My fav color is ".$colors[3];

    echo "<hr/>";


    //...................................

    //(ii) Associative Array  - Array with named key
    $news = array("pone"=>"this is post one","ptwo"=>"this is post two","phthree"=>"this is post three");
    var_dump($news);
    echo "<br/>";
    
    $medias = ["pone"=>"this is post one",
    "ptwo"=>"this is post two",
    "phthree"=>"this is post three"];

    var_dump($medias);
    echo "<br/>";

    $medias["pfour"] = "this is post four";
    $medias["pfive"] = "this is post five";
      
    echo "<pre>".print_r($medias,"true")."</pre>";
    echo "i like this post,so post title is ". $medias["pfive"];

    echo "<hr/>";
    //-------------------------------------------------------------------------


    //(iii) Multidimensional Array - Arrays containings one or more arrays

    // $paints = array(
    //     array("red","green","blue","white"),
    //     array("pen","pencil","ruler"),
    //     array("paper","plastic")
    // );

    $paints = [
        ["red","green","blue","white"],
        ["pen","pencil","ruler"],
        ["paper","plastic"]
    ];

    var_dump($paints);
    
    echo "<br/>";
    echo "<br/>";

    echo $paints[0]; //array
    echo "<br/>";
    echo $paints[0][0]; //red
    echo "<br/>";
    echo $paints[1][1]; //pencil
    echo "<br/>";
    echo $paints[2][1]; //plastic

    echo "<br/>";
    echo "<br/>";

    $persons = array(
        array("name" => "Aung Aung","age" => "20"),
        array("name" => "Su Su","age" => "30"),
        array("name" => "Yin Yin","age" => "25")
    );

    // $persons = [
    //     ["name" => "Aung Aung","age" => "20"],
    //     ["name" => "Su Su","age" => "30"],
    //     ["name" => "Yin Yin","age" => "25"]
    // ];

    var_dump($persons);
    
    echo "<br/>";
    echo "<br/>";

    // echo $persons[0][name]; //empty
    echo $persons[0]["name"]; //Aung Aung
    echo "<br/>";
    echo $persons[1]["age"]; //30
    echo "<br/>";
    echo $persons[2]["name"]; //Yin Yin
    echo "<br/>";
    echo $persons[2]["age"]; //25


    echo "<br/>";
    echo "<br/>";

    echo "<hr/>";
    //-------------------------------------------------------------------------


?>

<!-- 3AR -->