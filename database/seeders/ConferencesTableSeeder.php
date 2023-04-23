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
        DB::table('conferences')->insert([
            [
                'Name' => 'Bussines and money',
                'Date' => '2022-01-01',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'Location' => 'New York, NY'
            ],
            [
                'Name' => 'Tourism and money',
                'Date' => '2022-08-01',
                'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'Location' => 'Los Angeles, CA'
            ],
            [
                'Name' => 'IT and money',
                'Date' => '2022-04-01',
                'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'Location' => 'San Francisco, CA'
            ],
            [
                'Name' => 'Rap and money',
                'Date' => '2022-02-012',
                'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'Location' => 'New York, NY'
            ]
            ]);
        DB::table('users')->insert([
            [
                'name' => 'AAA',
                'email' => 'a@a.com',
                'password' => 'a'
            ],

        ]);
    }
}
