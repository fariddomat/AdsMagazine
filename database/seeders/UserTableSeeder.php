<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user=User::create([
            'name'=>'Super Admin',
            'email'=>'admin@ads.com',
            'password'=>bcrypt('admin'),
        ]);
        $user->addRole('superadministrator');
    }
}
