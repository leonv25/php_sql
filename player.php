<?php
    $mysqli = new mysqli("localhost", "root", "", "kinomonster");
    if(mysqli_connect_errno()) {
        printf ("Соединение не установлено", mysqli_connect_error());
        exit();
    }
    $mysqli->set_charset('utf8');
    if (isset($_POST['name']) and isset($_POST['author'])){
        $name = $_POST['name'];
        $author = $_POST['author'];
        $queryNew = "INSERT INTO music VALUES(null,'".$name."','".$author."')";
        $mysqli->query($queryNew);
    }
    $query = $mysqli->query("SELECT name, author FROM music");
    $mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/player.php" method="post">
        <input type="text" name="name" placeholder="композиция">
        <input type="text" name="author" placeholder="исполнитель">
        <input type="submit" value="добавить">
    </form>
    <div>
        <?php
            while ($row = mysqli_fetch_assoc($query)) {
                echo $row['name']." | ".$row['author']."<br>";
            }
        ?>
    </div>
</body>
</html>