<?php

$city=$_GET['city'];

$city=str_replace(" ", "", $city);

$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

preg_match('/3 Day Weather Forecast Summary:(.*?)<span class="phrase">(.*?)</s', $contents, $matches); // <span class="phrase" found by element inspection on weather-forecast.com.

echo $matches[2];
?>