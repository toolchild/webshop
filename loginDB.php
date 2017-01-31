<html>
<body>
<h1>login</h1>

<?php
$login = $_POST['login'];
$password = $_POST['password'];

include_once("dbUtils.php");
if (isset($login) && isset($password)){
$sql = "select login from user where login='$login' and password='$password'";
$result = db_query($sql);

if (mysqli_fetch_row($result) > 0) {
    $login = mysqli_fetch_row($result);
    echo "you are now logged in\n";
    echo "<br><a href='shop.php'>go to shop</a>";
} else {
    echo "login failed";
}
} else {
    echo "no data arrived here";
}
?>
</body>

</html>

