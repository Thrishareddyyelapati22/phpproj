<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .container
    {
        max-width:80%;
        background-color:pink;
        margin:auto;
        padding : 20px;
    }
    </style>

<body>
    <div class="container">
        Lets start php!
        <p> Your party status is here</p>
        <?php
    $age=18;
    if($age>=18)
    {
        echo "yes";
    }
    else{
        echo "no you cant";
    }
    //arrays in php
    $languages=Array("python","C","C++");
    //echo count($languages);
    //loops
    $a=0;
    while($a < count($languages))
    {  
        echo "the val is";
      
        echo $languages[$a];
        echo "<br>";
        $a++;
    }
    foreach($languages as $val){
        echo $val;
    }
    // for ($a=0; $a <10 ; $a++) { 
    //     # code...
    // }
    function print5()
    {
        echo "Five";
    }
    print5();
    $str="this";
    echo $str;
    $length=strlen($str);
    echo "the len of string is:".$length;// . in php used for string concatenation
    //no of words in a sentence will str_word_count($str)
    // reveerse of str -->strrev($str);
    // search a word strpos($str,"is");
    //to replace a string str_replace("is","at",$str)
//it represents  is is replaced with at in the given string 



        ?>
    </div>
</body>
</html>