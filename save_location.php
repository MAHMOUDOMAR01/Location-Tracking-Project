<?php
if (isset($_GET["lat"]) && isset($_GET["long"])) {
    $latitude = htmlspecialchars($_GET["lat"], ENT_QUOTES, 'UTF-8');
    $longitude = htmlspecialchars($_GET["long"], ENT_QUOTES, 'UTF-8');

    $my_file = fopen("location.txt", "w");

    $information = "Latitude: " . $latitude . "\nLongitude: " . $longitude;
    fwrite($my_file, $information);
    fclose($my_file);
} else {
    echo "No location data received.";
}
?>
