<?php


$arr = ["продукты", "бутылка с водой"];

// unset($arr[0]);

array_push($arr, "яблоко");
array_unshift($arr, "апельсин");
array_push($arr, "апельсин");
$arr = array_unique($arr);
// $arr = array_reverse($arr);
// sort($arr);
// shuffle($arr);

$arr2 = array("кокос", "арбуз");
$newarr = array_merge($arr, $arr2);



foreach($newarr as $key => $value) {
    echo "Ключ к масиву ".$key."- Значение масива ".$value.'<br>';
}

// $str = implode(", ", $newarr);
// echo $str;

$str = "апельсин, продукты, бутылка с водой, яблоко, кокос, арбуз";
$strtoarr = explode(", ", $str);
echo "<pre>";
print_r($strtoarr);
echo "</pre>";

$camera["market1"]["row1"][0] ='продукты';
$camera["market1"]["row1"][1] ='сумка';
$camera["market2"]["row2"][0] ='апельсин';
$camera["market2"]["row2"][1] ='фотоапарат';
$camera["market2"]["row2"][2] ='телефон';

echo "<pre>";
print_r($camera);
echo "</pre>";

foreach($camera as $key => $value) {
    foreach($value as $key2 => $value2) {
        foreach($value2 as $key3 => $value3) {
            echo $value3.'<br>';
        }
    }
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
    
    
</body>
</html>
