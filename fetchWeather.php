<?php
require_once('db.php');

if($_POST['city']){
$apiKey = "190079b6c22e7eddca311a70c0a12cea";
$city = $_POST['city'];
$apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&type=accurate&appid=".$apiKey;

$weatherInfo=hitWeatherApi($apiUrl);

$weatherInfoArr = json_decode($weatherInfo, true);
if($weatherInfoArr['cod'] == "200"){
    $weatherdata = $weatherInfoArr['weather'][0]['description'];
    $tempInF = intval($weatherInfoArr['main']['temp']* 9/5 - 459.67);        
    $speedInMPH = intval($weatherInfoArr['wind']['speed']*2.24);
    $weather = "CITY NAME : ".$city."<br> WEATHER : ".$weatherdata;    
    $weather .="<br> Temperature : ".$tempInF."&deg; F <br> WIND SPEED : ".$speedInMPH." MPH.";

    //CODE FOR STORING WEATHER DATA IN DATABASE. 

    $instance = ConnectDb::getInstance();
    $conn = $instance->getConnection();

    $sql = "INSERT INTO weatherinfo (cityname, weather, temp,wind) VALUES ('".$city."', '".$weatherdata."', '".$tempInF."','".$speedInMPH."')";
    $db_insert = mysqli_query($conn, $sql);
    if (!$db_insert) {
        die("Database insert failed: " .$conn->connect_error);
      }

        echo $weather;
}else{

    echo "Invalid City..";

}

}


function hitWeatherApi($apiUrl){
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
    };

?>