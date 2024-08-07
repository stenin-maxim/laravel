<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\RoleEnum;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            ['name' => RoleEnum::ADMIN, 'created_at' => now()],
            ['name' => RoleEnum::EDITOR, 'created_at' => now()],
            ['name' => RoleEnum::USER, 'created_at' => now()],
        ]);
    }
}
