<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = [
            ["name"=>"John doe","phone_number"=>"9876543210","dept_id"=>1,"desig_id"=>1],
            ["name"=>"Tommy Mark","phone_number"=>"9875263102","dept_id"=>2,"desig_id"=>2],
            ["name"=>"Olive Yew","phone_number"=>"7845963250","dept_id"=>2,"desig_id"=>2]
        ];
        foreach ($user as $arr) {
            User::updateOrCreate([
            "name" => $arr["name"],
            "phone_number"=> $arr["phone_number"],
            "dept_id" => $arr["dept_id"],
            "desig_id"=> $arr["desig_id"]
            ]);
        }
    }
}
