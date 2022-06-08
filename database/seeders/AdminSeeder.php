<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'      => 'Admin',
                'role_id'   => 1,
                'email'     => 'admin@test.com',
                'password'  => Hash::make('adminpassword'),
            ],
            [
                'name'      => 'HR',
                'role_id'   => 2,
                'email'     => 'hr@test.com',
                'password' => Hash::make('hrpassword'),
            ],
            [
                'name'      => 'Employee',
                'role_id'   => 3,
                'email'     => 'employee@test.com',
                'password' => Hash::make('employeepassword'),
            ],
            [
                'name'      => 'User',
                'role_id'   => 4,
                'email'     => 'user@test.com',
                'password' => Hash::make('userpassword'),
            ],
        ];
        foreach($users as $user) {
            User::create($user);
        }
    }
}
