# FakerKH​ for PHP

FakerKH is a PHP library for generating fake Khmer data.
Use this library to create random addresses, names, quotes, and more in Khmer language. 
Use this library for Khmer word dummy data seeder in you Laravel Application.

## Installation

```bash
composer require panhareach/faker-kh
```

## Usage

In your application, import the FakerKH class and use its methods to generate fake data.

```php
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
```

## Methods

- `address(): string` Generate a random address.
- `city(): string` Generate a random city name.
- `firstName(): string` Generate a random Khmer first name.
- `lastName(): string` Generate a random Khmer last name.
- `day(): string` Generate a random Khmer day.
- `year(): string` Generate a random Khmer year.
- `date(): string` Generate a random Khmer date.
- `province(): string` Generate a random Khmer province.
- `country(): string` Generate a random Khmer Country.
- `month(): string` Generate a random Khmer month name.
- `sentence(): string` Generate a random Khmer sentence.
- `tel(): string` Generate a random Khmer telephone number.
- `title(): string` Generate a random Khmer title - honorific.
- `paragraph(sentenceCount = 3): string` Generate a random Khmer paragraph. Default sentence count is 3.
- `fullName(): string` Generate a random Khmer Full Name.
- `animal(): string` Generate a random Khmer animal.
- `fullnameWithTitle()` Generate a random Khmer Full Name with title
- More to come :)
