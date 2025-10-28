<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Admin;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AssignAdminRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:assign-role {email?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assign super-admin role with all permissions to an admin user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $email = $this->argument('email') ?? 'admin@gmail.com';

        $this->info('Setting up roles and permissions for admin guard...');

        // Create all permissions for admin guard
        $permissionsList = [
            'dashboard' => ['dashboard-view', 'dashboard-stats'],
            'users' => ['users-view', 'users-create', 'users-edit', 'users-delete', 'users-toggle-status'],
            'roles' => ['roles-view', 'roles-create', 'roles-edit', 'roles-delete'],
            'permissions' => ['permissions-view', 'permissions-create', 'permissions-edit', 'permissions-delete'],
            'students' => ['students-view', 'students-create', 'students-edit', 'students-delete'],
            'teachers' => ['teachers-view', 'teachers-create', 'teachers-edit', 'teachers-delete'],
            'courses' => ['courses-view', 'courses-create', 'courses-edit', 'courses-delete'],
            'sessions' => ['sessions-view', 'sessions-create', 'sessions-edit', 'sessions-delete'],
            'attendance' => ['attendance-view', 'attendance-mark', 'attendance-history'],
            'blogs' => ['blogs-view', 'blogs-create', 'blogs-edit', 'blogs-delete'],
            'trial-classes' => ['trial-classes-view', 'trial-classes-export'],
        ];

        foreach ($permissionsList as $module => $permissions) {
            foreach ($permissions as $permission) {
                Permission::firstOrCreate([
                    'name' => $permission,
                    'guard_name' => 'admin',
                ], [
                    'module' => $module,
                ]);
            }
        }

        $this->info('Permissions created for admin guard.');

        // Create super-admin role
        $superAdminRole = Role::firstOrCreate([
            'name' => 'super-admin',
            'guard_name' => 'admin'
        ]);

        // Assign all permissions to super-admin role
        $allPermissions = Permission::where('guard_name', 'admin')->get();
        $superAdminRole->syncPermissions($allPermissions);

        $this->info('Super-admin role created with all permissions.');

        // Find admin user
        $admin = Admin::where('email', $email)->first();

        if (!$admin) {
            $this->error("Admin user with email {$email} not found!");
            return 1;
        }

        // Assign super-admin role to admin
        $admin->syncRoles(['super-admin']);

        $this->info("✅ Successfully assigned super-admin role to {$admin->name} ({$admin->email})");
        $this->info("✅ Total permissions assigned: " . $allPermissions->count());
        $this->info("");
        $this->info("You can now:");
        $this->info("1. Logout from admin panel");
        $this->info("2. Login again");
        $this->info("3. See 'USER MANAGEMENT' section in sidebar");

        return 0;
    }
}
