<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(RoleEnum::cases() as $forEnum){

            Role::create([
                'name' => $roleEnum->value(),
            ]);

        }
    }
}
