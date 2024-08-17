<?php
if(isset($_POST['Submit']))
    {
    $firstnum = $_POST['first'];
    $secondnum = $_POST['second'];
    $op = $_POST['operator'];
    $result="";
    switch ($op) {
        case 'ADD':
            $result =$firstnum+$secondnum;
            break;
        case 'SUB':
            $result =$firstnum-$secondnum;
            break;
        case 'MULTI':
            $result =$firstnum*$secondnum;
            break;
        case 'DIVIDE':
            $result =$firstnum/$secondnum;
            break;
        
        default:
            echo $result;
            break;
    }
       
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
     
    <form action="" method="POST">
    <label  for="">Enter first number : </label>
    <input type="number" name="first">
    <br>
    <br>
    <label  for="">Enter second number : </label>
    <input type="number" name="second"><br><br>

    <select name="operator" >
        <option>Select Operator</option>
        <option value="ADD">+</option>
        <option value="SUB">-</option>
        <option value="MULTI">*</option>
        <option value="DIVIDE">/</option>
    </select><br><br>
    <input type="submit" name="Submit" value="submit">
    </form> 
    <br>
    <?php
    if(isset($_POST['Submit']))
    {
        
        echo "<p>Result : </p>",$result; 
    }
    ?>
</body>
</html>
