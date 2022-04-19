<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
              'name' => 'I Am Admin',
              'email' => 'sabaiav.th@gmail.com',
              'password' => bcrypt('sabai14298000'),
              'code_user' => 'UD123456',
              'avatar' => '1483537975.png',
              'email_verified_at' => '2020-08-01 14:27:38',
              'provider' => 'email',
              'phone' => '0987299601',
              'is_admin' => 1
            ],
            [
              'name' => 'kim kundad',
              'email' => 'kim.kundad@gmail.com',
              'password' => bcrypt('kim14298'),
              'code_user' => 'UD123456',
              'avatar' => '1483537975.png',
              'email_verified_at' => '2020-08-01 14:27:38',
              'provider' => 'email',
              'phone' => '08000000',
              'is_admin' => 1
            ]
        ]);
    }
}
