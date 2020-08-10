<?php

$data = file_get_contents('https://api.coronatracker.com/v3/stats/worldometer/country');
$coronadata = json_decode($data);


echo"<pre>";
print_r($coronadata);

?>