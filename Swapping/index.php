<?php
if(isset($_POST['Submit']))
{
$firstNum = $_POST['firstNum'];
$secondNum = $_POST['secondNum'];


$firstNum = $firstNum+$secondNum;
$secondNum = $firstNum-$secondNum;
$firstNum = $firstNum-$secondNum;

echo $firstNum;
echo"<br>";
echo $secondNum;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="" method="POST">
        <label for="">First name</label>
        <input type="number" name="firstNum"><br><br>
        <label for="">Second name</label>
        <input type="number" name="secondNum"><br><br>
        <input type="Submit" name="Submit" value="Submit">
    </form>
</body>
</html>

