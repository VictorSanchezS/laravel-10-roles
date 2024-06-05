<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Juan', 
            'email' => 'juan@gmail.com',
            'password' => Hash::make('juan1234')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Victor', 
            'email' => 'victor@gmail.com',
            'password' => Hash::make('victor1234')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Manuel', 
            'email' => 'manuel@gmail.com',
            'password' => Hash::make('manuel1234')
        ]);
        $productManager->assignRole('Product Manager');
    }
}