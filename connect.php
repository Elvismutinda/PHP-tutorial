<?php 

//connect to database
$conn = mysqli_connect('localhost','neville','1234','datatutorial');

//check the connection
if(!$conn){
    echo 'connection failed' . mysqli_connect_error();
}

//write query for all data

$sql = 'SELECT email,age,education,schools FROM info ORDER BY created_at';

//make query and get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($data);

print_r(explode(',',$data[0]['schools']));

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database sync</title>
</head>
<body>
    <h4>People in network</h4>
    <div>
        <div>
            <?php foreach($data as $dat){ ?>
                    <div>
                        <h6> <?php echo htmlspecialchars($dat['email']); ?> </h6>
                        <h6> <?php echo htmlspecialchars($dat['age']); ?> </h6>
                        <h6> <?php echo htmlspecialchars($dat['education']); ?> </h6>
                    </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>