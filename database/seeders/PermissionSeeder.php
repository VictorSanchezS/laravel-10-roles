<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            //Roles
            'create-role',
            'edit-role',
            'delete-role',
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
         ];
 
          // Looping and Inserting Array's Permissions into Permission Table
         foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
          }
    }
}