<?php

//array
$drivers = [
    1 => ['name' => 'Verstappen', 'title' => 3],
    2 => ['name' => 'Hamilton', 'title' => 7],
];

var_dump($drivers);

//convertion from array to json
$driversJson = json_encode($drivers);

echo $driversJson;

//to create a file with json data, 
file_put_contents('./file.txt', $driversJson);

