<?php

$serverName = "localhost";
$username = "root";
$password = "admin";
$databaseName = "locations_example";

$connection = mysqli_connect("localhost", "pictusc5_ptt", "rE3dc0m2017!", "pictusc5_ptt_rea_giordano");
if (!$connection)  die("Connection failed: " . mysqli_connect_error());

if( !empty( $_POST["optimized_loading"] ) ){
    $queryData = mysqli_query( $connection, "SELECT id, title, latitude, longitude, address, marker_image FROM items WHERE latitude <= " . $_POST["north_east_lat"] . " AND latitude >= " . $_POST["south_west_lat"] . " AND longitude <=" . $_POST["north_east_lng"] . " AND longitude >= " .$_POST["south_west_lng"] );
}
else {
    $queryData = mysqli_query( $connection, "SELECT id, title, latitude, longitude, address, marker_image FROM items" );
}

//$data = mysqli_fetch_array( $queryData, MYSQLI_ASSOC );

$data = [];
while ($row = $queryData->fetch_assoc()) {
    $data[] = $row;
}

//while ($data = mysqli_fetch_array($queryData, MYSQLI_ASSOC)) {

  //  printf("$data");
  //  printf("'id': '$data["id"]', title: %s latitude: %s  longitude: %s", $data["title"], $data["latitude"], $data["longitude"]);
   // printf[{"id":"$data["id"]","title":"$data["title"]","latitude":"$data["latitude"]","longitude":"$data["longitude"]","address":"$data["address"]","marker_image":"$data["marker_image"]"}
//}

mysqli_close($connection);

// Data for map markers

echo( json_encode($data) );