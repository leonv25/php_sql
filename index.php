<?php

$ms = new mysqli("localhost", "root", "", "kinomonster");
if(mysqli_connect_errno()) {
    printf ("Соединение не установлено 25", mysqli_connect_error());
    exit();
}

// $ms->set_charset("utf8");

$query = $ms->query("SELECT * FROM movie");

while ($row = mysqli_fetch_assoc($query)) {
    echo $row['name'];
}

$ms->close();

?>
