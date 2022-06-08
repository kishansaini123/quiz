<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Admin', 'HR', 'Employee', 'User'];
        foreach($names as $name) {
            Role::create([
                'name' => $name
            ]);
        }
    }
}
