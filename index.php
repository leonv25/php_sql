<?php
$mysqli = new mysqli("localhost", "root", "", "kinomonster");
if(mysqli_connect_errno()) {
    printf ("Соединение не установлено", mysqli_connect_error());
    exit();
}
$mysqli->set_charset('utf8');//в уроці виводило ???? тому написано цей код в мене вже ні, мабуть новіша версія, теоретично в нових версіях його писати не обовязково

$query = $mysqli->query("SELECT name, year FROM movie");
while ($row = mysqli_fetch_assoc($query)) {
    echo $row['name'].$row['year']."<br>";
}
$mysqli->close();
?>