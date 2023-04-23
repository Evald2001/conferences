<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_name')->insert([
            [
                'name' => 'Bussines and money',
                'date' => '2022-01-01',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'location' => 'New York, NY'
            ],
            [
                'name' => 'Tourism and money',
                'date' => '2022-08-01',
                'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'location' => 'Los Angeles, CA'
            ],
            [
                'name' => 'IT and money',
                'date' => '2022-04-01',
                'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'location' => 'San Francisco, CA'
            ],
            [
                'name' => 'Rap and money',
                'date' => '2022-02-012',
                'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'location' => 'New York, NY'
            ]
            ]);
    }
}
