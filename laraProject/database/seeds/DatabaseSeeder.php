<?php

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
       DB::table('faqs')->insert([
       ['id'=>1,'domanda'=> "Domanda1?", 'risposta'=>"Risposta1"],
       ['id'=>2,'domanda'=> "Domanda2?", 'risposta'=>"Risposta2"]
       ]);    // $this->call(UsersTableSeeder::class);
    }
}
