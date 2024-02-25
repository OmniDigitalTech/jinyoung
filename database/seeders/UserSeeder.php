<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();

        $superAdmin =  User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@jinyoung.com',
            'password' => Hash::make('jinyoung2024'),
        ]);

        $role = Role::findOrCreate('Super Admin');
        $superAdmin->assignRole($role);

//        $admin =  User::create([
//            'name' => 'Admin',
//            'email' => 'admin@tresnorealestate.com',
//            'password' => Hash::make('admin123'),
//        ]);
//
//        $role = Role::findOrCreate('Admin');
//        $admin->assignRole($role);

//        $employee =  User::create([
//            'name' => 'Owner',
//            'email' => 'owner@sgonline.co.id',
//            'password' => Hash::make('owner'),
//        ]);
//
//        $role = Role::findOrCreate('Owner');
//        $employee->assignRole($role);

//        $guest =  User::create([
//            'name' => 'Customer',
//            'email' => 'customer@tresnorealestate.com',
//            'password' => Hash::make('customer'),
//        ]);

//        $role = Role::findOrCreate('Customer');
//        $guest->assignRole($role);
    }
}
