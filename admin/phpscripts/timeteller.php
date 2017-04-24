<?php

$hour = date('H');

if ($hour >= 4 && $hour < 12) {
  $greeting = "good morning";
}

if($hour >=12 && $hour < 17) {
    $greeting = "good afternoon";
  }

  if($hour >=17 && $hour < 24 or $hour >=0 && $hour < 4) {
    $greeting = "good evening";

  }



 ?>
