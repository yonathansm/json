<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/c16c316297546f83/conditions/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $kota = $parsed_json->{'current_observation'}->{'display_location'}->{'city'};
  $negara = $parsed_json->{'current_observation'}->{'display_location'}->{'state_name'};
  $kodepos = $parsed_json->{'current_observation'}->{'display_location'}->{'zip'};
  
  echo "Kota <b>${kota}</b> salah satu kota di Negara <b>${negara}</b> dan mimiliki Kode Pos <b>${kodepos}</b>  ";
?>
<p>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/c16c316297546f83/geolookup/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $latitude = $parsed_json->{'location'}->{'lat'};
  $longitude = $parsed_json->{'location'}->{'lon'};
  $timezone = $parsed_json->{'location'}->{'tz_long'};
  
  echo "Informasi Geolookup San_Francisco :  <br>
  Latitude : ${latitude}<br>
  Longitude : ${longitude} <br>
  Zona Waktu : ${timezone}";

?>
<p>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/c16c316297546f83/almanac/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $ac = $parsed_json->{'almanac'}->{'airport_code'};
  $f = $parsed_json->{'almanac'}->{'temp_high'}->{'normal'}->{'F'};
  $c = $parsed_json->{'almanac'}->{'temp_high'}->{'normal'}->{'C'};
    echo "Di San Francisco memiliki almanac sebagai berikut :<br>
  Airport Code : ${ac}<br>
  Suhu Fahrenheit : ${f}<sup>o</sup><br>
  Suhu Celcius : ${c}<sup>o</sup>";
?>