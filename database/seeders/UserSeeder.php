<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{

    private function createUser($id, $roleId)
    {
        DB::table('users')->insert([
            'id' => $id,
            'username' => Str::random(10),
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'age' => date('Y-m-d'),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => $roleId,
        ]);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($index = 1; $index <= 12; $index++) {
            if ($index <= 8)
                $this->createUser($index, 3);
            elseif ($index <= 11)
                $this->createUser($index, 2);
            else
                $this->createUser($index, 1);
        }
    }
}
