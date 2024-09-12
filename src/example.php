<?php

require_once __DIR__ . '/../vendor/autoload.php';
// Example usage:
use Core\FakerKH;

$faker = new FakerKH();

echo "Random firstname: " . $faker->firstname() . PHP_EOL;
echo "Random lastname: " . $faker->lastname() . PHP_EOL;
echo "Random fullname: " . $faker->fullname() . PHP_EOL;
echo "Random fullname with title: " . $faker->fullnameWithTitle() . PHP_EOL;
echo "Random address: " . $faker->address() . PHP_EOL;
echo "Random telephone number: " . $faker->tel() . PHP_EOL;
echo "Random sentence: " . $faker->sentence() . PHP_EOL;
echo "Random paragraph: " . $faker->paragraph() . PHP_EOL;
echo "Random title: " . $faker->title() . PHP_EOL;
echo "Random day: " . $faker->day() . PHP_EOL;
echo "Random month: " . $faker->month() . PHP_EOL;
echo "Random year: " . $faker->year() . PHP_EOL;
echo "Random date: " . $faker->date() . PHP_EOL;
echo "Random city: " . $faker->city() . PHP_EOL;
echo "Random province: " . $faker->province() . PHP_EOL;
echo "Random country: " . $faker->country() . PHP_EOL;
echo "Random animal: " . $faker->animal() . PHP_EOL;
echo "Random unit: " . $faker->unit() . PHP_EOL;
echo "Random currency: " . $faker->currency() . PHP_EOL;
echo "Random vegetable: " . $faker->vegetable() . PHP_EOL;
echo "Random fruit: " . $faker->fruit() . PHP_EOL;
// More to come :)