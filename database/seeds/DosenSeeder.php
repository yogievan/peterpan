<?php

use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("dosen")->insert([
            [
                "username" => "argo",
                "password" => bcrypt("argo123"),
                "namalengkap" => "argowibowo",
                "alamat" => "klitren",
            ],
            [
                "username" => "wimmie",
                "password" => bcrypt("wimmie123"),
                "namalengkap" => "wimmiehandiwidjojo",
                "alamat" => "klitren",
            ],
            [
                "username" => "lussy",
                "password" => bcrypt("lussy123"),
                "namalengkap" => "lussyernawati",
                "alamat" => "klitren",
            ]
        ]);
    }
}
