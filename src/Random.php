<?php

require '../vendor/autoload.php';

use Faker\Factory;

class Random {
    public function generateRecords($count = 300) {
        $faker = Factory::create('en_PH');
        $persons = [];

        for ($i = 0; $i < $count; $i++) {
            $persons[] = [
                $faker->uuid,
                $faker->title,
                $faker->firstName,
                $faker->lastName,
                $faker->streetAddress,
                $faker->barangay,
                $faker->city,
                $faker->province,
                $faker->country,
                $faker->phoneNumber,
                $faker->e164PhoneNumber,
                $faker->company,
                $faker->url,
                $faker->jobTitle,
                $faker->safeColorName,
                $faker->date,
                $faker->email,
                $faker->password,
            ];
        }

        return $persons;
    }
}

?>
