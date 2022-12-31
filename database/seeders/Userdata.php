<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Userdata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administrator',
                'username' => 'admin1234',
                'level' => 1,
                'password' => bcrypt('12345')
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
