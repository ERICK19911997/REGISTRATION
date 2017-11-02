<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        		'username' => 'admin',
        		'password' => Hash::make('admino'),
        ];
        User::create($user);
        //DB::table('users')->insert(['username' => , 'password' => ]);
    }
}
