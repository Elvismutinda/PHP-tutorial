<?php 

include('db_connect.php');
include('template/overall.php');

$errors = array('emal' => '','number' => '','ae' => '','edu' => '', 'schol' => '');
$emai = $educ = $schoo = '';
$nos = 2547;
$ag = 0;

if(isset($_POST['submit'])){
    if(empty($_POST['email'])){
       $errors['emal'] = 'An email is required <br />';
    }
    else{
        $emai = $_POST['email'];
        if(!filter_var($emai,FILTER_VALIDATE_EMAIL)){
            $errors['emal'] = 'email must be a valid email adress';
        }
    }
    if(empty($_POST['phonenumber'])){
        $errors['number'] = 'A phone number is required <br />';
    }
    else{
        $nos =  $_POST['phonenumber'];
        if(!filter_var($nos,FILTER_VALIDATE_INT)){
            $errors['number'] = 'phonenumber must be valid';
        }
    }
    if(empty($_POST['age'])){
        $errors['ae'] = 'Age is required <br />';
    }
    else{
        $ag = $_POST['age'];
        if(!filter_var($ag,FILTER_VALIDATE_INT)){
            $errors['ae'] = 'Age must only be a number';
        }
    }
    if(empty($_POST['education'])){
        $errors['edu'] = 'Education level is required <br />';
    }
    else{
        $educ = $_POST['education'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$educ)){
            $errors['edu'] = 'Level of eductation must only be letters and spaces';
        }
    }
    if(empty($_POST['school'])){
        $errors['schol'] = 'Schools learnt is required <br />';
    }
    else{
        $schoo = $_POST['school'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$schoo)){
            $errors['schol'] = 'Schools learnt must be a comma separated list';
        }
    }
    if(array_filter($errors)){
        // echo 'errors in the form';
    } else {
        //prevent sql injections
        $emai = mysqli_real_escape_string($conn,$_POST['email']);
        $educ = mysqli_real_escape_string($conn,$_POST['education']);
        $schoo = mysqli_real_escape_string($conn,$_POST['school']);
         
        //create new variable for adding variable
        $sql = "INSERT INTO info(email, age, phonenumber, education, schools) VALUES ('$emai','$ag','$nos','$educ','$schoo')";

        //save to db and check
        if(mysqli_query($conn,$sql)){
            header("location:connect.php");
        } else{
            echo 'query error: '.mysqli_error($conn);
        }

        
       
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h4>Add data 😃</h4>
    <form action="add.php" method="POST" style="display: flex; flex-direction: column; margin: 50px 20%;">

        <label for="email" style="margin:20px,0;">Your email: </label>
        <input type="text" name="email" value ="<?php echo htmlspecialchars($emai); ?>" >
        <div class="errormessage" style="color:red; margin:20px,0;"><?php echo($errors['emal']);  ?></div>

        <label for="phone number" style="margin:20px,0;">Your Phone number: </label>
        <input type="number" name="phonenumber" value ="<?php echo htmlspecialchars($nos); ?>" >
        <div class="errormessage" style="color:red; margin:20px,0;"><?php echo($errors['number']);  ?></div>

        <label for="age" style="margin:20px,0;">Your age: </label>
        <input type="number" name="age" value ="<?php echo htmlspecialchars($ag); ?>" >
        <div class="errormessage" style="color:red; margin:20px,0;"><?php echo($errors['ae']);  ?></div>

        <label for="level of education" style="margin:20px,0;">level of education: </label>
        <input type="text" name="education" value ="<?php echo htmlspecialchars($educ); ?>">
        <div class="errormessage" style="color:red; margin:20px,0;"><?php echo($errors['edu']);  ?></div>

        <label for="schools studied" style="margin:20px,0;">Schools studied: </label>
        <input type="text" name="school" value ="<?php echo htmlspecialchars($schoo); ?>">
        <div class="errormessage" style="color:red; margin:20px,0;"><?php echo($errors['schol']);  ?></div>

        <button name="submit" >submit</button>
        
    </form>
</body>
</html>
