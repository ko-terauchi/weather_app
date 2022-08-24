<?php

$pref = "Tokyo";
$API_KEY = config('services.openweathermap.key');
$base_url_F = config('services.openweathermap.urlF');
$urlF = "$base_url_F?units=metric&q=$pref&APPID=$API_KEY";

$forecast = json_decode(file_get_contents($urlF), true);

function convert($main){
	switch($main){
			case 'Clear':
				return "晴れ<img src=http://openweathermap.org/img/w/01d.png>";
				break;
			case 'Clouds':
				return "曇<img src=http://openweathermap.org/img/w/03d.png>";
				break;
			case 'Rain':
				return "雨<img src=http://openweathermap.org/img/w/04d.png>";
				break;
			default:
				echo $main;
		}
}

echo "<b>" . $pref . "</b><br>";
$list = $forecast["list"];

echo "<table class=\"table1\">";
echo "<tr>";

$i = 1;
foreach($list as $value){
    $date = $value["dt_txt"];
    $tempMax = $value["main"]["temp_max"];
    $tempMin = $value["main"]["temp_min"];
    $pressure = $value["main"]["pressure"];
	echo "<td>";
    echo date('n月j日 H時', strtotime($date)) . "<br>";
	echo convert($value["weather"][0]["main"]) . "<br>";
	echo "最高気温 : " . ($tempMax) . "°<br>";
    echo "最低気温 : " . ($tempMin) . "°<br>";
    echo "降水確率" . ($value["pop"]*100) . "%<br>";
    echo "気圧 : " . ($pressure) . "hPa<br>";
	echo "湿度 : " . $value["main"]["humidity"] . "%<br>";
	echo "風速 : " . $value["wind"]["speed"] . "m<br><br>";
	echo "</td>";
	if($i % 8 == 0){
	echo "</tr><tr>";
	}
	$i++;

}


echo "</tr>";
echo "</table>";
?>

<style>
.table1 td {
	width: auto;
	height: 260px;
	vertical-align: top;
}
</style>