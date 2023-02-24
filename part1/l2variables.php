<?php
    
    //Variables
    //variable scope 3
    //(i)Global Scope Variable
    //(ii)Local Scope Variable
    //(iii)Static Scope Variable

    $fullname = "U Kyaw Kyaw";
    $job = "Developer";
    
    echo $fullname;
    print $job;
    
    echo '$fullname';   //result = $fullname
    echo "$fullname";   //result = U Kyaw Kyaw
    echo `$job`;  // empty
    echo `${job}`;  // empty

    echo "<br/>";

    echo "My name is              $fullname";  //result = My name is U Kyaw Kyaw
    echo "<br/>";
    echo "My name is ${fullname}";  //result = My name is U Kyaw Kyaw
    echo "<br/>";
    echo 'My name is ${fullname}';  //result = empty

    echo "<br/>";

    echo "I am ${job}";  //result =  I am Developer
    echo "I am {$job}";  //result =  I am Developer

    echo "<hr/>";

    echo 'He\'s my father, he is a $job'; //result = He's my father, he is a $job
    echo "<br/>";
    echo "He's my father, he is a \$job"; //result = He's my father, he is a $job
    echo "<br/>";
    echo "He's my father, he is a \${job}"; //result = He's my father, he is a ${job}
    echo "<br/>";
    echo "He's my father, he is a \{$job}"; //result = He's my father, he is a \{Developer};
    echo "<br/>";
    echo "He's my father, he is a {\$job}"; //result = He's my father, he is a ${job};

    echo "<hr/>";

    $gender = print 'female'; //female

    // $nation = echo 'burma'; //error

    echo "<hr/>";


    //->Concat (.)
    $firstname = 'Aung';
    $lastname = 'Kyaw Kyaw';

    echo $firstname;
    echo $lastname;
    echo "<br/>";

    echo $firstname.$lastname;
    echo "<br/>";
    echo $firstname.' '.$lastname;

    echo "<hr/>";

    // ->Comment

    // 1.Single Line Comment
    #  2.Single Line Comment
    /* 3.Single Line Comment */ 

    /*
        Muliti Line Comment
    */
?>

<!-- 
Note:
    '' Single quote = no language
    "" Double quote =   language
-->


<!-- 20IN  -->


<!-- 
For Linux
----------

php -S localhost:800 -t foldername
localhost:8000/filename.php 

-->