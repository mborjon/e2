<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
        'choice' => 'varchar(8)',
        'winner' => 'tinyint(1)', #1, 0
        'time' => 'timestamp'
]);
    }

    public function seed()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

        # Use a loop to create 10 past rounds
        for ($i = 0; $i < 10; $i++) {
            $moves = ['1', '2', '3', '4', '5', '6'];
            $randomMove = array_rand($moves);


            # Set up a round
            $round = [
        'choice' => $moves[$randomMove],
        'winner' => rand(0, 1),
        'time' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
    ];

            # Insert the round
            $this->app->db()->insert('rounds', $round);
        }
    }
}