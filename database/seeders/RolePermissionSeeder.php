<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create permissions
        $permissions = [
            // Dashboard
            'dashboard' => [
                'dashboard-view' => 'View dashboard',
                'dashboard-stats' => 'View dashboard statistics',
            ],

            // Users
            'users' => [
                'users-view' => 'View users',
                'users-create' => 'Create users',
                'users-edit' => 'Edit users',
                'users-delete' => 'Delete users',
                'users-toggle-status' => 'Toggle user status',
            ],

            // Roles
            'roles' => [
                'roles-view' => 'View roles',
                'roles-create' => 'Create roles',
                'roles-edit' => 'Edit roles',
                'roles-delete' => 'Delete roles',
            ],

            // Permissions
            'permissions' => [
                'permissions-view' => 'View permissions',
                'permissions-create' => 'Create permissions',
                'permissions-edit' => 'Edit permissions',
                'permissions-delete' => 'Delete permissions',
            ],

            // Students
            'students' => [
                'students-view' => 'View students',
                'students-create' => 'Create students',
                'students-edit' => 'Edit students',
                'students-delete' => 'Delete students',
            ],

            // Teachers
            'teachers' => [
                'teachers-view' => 'View teachers',
                'teachers-create' => 'Create teachers',
                'teachers-edit' => 'Edit teachers',
                'teachers-delete' => 'Delete teachers',
            ],

            // Courses
            'courses' => [
                'courses-view' => 'View courses',
                'courses-create' => 'Create courses',
                'courses-edit' => 'Edit courses',
                'courses-delete' => 'Delete courses',
            ],

            // Class Sessions
            'sessions' => [
                'sessions-view' => 'View class sessions',
                'sessions-create' => 'Create class sessions',
                'sessions-edit' => 'Edit class sessions',
                'sessions-delete' => 'Delete class sessions',
            ],

            // Attendance
            'attendance' => [
                'attendance-view' => 'View attendance',
                'attendance-mark' => 'Mark attendance',
                'attendance-history' => 'View attendance history',
            ],

            // Blogs
            'blogs' => [
                'blogs-view' => 'View blogs',
                'blogs-create' => 'Create blogs',
                'blogs-edit' => 'Edit blogs',
                'blogs-delete' => 'Delete blogs',
            ],

            // Trial Classes
            'trial-classes' => [
                'trial-classes-view' => 'View trial classes',
                'trial-classes-export' => 'Export trial classes',
            ],
        ];

        // Create permissions for both web and admin guards
        foreach ($permissions as $module => $modulePermissions) {
            foreach ($modulePermissions as $name => $description) {
                // Create for admin guard
                Permission::firstOrCreate([
                    'name' => $name,
                    'guard_name' => 'admin',
                ], [
                    'module' => $module,
                    'description' => $description,
                ]);

                // Create for web guard (optional, for User model)
                Permission::firstOrCreate([
                    'name' => $name,
                    'guard_name' => 'web',
                ], [
                    'module' => $module,
                    'description' => $description,
                ]);
            }
        }

        // Create roles for admin guard
        $superAdminRoleAdmin = Role::firstOrCreate(['name' => 'super-admin', 'guard_name' => 'admin']);
        $adminRoleAdmin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'admin']);
        $teacherRoleAdmin = Role::firstOrCreate(['name' => 'teacher', 'guard_name' => 'admin']);
        $viewerRoleAdmin = Role::firstOrCreate(['name' => 'viewer', 'guard_name' => 'admin']);

        // Create roles for web guard (for User model)
        $superAdminRoleWeb = Role::firstOrCreate(['name' => 'super-admin', 'guard_name' => 'web']);
        $adminRoleWeb = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $teacherRoleWeb = Role::firstOrCreate(['name' => 'teacher', 'guard_name' => 'web']);
        $viewerRoleWeb = Role::firstOrCreate(['name' => 'viewer', 'guard_name' => 'web']);

        // Assign all permissions to super admin (admin guard)
        $superAdminRoleAdmin->syncPermissions(Permission::where('guard_name', 'admin')->get());

        // Assign all permissions to super admin (web guard)
        $superAdminRoleWeb->syncPermissions(Permission::where('guard_name', 'web')->get());

        // Assign permissions to admin role (everything except user management) for admin guard
        $adminPermissionsAdmin = Permission::where('guard_name', 'admin')
            ->whereNotIn('module', ['users', 'roles', 'permissions'])
            ->get();
        $adminRoleAdmin->syncPermissions($adminPermissionsAdmin);

        // Assign permissions to admin role for web guard
        $adminPermissionsWeb = Permission::where('guard_name', 'web')
            ->whereNotIn('module', ['users', 'roles', 'permissions'])
            ->get();
        $adminRoleWeb->syncPermissions($adminPermissionsWeb);

        // Assign permissions to teacher for admin guard
        $teacherPermissionsAdmin = Permission::where('guard_name', 'admin')
            ->whereIn('name', [
                'dashboard-view',
                'students-view',
                'attendance-view',
                'attendance-mark',
                'attendance-history',
                'sessions-view',
            ])->get();
        $teacherRoleAdmin->syncPermissions($teacherPermissionsAdmin);

        // Assign permissions to teacher for web guard
        $teacherPermissionsWeb = Permission::where('guard_name', 'web')
            ->whereIn('name', [
                'dashboard-view',
                'students-view',
                'attendance-view',
                'attendance-mark',
                'attendance-history',
                'sessions-view',
            ])->get();
        $teacherRoleWeb->syncPermissions($teacherPermissionsWeb);

        // Assign permissions to viewer (read-only) for admin guard
        $viewerPermissionsAdmin = Permission::where('guard_name', 'admin')
            ->whereIn('name', [
                'dashboard-view',
                'students-view',
                'teachers-view',
                'courses-view',
                'sessions-view',
                'attendance-view',
                'attendance-history',
                'blogs-view',
                'trial-classes-view',
            ])->get();
        $viewerRoleAdmin->syncPermissions($viewerPermissionsAdmin);

        // Assign permissions to viewer for web guard
        $viewerPermissionsWeb = Permission::where('guard_name', 'web')
            ->whereIn('name', [
                'dashboard-view',
                'students-view',
                'teachers-view',
                'courses-view',
                'sessions-view',
                'attendance-view',
                'attendance-history',
                'blogs-view',
                'trial-classes-view',
            ])->get();
        $viewerRoleWeb->syncPermissions($viewerPermissionsWeb);

        // Create super admin user if not exists
        $superAdmin = User::firstOrCreate(
            ['email' => 'admin@quranacademy.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password123'),
                'status' => 'active',
            ]
        );
        $superAdmin->assignRole('super-admin');

        // Create admin user if not exists
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password123'),
                'status' => 'active',
            ]
        );
        $admin->assignRole('admin');
    }
}
