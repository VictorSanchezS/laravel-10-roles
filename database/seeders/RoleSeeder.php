<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $productManager = Role::create(['name' => 'Product Manager']);

        $admin->givePermissionTo([
            //Users
            'create-user',
            'edit-user',
            'delete-user',
            //Products
            'create-product',
            'edit-product',
            'delete-product',
            //Catogories
            'create-category',
            'edit-category',
            'delete-category',
            //Providers
            'create-provider',
            'edit-provider',
            'delete-provider'
        ]);

        $productManager->givePermissionTo([
            //Products
            'create-product',
            'edit-product',
            'delete-product',
            //Catogories
            'create-category',
            'edit-category',
            'delete-category',
            //Providers
            'create-provider',
            'edit-provider',
            'delete-provider'
        ]);
    }
}