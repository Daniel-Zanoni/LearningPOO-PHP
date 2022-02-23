<?php

require "Vehicle.php";

$vehicleCarro = new Vehicle();
$vehicleCarro->name = 'Civic';
$vehicleCarro->type = 'Carro';
$vehicleCarro->brand = 'Honda';

$vehicleBus = new Vehicle();
$vehicleBus->name = 'Volari';
$vehicleBus->type = 'Bus';
$vehicleBus->brand = 'Mercedes';

$vehicleCarro->turnsOn();
$vehicleBus->turnsOn();