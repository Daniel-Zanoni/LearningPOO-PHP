<?php

declare(strict_types=1);

class Vehicle
{
  // Attributes 
  public string $name;
  public string $type;
  public string $brand;

  public function turnsOn(): void
  {
    echo 'Starting ' . $this->type;
  }

  public function turnsOff(): void
  {
    echo 'End ' . $this->type;
  }

  public function accelerator(): void
  {
    echo 'Accelerator ' . $this->type;
  }

  public function getName(): void
  {
    echo 'Name vehicle: ' . $this->name;
  }

  public function getBrand(): void
  {
    echo 'Brand of vehicle:' . $this->brand;
  }
}