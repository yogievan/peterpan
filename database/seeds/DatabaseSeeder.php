<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $userData =[
            [
                'name' =>'ASDOS UKDW',
                'username' => 'asdos',
                'role' => 'asdos',
                'password' => bcrypt('123'),
            ],
            [
                'name' =>'DOSEN UKDW',
                'username' => 'dosen',
                'role' => 'dosen',
                'password' => bcrypt('123'),
            ],
            [
                'name' =>'BIRO UKDW',
                'username' => 'biro',
                'role' => 'biro',
                'password' => bcrypt('123'),
            ],
        ];
        
        // foreach($userData as $val){
        //     DB::table('users')->insert($val);
        // }
        foreach($userData as $val){
            User::create($val);
        }
    }
}
