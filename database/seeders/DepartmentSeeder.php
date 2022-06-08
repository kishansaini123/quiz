<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Administrative', 'Frontend Developer', 'Backend Developer', 'Human Resource', 'Others'];
        foreach($names as $name) {
            Department::create([
                'name' => $name,
                'code' => Str::upper(Str::substr($name, 0, 3).Str::random(2))
            ]);
        }
    }
}
