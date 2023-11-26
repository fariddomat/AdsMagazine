<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'super_admin@ads.com',
            'password' => bcrypt('admin'),
            'status' => 'active',
        ]);
        $user->addRole('superadministrator');


        $user2 = User::create([
            'name' => 'Admin',
            'email' => 'admin@ads.com',
            'password' => bcrypt('admin'),
            'status' => 'active',
        ]);
        $user2->addRole('administrator');

        $user3 = User::create([
            'name' => 'Eman',
            'email' => 'eman@ads.com',
            'email_verified_at' => now(),
            'password' => bcrypt('eman'),
            'status' => 'active',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'mobile' => '123456789',
            'img' => 'eman.jpg',
        ]);
        $user3->addRole('advertiser');

        $user3 = User::create([
            'name' => 'Mohammad',
            'email' => 'moh@ads.com',
            'email_verified_at' => now(),
            'password' => bcrypt('moh'),
            'status' => 'active',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'mobile' => '987654321',
            'img' => 'moh.jpg',
        ]);
        $user3->addRole('user');
    }
}
