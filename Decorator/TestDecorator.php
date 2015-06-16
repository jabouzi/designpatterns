<?php

include_once('Disk.php');
include_once('Monitor.php');
include_once('CD.php');

$computer = new Computer();

$computer = new Disk($computer);
//$computer = new Monitor($computer);
//$computer = new CD($computer);
//$computer = new CD($computer);

echo $computer->description()."\n";
