<?php
function sum($a, $b) {
    $result = false;
    if(!is_numeric($a)) {
        $result = "Ошибкаю. Значение 'а' не является числом";
    }else if (!is_numeric($b)) {
        $result = "Ошибкаю. Значение 'b' не является числом";
    } else {
        $result = $a + $b;
    }
    return $result;
}

function maxSum($sum, ) {
    $result = false;
    if($sum<30) {
        $result = "Сумма больше 30";
    } else {
        $result = "Сумма меньше 30";
    }

    return $result;

}

echo sum(3, 2);

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

  
    
</body>
</html>
