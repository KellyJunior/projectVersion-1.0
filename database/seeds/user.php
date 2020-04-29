<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Remenber to take this like a comment in my work before
        DB::table('tblemployee')->insert([
            ['username' => 'steev',
            'emplCode' => '9008',
            'firstName' => 'jobs',
            'lastName' => 'djondo',
            'email' => 'jobs@gmail.com',
            'password' => Hash::make('Password'),
            'gender' => 'Masculin',
            'department' => 'Web',
            'address' => 'Shimla',
            'mobileNumber' => '8580527175',
            'dateOfBirth' => '1999/10/09',
            'role_id'=>'1'],
           ]);

           DB::table('tblemployee')->insert([
            ['username' => 'Don',
            'emplCode' => '9001',
            'firstName' => 'Doh',
            'lastName' => 'John',
            'email' => 'calme@gmail.com',
            'password' => Hash::make('Password'),
            'gender' => 'Masculin',
            'department' => 'Web',
            'address' => 'Shimla',
            'mobileNumber' => '8580527172',
            'dateOfBirth' => '1999/10/09',
            'role_id'=>'2'],
           ]);

           DB::table('tblemployee')->insert([
            ['username' => 'Doe',
            'emplCode' => '90012',
            'firstName' => 'Dohe',
            'lastName' => 'John',
            'email' => 'azerty@gmail.com',
            'password' => Hash::make('Password'),
            'gender' => 'Masculin',
            'department' => 'Web',
            'address' => 'Shimla',
            'mobileNumber' => '8580527372',
            'dateOfBirth' => '1999/10/09',
            'role_id'=>'3'],
           ]);
    }
}
