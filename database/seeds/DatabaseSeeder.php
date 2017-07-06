<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;
use App\News;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factory = Factory::create();

        for ($i = 0; $i < 3; $i++) {
            User::create([
                'code' => $factory->userName,
                'name' => $factory->name,
                'signature' => $factory->sentence(3),
            ]);
        }

        for ($i = 0; $i < 5; $i++) {
            News::create([
                'title' => $factory->sentence(6),
                'content' => $factory->text,
                'summary' => $factory->sentence(10),
                'userId' => $factory->randomElement([1, 2, 3]),
                'posted' => 1,
                'publishedAt' => $factory->dateTime(),
            ]);
        }

        for ($i = 0; $i < 5; $i++) {
            News::create([
                'title' => $factory->sentence(6),
                'content' => $factory->text,
                'summary' => $factory->sentence(10),
                'userId' => $factory->randomElement([1, 2, 3]),
            ]);
        }
    }
}
