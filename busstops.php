<?php
/**
* Hämta data om närmsta hållplatser från min "studio" på trafiklab (SL)
*
* PHP version 7
* @category   Slutuppgift
* @author     Lina Norberg
* @license    PHP CC
* @link
* API-dok     https://www.trafiklab.se/api/sl-narliggande-hallplatser/dokumentation
* API-nyckel  5a04359da47042b7837f88a5c61908c9
*/
?>

<?php
// Inställningar
$SVAR = 50;
$RADIUS = 1000;

// Ta emot POST-data och validera
$lat = 59.241441;
$lng = 18.502330;

if ($lat && $lng) {

    // Adress till tjänsten
    $url = "http://api.sl.se/api2/nearbystops.json?key=5a04359da47042b7837f88a5c61908c9&originCoordLat=$lat&originCoordLong=$lng&maxresults=$SVAR&radius=$RADIUS";

    // Hämta data och avkoda JSON-formatet
    $contents = file_get_contents($url);
    $stopData = json_decode($contents);
    $stops = $stopData->LocationList->StopLocation;
    //print_r($stops);

    $markers = "[";

    // Plocka ut all hållplatser och spara
    foreach ($stops as $stop) {
        $markers .= "['$stop->name', $stop->lat, $stop->lon],\n";
    }
    $markers = substr($markers, 0, -2) . "]";

    // Skapa Javascript svaret
    echo "function initMap() {
            var bounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10
            });\n";
    echo "var markers = $markers;\n";
    echo "for (i = 0; i < markers.length; i++) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0]
            });
        }\n
        map.fitBounds(bounds);\n
    }\n
    initMap();";
}
