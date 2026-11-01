<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // CHANGE THE PASSWORDS below before you run this!
        $accounts = [
            [
                'name'     => 'Owner',
                'username' => 'owner',
                'email'    => 'owner@dashcoffee.local',
                'password' => 'blob',
                'role'     => 'owner',
            ],
            [
                'name'     => 'Staff',
                'username' => 'staff',
                'email'    => 'staff@dashcoffee.local',
                'password' => 'lah',
                'role'     => 'staff',
            ],
        ];

        foreach ($accounts as $account) {
            DB::table('users')->updateOrInsert(
                ['username' => $account['username']],
                [
                    'name'       => $account['name'],
                    'email'      => $account['email'],
                    'password'   => Hash::make($account['password']),
                    'role'       => $account['role'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
