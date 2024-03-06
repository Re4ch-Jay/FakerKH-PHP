<?php

namespace Core;

/**
 * Class FakerKH
 *
 * A simple utility class for generating fake data.
 *
 * @package Core
 */
class FakerKH
{

    /**
     * Get a random element from the given array.
     *
     * @param array $wordList An array of words.
     * @return mixed Random element from the array.
     */
    private function getRandomElement(array $wordList)
    {
        $randomIndex = rand(0, sizeof($wordList) - 1);
        return $wordList[$randomIndex];
    }

    /**
     * Generate a random first name.
     *
     * @return string Random first name.
     */
    public function firstname(): string
    {
        return $this->getRandomElement(Word::$firstnameList);
    }

    /**
     * Generate a random last name.
     *
     * @return string Random last name.
     */
    public function lastname(): string
    {
        return $this->getRandomElement(Word::$lastnameList);
    }

    /**
     * Generate a random fullname name.
     *
     * @return string Random full name.
     */
    public function fullname(): string
    {
        return $this->lastname() . ' ' . $this->firstname();
    }

    /**
     * Generate a random fullname name with title.
     *
     * @return string Random full name with title.
     */
    public function fullnameWithTitle(): string
    {
        return $this->title() . ' ' . $this->lastname() . ' ' . $this->firstname();
    }

    /**
     * Generate a random address.
     *
     * @return string Random address.
     */
    public function address(): string
    {
        $randomIndex = array_rand(Word::$addressList);
        $randomAddress = Word::$addressList[$randomIndex];

        // Extract specific fields
        $street = $randomAddress['street'];
        $city = $randomAddress['city'];
        $country = $randomAddress['country'];

        return $street . ' ' . $city . ' ' . $country;
    }


    /**
     * Generate a random telephone number.
     *
     * @return string Random telephone number.
     */
    public function tel(): string
    {
        return $this->getRandomElement(Word::$telList);
    }

    /**
     * Generate a random sentence.
     *
     * @return string Random sentence.
     */
    public function sentence(): string
    {
        return $this->getRandomElement(Word::$sentenceList);
    }


    /**
     * Generate a random paragraph.
     *
     * @param int $numberSentences Number of sentences in the paragraph (default: 3).
     * @return string Random paragraph.
     */
    public function paragraph($sentenceCount = 3): string
    {
        $paragraph = '';

        for ($i = 0; $i < $sentenceCount; $i++) {
            $paragraph .= $this->getRandomElement(Word::$sentenceList);

            // Add a space between sentences (you can customize as needed)
            $paragraph .= ' ';
        }

        return rtrim($paragraph);
    }

    /**
     * Generate a random title.
     *
     * @return string Random title.
     */
    public function title(): string
    {
        return $this->getRandomElement(Word::$titleList);
    }

    /**
     * Generate a random day.
     *
     * @return string Random day.
     */
    public function day(): string
    {
        return $this->getRandomElement(Word::$dayList);
    }

    /**
     * Generate a random month.
     *
     * @return string Random month.
     */
    public function month(): string
    {
        return $this->getRandomElement(Word::$monthList);
    }

    /**
     * Generate a random year.
     *
     * @return string Random year.
     */
    public function year(): string
    {
        return $this->getRandomElement(Word::$yearList);
    }

    /**
     * Generate a random date.
     *
     * @return string Random date.
     */
    public function date(): string
    {
        return $this->day() . ' ' . $this->month() . ' ' . $this->year();
    }

    /**
     * Generate a random city.
     *
     * @return string Random city.
     */
    public function city(): string
    {
        $city = $this->getRandomElement(array_column(Word::$addressList, 'city'));
        return 'ក្រុង' . $city;
    }

    /**
     * Generate a random province.
     *
     * @return string Random province.
     */
    public function province(): string
    {
        $province = $this->getRandomElement(array_column(Word::$addressList, 'province'));
        return $province;
    }

    /**
     * Generate a random country.
     *
     * @return string Random country.
     */
    public function country(): string
    {
        return $this->getRandomElement(Word::$countryList);
    }

    /**
     * Generate a random animal.
     *
     * @return string Random animal.
     */
    public function animal(): string
    {
        return $this->getRandomElement(Word::$animalList);
    }

    /**
     * Generate a random postal code.
     *
     * @return string Random postal code.
     */
    public function postalCode(): string
    {
        $postalCode = $this->getRandomElement(array_column(Word::$addressList, 'postalCode'));
        return $postalCode;
    }

    /**
     * Generate a random unit.
     *
     * @return string Random unit.
     */
    public function unit(): string
    {
        return $this->getRandomElement(Word::$units);
    }

    /**
     * Generate a random currency.
     * @return string
     */
    public function currency(): string
    {
        return $this->getRandomElement(Word::$currencies);
    }

    /**
     * Generate a random vegetable.
     * @return string
     */
    public function vegetable(): string
    {
        return $this->getRandomElement(Word::$vegetables);
    }

    /**
     * Generate a random fruit.
     * @return string
     */
    public function fruit(): string
    {
        return $this->getRandomElement(Word::$fruits);
    }
}
