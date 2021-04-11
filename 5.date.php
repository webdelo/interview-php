<?php

$newDate = null;
$date = new DateTime("2021-04-30");
$newDate = $date->add(new DateInterval('P1D'));
printf("%s \n%s \n\n", $date->format('Y-m-d'), $newDate->format('Y-m-d'));

$date->add(new DateInterval('P5D'));
$newDate = $date->add(new DateInterval('P1D'));
printf("%s \n%s \n\n", $date->format('Y-m-d'), $newDate->format('Y-m-d'));

$date->add(new DateInterval('P5D'));
$newDate = $date->add(new DateInterval('P1D'));
printf("%s \n%s \n\n", $date->format('Y-m-d'), $newDate->format('Y-m-d'));