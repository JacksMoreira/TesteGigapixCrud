<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jackson Michael',
            'email' => 'jackskennedy8@gmail.com',
            'password' => bcrypt('HelloWorld')
        ]);
    }
}
