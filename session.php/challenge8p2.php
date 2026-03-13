<?php
session_start();

if (isset($_POST["favorite_language"])) {
    $_SESSION["favorite_language"] = $_POST["favorite_language"];
    header("Location: challenge8p3.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Step 2</h2>

<form method="post">
    <label>Favorite Programming Language</label><br>
    <input type="text" name="favorite_language"
           value="<?php echo $_SESSION["favorite_language"] ?? ''; ?>"><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>