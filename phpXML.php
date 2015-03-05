<?php 
currentTime();
$kbyiXML = insideTheXML("kbyifeed");
$kbyrXML = insideTheXML("kbyrfeed");
$byuiXML = insideTheXML("byuifeed");

function insideTheXML($fileName) {

   $xml =simplexml_load_file("xml/".$fileName.".xml");
   
   echo "<h1>".$fileName."</h1>";
   
   foreach($xml->children() as $child) {
     echo $child->getName() . ": " . $child . "<br>";
   }

   playedTime($xml, $fileName);
}

function currentTime() {
   $epoch = time();
   echo "<h2>Local Time</h2>The epoch number of the current time is: ".$epoch." <br>";
   echo date('r', $epoch)." Local Time<br>"; // output as RFC 2822 date - returns local time
   echo gmdate('r', $epoch)." GMT/UTC Time<br>"; // returns GMT/UTC time
}

function playedTime($xml, $fileName) {
   echo "<h2>".$fileName." Played Time</h2>";
   $epoch2 = ($xml->air_time / 1000) + strtotime(date("Y/n/j"));
   echo "The epoch number of the played time is: ".$epoch2." <br>";
   echo date('r', $epoch2)." Local Time<br>"; // output as RFC 2822 date - returns local time
   echo gmdate('r', $epoch2)." GMT/UTC Time<br>"; // returns GMT/UTC time
}