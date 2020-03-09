<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'    => 'Bui Thi Hoa',
            'email'    => 'hoabui@gmail.com',
            'password'   =>  Hash::make('password'),
            'role'   =>  1,
            'remember_token' => rand(10, 10),
        ]);
    }
}
