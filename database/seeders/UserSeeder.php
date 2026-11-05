<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@roohulquran.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
                'status' => 'active',
                'phone' => '+1234567890',
                'email_verified_at' => now(),
            ]
        );

        // Assign admin role (web guard)
        if (!$admin->hasRole('admin')) {
            $admin->assignRole('admin');
        }

        // Create manager user
        $manager = User::firstOrCreate(
            ['email' => 'manager@roohulquran.com'],
            [
                'name' => 'Manager User',
                'password' => Hash::make('password'),
                'status' => 'active',
                'phone' => '+1234567891',
                'email_verified_at' => now(),
            ]
        );

        // Assign manager role (web guard)
        if (!$manager->hasRole('manager')) {
            $manager->assignRole('manager');
        }

        // Create teacher user
        $teacher = User::firstOrCreate(
            ['email' => 'teacher@roohulquran.com'],
            [
                'name' => 'Teacher User',
                'password' => Hash::make('password'),
                'status' => 'active',
                'phone' => '+1234567892',
                'email_verified_at' => now(),
            ]
        );

        // Assign teacher role (web guard)
        if (!$teacher->hasRole('teacher')) {
            $teacher->assignRole('teacher');
        }

        // Create student user
        $student = User::firstOrCreate(
            ['email' => 'student@roohulquran.com'],
            [
                'name' => 'Student User',
                'password' => Hash::make('password'),
                'status' => 'active',
                'phone' => '+1234567893',
                'email_verified_at' => now(),
            ]
        );

        // Assign student role (web guard)
        if (!$student->hasRole('student')) {
            $student->assignRole('student');
        }

        // Create additional users with factory
        $users = User::factory()->count(10)->create();

        // Assign random roles to factory users (restrict to web guard)
        $roles = Role::where('guard_name', 'web')->get();
        if ($roles->isNotEmpty()) {
            $users->each(function ($user) use ($roles) {
                $randomRole = $roles->random();
                // assign by name to let package resolve correct guard
                $user->assignRole($randomRole->name);
            });
        }
    }
}

