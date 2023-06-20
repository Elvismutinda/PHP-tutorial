<?php 

include('db_connect.php');

//write query for all data

$sql = 'SELECT email,age,education,schools FROM info ORDER BY created_at';

//make query and get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($data);

//print_r(explode(',',$data[0]['schools']));

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
    <style>
        table, tr,td,th{
            border: 1px solid black;
        }
</style>
</head>
<body>
    <h4>People in network</h4>
    <div>
        <div>
            <table>
                <tr>
                     <th>email</th>
                     <th>age</th>
                     <th>education</th>
                </tr>

                <?php foreach($data as $dat): ?>
                        <div>
                            <tr>
                                <td> <h6> <?php echo htmlspecialchars($dat['email']); ?> </h6></td> 
                                <td> <h6> <?php echo htmlspecialchars($dat['age']); ?> </h6> </td> 
                                <td> <h6> <?php echo htmlspecialchars($dat['education']); ?> </h6> </td> 
                            </tr> 
                        </div>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>