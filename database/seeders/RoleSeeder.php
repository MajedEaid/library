<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::create(['name' => 'Super Admin', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Role::create(['name' => 'Super Author', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);

        // Admin
        Permission::create(['name' => 'Index Admin', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Create Admin', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Edit Admin', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Delete Admin', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Country
        Permission::create(['name' => 'Index Country', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Create Country', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Edit Country', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Delete Country', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // City
        Permission::create(['name' => 'Index City', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Create City', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Edit City', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Delete City', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Category
        Permission::create(['name' => 'Index Category', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Create Category', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Edit Category', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Delete Category', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Book
        Permission::create(['name' => 'Index Book', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Create Book', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Edit Book', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Delete Book', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Author
        Permission::create(['name' => 'Index Author', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Create Author', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Edit Author', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Delete Author', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // Admin
        Permission::create(['name' => 'Index Admin', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Create Admin', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Edit Admin', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Delete Admin', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        // Country
        Permission::create(['name' => 'Index Country', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Create Country', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Edit Country', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Delete Country', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        // City
        Permission::create(['name' => 'Index City', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Create City', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Edit City', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Delete City', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        // Category
        Permission::create(['name' => 'Index Category', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Create Category', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Edit Category', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Delete Category', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        // Book
        Permission::create(['name' => 'Index Book', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Create Book', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Edit Book', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Delete Book', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        // Author
        Permission::create(['name' => 'Index Author', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Create Author', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Edit Author', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'Delete Author', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
    }
}
