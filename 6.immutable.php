<?php

$newDate = null;
$date = new DateTimeImmutable("2021-04-30");
$newDate = $date->add(new DateInterval('P1D'));
printf("%s \n%s \n\n", $date->format('Y-m-d'), $newDate->format('Y-m-d'));

$date->add(new DateInterval('P5D'));
$newDate = $date->add(new DateInterval('P5D'));
printf("%s \n%s \n\n", $date->format('Y-m-d'), $newDate->format('Y-m-d'));

$date->add(new DateInterval('P5D'));
$newDate = $date->add(new DateInterval('P7D'));
printf("%s \n%s \n\n", $date->format('Y-m-d'), $newDate->format('Y-m-d'));
