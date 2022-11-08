
<?php
session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$connection= new mysqli('localhost','root','','conn');
if(isset($_SESSION["loggedin"])){
    $id=($_SESSION["id"]);
}
$result = mysqli_query($connection,"select * from stud4 where id=$id");
while ($row = mysqli_fetch_array($result)) {
    ?>
    <span>Name:</span> <?php echo $row['name']; ?>
<span>E-mail:</span> <?php echo $row['email']; ?>
<?php 
}
?>
}
?>
</body>
</html>
