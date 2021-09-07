<?php

//readfile('text.txt');

// $myText = "Записываю эту строку в файл";
// $file = fopen('text.txt', 'w');
// fwrite($file, $myText);
// fclose($file);
// readfile('text.txt');

// $handle = fopen('text.txt', 'r');

// if($handle) {
//     while (($line = fgets($handle)) !== false) {
//         echo $line;
//     }
//     fclose($handle);
// }
// $file = fopen("text2.txt", "w");
// fclose($file);
$file = file_get_contents('https://ua.sinoptik.ua/%D0%BF%D0%BE%D0%B3%D0%BE%D0%B4%D0%B0-%D1%87%D0%B5%D1%80%D1%87%D0%B5/2021-08-31');
echo $file;
?>