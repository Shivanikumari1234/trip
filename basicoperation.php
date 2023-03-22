<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container
    {
        max-width:80%;
        background-color:rgb(192, 125, 136);
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>This is my first webpage</h1>
       <p>Your party status is here:</p>
        <?php
        //If-else
         $age = 25;
         if($age>18)
         {
            echo "You can go to the party";
         }
         else{
            echo "You can go to the party";
         }

         //Arrays
         $language = array(" Java ","C++","php");
         //echo $language[0];
         //echo count( $language);

         //Loops in php
        /* $a=1;
         while ($a <= 10) {
            echo "<br>The value if a is: ";
            echo $a;
            $a++;
         }
         //Iterating arrays in php using while loop
         $a=0;
         while ($a < count($language)) {
            echo "<br>The value if language is: ";
            echo $language[$a];
            $a++;
         }
         

          // do while loop
          $a=0;
          do{
            echo "<br>The value if a is: ";
            echo $a;
            $a++;
         }
         while ($a < 10);

         

         //for loop
         for ($i=0; $i <= 15 ; $i++) { 
            echo "<br>The value if i is: ";
            echo $i;
         }
         */


         //for each loop
         foreach($language as $value)
         {
            echo "<br>The value of foreach loop is: ";
            echo $value;
         }


         //Function
         /*function print5()
         {
            echo "<br>Five";
         }
         print5();
         */

         function print_number($number)
         {
            echo "<br>Your number is:";
            echo $number;
         }
         print_number(5);
         print_number(95);
         print_number(52);

        ?>
    </div>
</body>
</html>