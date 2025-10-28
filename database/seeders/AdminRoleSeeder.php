<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get or create the super admin role for the admin guard
        $superAdminRole = Role::firstOrCreate(
            ['name' => 'super-admin', 'guard_name' => 'admin']
        );

        // Assign all permissions to super admin role
        $permissions = Permission::where('guard_name', 'admin')->get();
        if ($permissions->count() > 0) {
            $superAdminRole->syncPermissions($permissions);
        }

        // Find the existing admin user
        $admin = Admin::where('email', 'admin@gmail.com')->first();

        if ($admin) {
            // Assign super admin role to the admin
            $admin->assignRole($superAdminRole);
            echo "Admin user assigned super-admin role successfully!\n";
        } else {
            echo "Admin user not found. Creating one...\n";
            // Create admin if not exists
            $admin = Admin::create([
                'name' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
            ]);
            $admin->assignRole($superAdminRole);
            echo "Admin user created and assigned super-admin role!\n";
        }
    }
}
