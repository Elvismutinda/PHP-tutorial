<?php
    // echo 'hello, world';
    // $name = 'Neville';
    // echo $name; //print out the variable
    // $age = 20; //variable
    // define('NAME','Neville'); //a constant
    // $stringOne = 'my email is: ';
    // $stringTwo = 'Nevillekalunda@cshaven.com';
    // echo $stringOne.$stringTwo; //concatunating using a dot
    // echo "The email of the organization head is $stringTwo"; //using "" double quotes allows one to directly concatunate strings
    // echo "The dog barked \"woof\""; // the forward slash \ will escapr the next character in order to avoid errors
    // echo 'The dog barked "meow"'; //another alternative to the double quotes generating errors
    // echo $name[0]; //picks up the first letter 
    // echo strlen($name);//prints out the string lenght of name
    // echo strtoupper($name);//changes string to upper case
    // echo strtolower($name);//converts tring to lower case
    // echo str_replace('m','w',$name) //replaces any m with a w in the string name
    // $radius = 2; //integer
    // $pie = 3.14; //float
    // echo $radius + $pie;
    // echo $radius - $pie;
    // echo $radius / $pie;
    // echo $radius * $pie;
    // echo $radius * $pie**2; // **means the pwer of
    // echo radius++; //increments by 1
    // echo radius--; //decreases by 1
    // radius += 20; //-= 20 *= 20 
    // $arrayone = [1,2,4,5,5];
    // $arraytwo = array(1,2,4,5,6,);
    // print_r($arrayone); //can be used to print the array
    // $arrayone[] = 60; //appends onto the array
    // array_push($arraytwo,70); //appends a value to the array
    // echo count($arrayone); //prints the number of elements in array
    // $arraythree = array_merge($arrayone,$arraytwo); //merges the two arrays
    // $associateone = ['first' => 1,'second' => 2]; //associative arrays use keys instead of indexes to keep positioning of data
    // $multidimensional = [
    //     [1,2,3,5,6,7,8],
    //     ['neville','kalunda','mwangangi']
    // ]; //calling 'neville' from here count the row and column [1][0] then echo $multidimensional[1][0];
    // $associatemultidimensional = [
    //     ['first' => 1,'second' => 2,'third' => 3,'fourth' => 5,'fifth' => 6],
    //     ['fn' => 'neville','sn' => 'kalunda','ln' => 'mwangangi']
    // ];//calling 'neville' from here count the row and column [1][0] then echo $associatemultidimensional[1][fn];
    // $popped = array_pop($associatemultidimensional); //this takes of the last item 
    // for($i = 0;i<10;i++)
    // {
    //     echo i;
    // } //for structure
    // $i = 0;
    // while(i < 10)
    // {
    //     echo i;
    //     echo '<br />'; //creates a new line after every print
    //     i++;
    // } //while structure
    $names = [
        ['first' => 'Neville','second' => 'Kalunda','third' => 'Mwangangi'],
        ['first' => 'Taylor','second' => 'Omondi','third' => 'Odhiambo'],
    ];

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
    <!-- <h1> <?php echo 'Hello world'; ?> </h1> -->
    <div>
    <Ul>
        <?php foreach($names as $name) { ?>
        <h2><?php echo $name['first'];?></h2>
        <h2><?php echo $name['second'];?></h2>
        <h2><?php echo $name['third'];?></h2>
        <?php } ?>
    </ol>
    
</div>
</body>
</html>