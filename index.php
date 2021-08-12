<?php

$mysqli = new mysqli("localhost", "root", "", "kinomonster");
if(mysqli_connect_errno()) {
    printf ("Соединение не установлено 25", mysqli_connect_error());
    exit();
}


$mysqli->set_charset("utf8");



$query = $mysqli->query("SELECT * FROM movie");
while ($row = mysqli_fetch_assoc($query)) {
    echo $row['name'];
}

$mysqli->close();




?>
