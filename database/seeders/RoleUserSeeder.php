<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoleUser;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoleUser::insert([
            ['role_id' => 1, 'user_id' => 1, 'created_at' => now()],
            ['role_id' => 2, 'user_id' => 2, 'created_at' => now()],
            ['role_id' => 3, 'user_id' => 3, 'created_at' => now()],
            ['role_id' => 1, 'user_id' => 4, 'created_at' => now()],
            ['role_id' => 2, 'user_id' => 5, 'created_at' => now()],
            ['role_id' => 3, 'user_id' => 6, 'created_at' => now()],
            ['role_id' => 1, 'user_id' => 7, 'created_at' => now()],
            ['role_id' => 2, 'user_id' => 8, 'created_at' => now()],
            ['role_id' => 3, 'user_id' => 9, 'created_at' => now()],
            ['role_id' => 1, 'user_id' => 10, 'created_at' => now()],
            ['role_id' => 2, 'user_id' => 11, 'created_at' => now()],
            ['role_id' => 3, 'user_id' => 12, 'created_at' => now()],
            ['role_id' => 1, 'user_id' => 13, 'created_at' => now()],
            ['role_id' => 2, 'user_id' => 14, 'created_at' => now()],
            ['role_id' => 3, 'user_id' => 15, 'created_at' => now()],
            ['role_id' => 1, 'user_id' => 16, 'created_at' => now()],
            ['role_id' => 2, 'user_id' => 17, 'created_at' => now()],
            ['role_id' => 3, 'user_id' => 18, 'created_at' => now()],
            ['role_id' => 1, 'user_id' => 19, 'created_at' => now()],
            ['role_id' => 2, 'user_id' => 20, 'created_at' => now()],
            ['role_id' => 3, 'user_id' => 1, 'created_at' => now()],
            ['role_id' => 1, 'user_id' => 2, 'created_at' => now()],
            ['role_id' => 2, 'user_id' => 3, 'created_at' => now()],
            ['role_id' => 3, 'user_id' => 4, 'created_at' => now()],
            ['role_id' => 1, 'user_id' => 5, 'created_at' => now()],
        ]);

        // RoleUser::factory()
        //     ->count(30)
        //     ->create();
    }
}
