<?php
session_start();
if (isset ($_POST["username"])){
    $_SESSION["username"]=$_POST["username"];
    header("Location: challenge8p2.php");
    exit(); 
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
    <form method="post">
   <h2>session practice</h2> 
    <label>user name</label><br>
    <input type="text" name="username" value="<?php echo $_SESSION["username"] ?? ''; ?>"><br>
    <input type="submit"value="submit">
    </form>
</body>
</html>
