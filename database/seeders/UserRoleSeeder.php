<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['role_name' => 'super_admin', 'description' => 'Has full access to the system.'],
            ['role_name' => 'admin', 'description' => 'Manages users and settings.'],
            ['role_name' => 'manager', 'description' => 'Oversees specific departments.'],
            ['role_name' => 'user', 'description' => 'General system user with limited access.'],
        ];

        DB::table('user_roles')->insert($roles);
    }
}
