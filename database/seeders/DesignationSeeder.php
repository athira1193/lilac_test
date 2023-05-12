<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Designation;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designations = [
            ['name' => 'Marketing Manager'],
            ['name' => 'Mobile Application Developer']
        ];
        foreach ($designations as $arr) {
            Designation::updateOrCreate(
                [
                    "name" => $arr["name"],
                ]
            );
        }

    }
}
