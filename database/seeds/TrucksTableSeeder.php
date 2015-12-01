<?php

use Illuminate\Database\Seeder;

class TrucksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('truck')->delete();
 
        $trucks = array(
            [
            'id'            => 1, 
            'user_id'       => 1,
            'make'          => 'Nissan', 
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
            ],
            [
            'id'            => 2,
            'user_id'       => 1, 
            'name'          => 'Mahindra',  
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
            ]
        );
 
        DB::table('truck')->insert($trucks);
    }
}
