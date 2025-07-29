<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
Use App\Constants\Role;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Admin();
        $admin->name = 'Abram';
        $admin->email = 'admin@gmail.com';
        $admin->photo = '';
        $admin->password = Hash::make('1234');
        $admin->role = Role::ADMIN;
        $admin->token = '';
        $admin->save();
    }
}
