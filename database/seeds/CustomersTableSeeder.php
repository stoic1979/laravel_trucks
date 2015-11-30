<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->delete();
 
        $customers = array(
            [
            'id'            => 1, 
            'name'          => 'SK Gupta', 
            'firm_name'     => 'Palco Group', 
            'user_id'       => 1, 
            'mobile_number' => '+91-9876543210', 
            'email'         => 'weavebytes@gmail.com', 
            'address'       => '#9211, 12th street', 
            'state'         => 'Punjab', 
            'country'       => 'India', 
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
            ],
            [
            'id'            => 2, 
            'name'          => 'Fuji Yoshi', 
            'firm_name'     => 'Tranzas Inc', 
            'user_id'       => 1, 
            'mobile_number' => '+81-6459543210', 
            'email'         => 'fujiyoshi@gmail.com', 
            'address'       => '#7, Quuens Tower', 
            'state'         => 'Yokohama', 
            'country'       => 'Japan', 
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
            ]
        );
 
        DB::table('customer')->insert($customers);
    }
}
