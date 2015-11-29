<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();
 
        $users = array(
            ['id' => 1, 'name' => 'navi', 'email' => 'navi@weavebytes.com', 'password' => bcrypt('1234'), 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'john', 'email' => 'john@weavebytes.com', 'password' => bcrypt('1234'), 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'tom',  'email' => 'tom@weavebytes.com',  'password' => bcrypt('1234'), 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
}
