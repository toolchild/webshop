<html>
<body>
<table border="1">
<?php

include_once("dbUtils.php");
$sql = "select * from product";
$result =db_query($sql);

while($row = mysqli_fetch_row($result)){
    echo "<tr>\n";
    foreach($row as $r){
        echo "<td>$r</td>";
    }
    echo "</tr>\n";
}
?>

</table>
</body>


</html>

