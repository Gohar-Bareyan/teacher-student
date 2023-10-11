<?php

namespace Database\Seeders;

use App\Models\Groups;
use App\Models\Students;
use App\Models\Teachers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teachers::factory(3)->has(
            Groups::factory(5)
                ->has(Students::factory(3))
        )->create();
    }
}
