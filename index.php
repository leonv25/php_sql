<?php
// print_r ($_POST);
if(isset($_POST['name'])) {
    $nameFilter = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    echo "Мое имя ".$nameFilter;
}

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

    <form action="/" method="post">
        <input type="text" name="name" placeholder="ваше имя">
        <textarea name="comment"></textarea>
        <input type="hidden" name="id_user" value="1313">
        <input type="submit" value="отправить">
    </form>
    
</body>
</html>
