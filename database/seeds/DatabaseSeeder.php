<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 3 basic membership types
        \DB::table('membership_types')->insert([
            [
                'name' => 'Junior Member',
                'amount' => 1000,
                'years' => 1,
            ],
            [
                'name' => 'Senior Member',
                'amount' => 3000,
                'years' => 1,
            ],
            [
                'name' => 'Vice President',
                'amount' => 12000,
                'years' => 5,
            ],
        ]);
        
        // 2 people
        \DB::table('members')->insert([
            [
                'id' => 1,
                'first_name' => 'Steve',
                'last_name' => 'Nonmember',
                'address_line1' => '2 Main Road',
                'address_line2' => '',
                'address_city' => 'Llandudno',
                'address_state' => 'Conwy',
                'address_zip' => 'LL1 1ZZ',
                'telephone' => '07123 456 789',
                'ends_at' => '2016-12-31',
                'notes' => 'This membership has expired'
            ],
            [
                'id' => 2,
                'first_name' => 'Jane',
                'last_name' => 'Member',
                'address_line1' => 'Stocko Towers',
                'address_line2' => 'High Road',
                'address_city' => 'Colwyn Bay',
                'address_state' => 'Conwy',
                'address_zip' => 'LL2 3XX',
                'telephone' => '07891 654 321',
                'ends_at' => '2017-12-31',
                'notes' => 'This person has already paid for a year',
            ],
        ]);
        
        // 1 paid up member with subscription history, 1 expired 
        \DB::table('subscriptions')->insert([
            [
                'member_id' => 1,
                'membership_type_id' => 2,
                'amount' => 3000,
                'ends_at' => '2016-12-31',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            ],
            [
                'member_id' => 2,
                'membership_type_id' => 2,
                'amount' => 3000,
                'ends_at' => '2017-12-31',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            ],
            [
                'member_id' => 2,
                'membership_type_id' => 2,
                'amount' => 3000,
                'ends_at' => '2016-12-31',
                'created_at' => Carbon::now()->subYear()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->subYear()->format('Y-m-d H:i:s'), 
            ],
        ]);
        
    }
}
