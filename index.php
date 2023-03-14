<?php
    // echo 'hello, world';
    $name = 'Neville';
    echo $name; //print out the variable
    $age = 20; //variable
    define('NAME','Neville'); //a constant
    $stringOne = 'my email is: ';
    $stringTwo = 'Nevillekalunda@cshaven.com';
    echo $stringOne.$stringTwo; //concatunating using a dot
    echo "The email of the organization head is $stringTwo"; //using "" double quotes allows one to directly concatunate strings
    echo "The dog barked \"woof\""; // the forward slash \ will escapr the next character in order to avoid errors
    echo 'The dog barked "meow"'; //another alternative to the double quotes generating errors
    echo $name[0]; //picks up the first letter 
    echo strlen($name);//prints out the string lenght of name
    echo strtoupper($name);//changes string to upper case
    echo strtolower($name);//converts tring to lower case
    echo str_replace('m','w',$name) //replaces any m with a w in the string name
    $radius = 2; //integer
    $pie = 3.14; //float
    echo $radius + $pie;
    echo $radius - $pie;
    echo $radius / $pie;
    echo $radius * $pie;
    echo $radius * $pie**2; // **means the pwer of
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first Html file</title>
</head>
<body>
    <h1> <?php echo 'Hello world'; ?> </h1>
    <div>
        <?php echo NAME;?> <!--  calling it in html -->
        <?php echo $age;?>
    </div>
</body>
</html>