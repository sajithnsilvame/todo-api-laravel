<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\UserRole;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get roles by their names
        $roles = UserRole::whereIn('role_name', ['super_admin', 'admin', 'manager', 'user'])->pluck('id', 'role_name');

        $users = [
            [
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'username' => 'superadmin',
                'mobile' => '1234567890',
                'role_id' => $roles['super_admin'] ?? null,
                'email' => 'superadmin@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'first_name' => 'System',
                'last_name' => 'Admin',
                'username' => 'admin',
                'mobile' => '1234567891',
                'role_id' => $roles['admin'] ?? null,
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'first_name' => 'Project',
                'last_name' => 'Manager',
                'username' => 'manager',
                'mobile' => '1234567892',
                'role_id' => $roles['manager'] ?? null,
                'email' => 'manager@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'first_name' => 'Normal',
                'last_name' => 'User',
                'username' => 'user',
                'mobile' => '1234567893',
                'role_id' => $roles['user'] ?? null,
                'email' => 'user@example.com',
                'password' => Hash::make('password123'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
