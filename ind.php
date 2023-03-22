<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="class">
        This is my php website
        <?php

        //constant
        define('PI',3.14);
        echo "Hello world";
        //single line comment
        /* multi line comment */
        $variable1 = 6;
        $variable2 = 8;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo $variable2;
        echo "<br>";
        echo $variable1 + $variable2;

        //operators in php
        echo "<br>";  //next line
        echo "The value of var1 + var2 is ";
        echo $variable1 + $variable2;
        echo "<br>";
        echo "The value of var1 - var2 is ";
        echo $variable1 - $variable2;
        echo "<br>";
        echo "The value of var1 * var2 is ";
        echo $variable1 * $variable2;
        echo "<br>";

        $newvar = $variable1;
        //$newvar += 1;
        $newvar -= 1;
        echo "The new var is: ";
        echo $newvar;
        echo "<br>";
        //comparison operator--> it return boolean value
       // echo "<h1> This is my page </h1>";
       echo "The value of 1==2 ";
       echo var_dump(1==4);
       echo "<br>";
       echo "The value of 1!=2 ";
       echo var_dump(1 !=4);
       echo "<br>";
       echo "The value of 1<=2 ";
       echo var_dump(1<=4);
       echo "<br>";

       //Increment decrement operator
       //echo $variable1++;
       echo "<br>";
       echo $variable1--;
       echo "<br>";
       echo ++$variable1;
       echo "<br>";
       echo --$variable1;

      //logical operator --> && , || , xor
      //$myVar = (false and true);
      //$myVar = (true and true);
      //$myVar = (false or false);
      $myVar = (false xor false);
      echo "<br>";
      echo var_dump($myVar);

      //Data Types
      echo "<br> Data Tpes <br>";
      $var = "This is a string";
      echo var_dump($var);
      echo "<br>";
      $var = 89;
      echo var_dump($var);
      echo "<br>";
      $var = 89.9;
      echo var_dump($var);
      echo "<br>";
      $var = true;
      echo var_dump($var);
      echo "<br>";
      echo PI;

        ?>
        


    </div>
</body>
</html>