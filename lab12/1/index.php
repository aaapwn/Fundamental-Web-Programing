<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $file = file_get_contents("http://10.0.15.21/lab/lab12/restapis/10countries.json");
    $data = json_decode($file, true);

    foreach ($data as $country) {
        echo "<div style='display: grid; grid-template-columns: 1fr 1fr' >";
        echo "<div>";
        echo "<strong>Country: " . $country['name'] . "</strong><br>";
        echo "Capital: " . $country['capital'] . "<br>";
        echo "Population: " . $country['population'] . "<br>";
        echo "Region: " . $country['region'] . "<br>";
        echo "Location: " . $country['latlng'][0] . " , " . $country['latlng'][1] . "<br>";
        echo "Border: ";
        foreach ($country['borders'] as $border) {
            echo $border . " ";
        }
        echo "<br><br>";
        echo "</div>";
        echo "<img src=" . $country['flag'] . " style='width: 200px; height: 100px;'>";
        echo "</div>";
    }
    ?>
</body>

</html>
