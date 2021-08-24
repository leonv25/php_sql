<?php

    function insert($name, $desc, $year, $rating, $poster, $add_date, $category_id) {
        $mysqli = new mysqli("localhost", "root", "", "kinomonster");
        if(mysqli_connect_errno()) {
            printf ("Соединение не установлено", mysqli_connect_error());
            exit();
        };

        $mysqli->set_charset('utf8');

        $query = "INSERT INTO movi VALUES(null, '$name', '$desc', '$year', '$rating', '$poster', Now(), '$category_id')";
        $result = false;
        if($mysqli->query($query)) {
            $result = true;
        }
        return $result;
    }
    
    $xml = simplexml_load_file("xml/movies.xml") or die("Error: Cannot create object");
    echo count($xml).'<br>';

    foreach ($xml as $movie_key => $movie) {
        echo $movie -> title_russian.'<br>';
    }



    echo "<pre>";
    print_r($xml);
    echo "</pre>";

?>