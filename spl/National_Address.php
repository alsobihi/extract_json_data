<?php
/**
 *
 * https://developer.wathq.sa/ar/api/17#/
 * 
 *  */ 

$json_url = "National_Address.json";
$data = file_get_contents($json_url);
$data = json_decode($data, false);


foreach ($data[0] as $key => $value) {
    # code...

    echo "<b>";
    echo $key;
    echo ":</b> ";
    echo $value;
    echo "<br>";
}

?>
