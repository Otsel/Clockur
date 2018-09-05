<?php

$date = new DateTime("now", new DateTimeZone('America/New_York') );
echo $date->format('H:i:s A');

// echo date("h:i:s A"); 

?>