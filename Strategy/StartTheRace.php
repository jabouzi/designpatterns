<?php

include('StreetRacer.php');
include('FormulaOne.php');
include('Helicopter.php');
include('Jet.php');

$streetRacer = new StreetRacer();
$formulaOne = new FormulaOne();
$helicopter = new Helicopter();
$jet = new Jet();

$streetRacer->go();
$formulaOne->go();
$helicopter->go();
$jet->go();
