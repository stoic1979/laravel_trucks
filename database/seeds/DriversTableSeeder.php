<?php

use Illuminate\Database\Seeder;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('driver')->delete();
 
        $customers = array(
            [
            'id'            	 => 1, 
            'name'          	 => 'Davinder Singh', 
            'social_security_no' => 'SSN00001', 
            'user_id'       	 => 1, 
            'mobile_number' 	 => '+91-6776543234', 
            'email'         	 => 'dsingh@gmail.com', 
            'address'       	 => '#44, Tali Mahalla', 
            'state'         	 => 'Punjab', 
            'country'       	 => 'India', 
            'created_at'    	 => new DateTime, 
            'updated_at'    	 => new DateTime
            ],
            [
            'id'            	 => 2, 
            'name'          	 => 'Rajan Sharma', 
            'social_security_no' => 'SSN00002', 
            'user_id'            => 1, 
            'mobile_number'      => '+91-7869543233', 
            'email'              => 'rajasharma@gmail.com', 
            'address'            => '#47, Gali no. 3', 
            'state'              => 'Haryana', 
            'country'            => 'India', 
            'created_at'         => new DateTime, 
            'updated_at'         => new DateTime
            ]
        );
 
        DB::table('driver')->insert($customers);
    }
}
