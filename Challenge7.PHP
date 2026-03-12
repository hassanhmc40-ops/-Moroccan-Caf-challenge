<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="Challenge7.php" method="post">   
<h2 style="color:skyblue;">contact form.</h2>
 <label>user name</label><br>
<input type="text" name="username" value="<?php echo $_POST["username"] ?? ''; ?>"><br>
 <label>user email</label><br>
<input type="email" name="email" value="<?php echo $_POST["email"] ?? ''; ?>"><br> 
 <label>message</label><br>
 <input type="text" name="message" value="<?php echo $_POST["message"] ?? ''; ?>"><br>
  <input type="submit"value="submit">
</form>

</body>
</html>

<?php

if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["message"])) {
    echo $_POST["username"] . "<br>";
    echo $_POST["email"] . "<br>";
    echo $_POST["message"] . "<br>";

    if (strpos($_POST["email"], "@") === false) {
        echo "invalid email address.";
    } else {
        echo "valid email address.";
    }
}

?>