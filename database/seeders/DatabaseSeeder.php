<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Product;
use Database\Factories\CountryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $continents = [
            ['id' => 1, 'name' => 'Europe',],
            ['id' => 2, 'name' => 'Asia',],
            ['id' => 3, 'name' => 'Africa',],
            ['id' => 4, 'name' => 'South America',],
            ['id' => 5, 'name' => 'North America',],
        ];        
        foreach ($continents as $continent) {
            \App\Models\Continent::factory()->create($continent)
                ->each(function ($c) {
                    $c->countries()->saveMany(Country::factory(10)->make());
                });;
        }

        DB::table('test_matts')->insert(['SessionID' => 1,'GroupID' => 'a','UserID' => 'Rob']);
        DB::table('test_matts')->insert(['SessionID' => 1,'GroupID' => 'a','UserID' => 'Matt']);
        DB::table('test_matts')->insert(['SessionID' => 1,'GroupID' => 'b','UserID' => 'Jack']);        
        DB::table('test_matts')->insert(['SessionID' => 1,'GroupID' => 'b','UserID' => 'Matt']);
        DB::table('test_matts')->insert(['SessionID' => 1,'GroupID' => 'c','UserID' => 'Luke']);
        DB::table('test_matts')->insert(['SessionID' => 1,'GroupID' => 'c','UserID' => '1111']);
        DB::table('test_matts')->insert(['SessionID' => 1,'GroupID' => 'd','UserID' => 'Rob']);        
        DB::table('test_matts')->insert(['SessionID' => 1,'GroupID' => 'd','UserID' => '2222']);


        DB::table('test_matts')->insert(['SessionID' => 2,'GroupID' => 'a','UserID' => 'Rob']);
        DB::table('test_matts')->insert(['SessionID' => 2,'GroupID' => 'b','UserID' => 'Matt']);
        DB::table('test_matts')->insert(['SessionID' => 2,'GroupID' => 'b','UserID' => 'Jack']);
        DB::table('test_matts')->insert(['SessionID' => 3,'GroupID' => 'a','UserID' => 'Rob']);
        DB::table('test_matts')->insert(['SessionID' => 3,'GroupID' => 'b','UserID' => 'Jack']);
        DB::table('test_matts')->insert(['SessionID' => 4,'GroupID' => 'C','UserID' => 'Mick']);
        



        Product::factory(100)->create();
    }
}
