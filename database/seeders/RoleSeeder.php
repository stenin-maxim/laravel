<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            ['name' => 'Администратор', 'created_at' => now()],
            ['name' => 'Редактор', 'created_at' => now()],
            ['name' => 'Пользователь', 'created_at' => now()],
        ]);
    }
}
