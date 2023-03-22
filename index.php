<?php
$insert = false;
if(isset($_POST['name'])){

    //set connection variable
    $server = "localhost";
    $username = "root";
    $password = "";

    //create a connection
    $con = mysqli_connect($server,$username,$password);

    //check for connection success or not
    if(!$con)
    {
        die("Connection to this database failed due to" .mysqli_connect_error());
    }
    //echo "Successful connect to the db";
    
    //collect post variable
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $branch = $_POST['branch'];
    $section = $_POST['section'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `gender`, `email`, `branch`, `section`, `other`, `dt`) 
    VALUES ('$name', '$gender', '$email', '$branch', '$section', ' $desc', current_timestamp());";
   
    //Execute the query
    if($con->query($sql)==true)
    {
       //flag for Successfully insertion";
       $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    //close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg " src="bg.jpg" alt="LNCT">
    <div class="container">
        <h2>Welcome To LNCT Trip Form</h2>
        <p>Enter your detail and submit this form to conform your participation in the trip</p>

        <?php
        if($insert == true)
        {
            echo "<p class='submitmsg'>Thanks for sumbmitting your form</p>";
        }
        ?>
        <form action="index.php" method="post">
             <input type="text" name="name" id="name" placeholder="Enter your name">
             <input type="text" name="gender" id="gender" placeholder="Enter your gender">
             <input type="text" name="email" id="email" placeholder="Enter your email">
             <input type="text" name="branch" id="branch" placeholder="Enter your branch">
             <input type="text" name="section" id="name" placeholder="Enter your section">
             <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any information here"></textarea>
             <button class="btn">Submit</button>
            
        </form>
    </div>
    <script src="index js"></script>
</body>
</html>