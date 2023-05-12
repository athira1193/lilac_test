<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Seeder;
use App\Models\Department;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            ['name' => 'Sales and Marketing'],
            ['name' => 'Application Development']
        ];
        foreach ($departments as $arr) {
            Department::updateOrCreate(
                [
                    "name" => $arr["name"],
                ]
            );
        }

    }
}
