<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company')->delete();
 
        $companies = array(
            [
            'id'            => 1, 
            'title'         => 'Weavebytes Infotech Pvt Ltd', 
            'phone_number'  => '+91-0123456789', 
            'user_id'       => 1, 
            'mobile_number' => '+91-9876543210', 
            'email'         => 'weavebytes@gmail.com', 
            'registered_on' => new DateTime, 
            'address'       => '#9211, 12th street', 
            'state'         => 'Punjab', 
            'country'       => 'India', 
            'description'   => 'A software development company.', 
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
            ],
            [
            'id'            => 2, 
            'title'         => 'Simplifying Technologies Ltd', 
            'phone_number'  => '+91-7788456789', 
            'user_id'       => 1, 
            'mobile_number' => '+91-6459543210', 
            'email'         => 'weavebytes@gmail.com', 
            'registered_on' => new DateTime, 
            'address'       => '#9212, 12th street', 
            'state'         => 'Punjab', 
            'country'       => 'India', 
            'description'   => 'A software R&D company.', 
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
            ],
            [
            'id'            => 3, 
            'title'         => 'KTech Pvt Ltd', 
            'phone_number'  => '+91-6689996789', 
            'user_id'       => 2, 
            'mobile_number' => '+91-9999543210', 
            'email'         => 'kanda@gmail.com', 
            'registered_on' => new DateTime, 
            'address'       => '#1, Guru Nanak Nagar', 
            'state'         => 'Alberta', 
            'country'       => 'Canada', 
            'description'   => 'Diary Farm Business.', 
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
            ],
            [
            'id'            => 4, 
            'title'         => 'ABC Builders', 
            'phone_number'  => '+91-9998804578', 
            'user_id'       => 3, 
            'mobile_number' => '+91-9998804579', 
            'email'         => 'abcbuilders@gmail.com', 
            'registered_on' => new DateTime, 
            'address'       => '13th Town Square', 
            'state'         => 'California', 
            'country'       => 'USA', 
            'description'   => 'Building and construciton business.', 
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
            ],
        );
 
        //// Uncomment the below to run the seeder
        DB::table('company')->insert($companies);
    }
}
