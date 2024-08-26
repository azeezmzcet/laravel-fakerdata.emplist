<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\UsertableModal;

class Roleseerder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UsertableModal::factory(1000)->create();
    }
}
