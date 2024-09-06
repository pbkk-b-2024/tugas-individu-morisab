<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // Define a list of descriptive role names
        $roles = [
            'Developer',
            'Designer',
            'Project Manager',
            'QA Tester',
            'DevOps Engineer',
            'Product Owner',
            'Business Analyst',
            'System Administrator',
            'Frontend Developer',
            'Backend Developer',
            'UI/UX Designer',
            'Database Administrator',
            'Network Engineer',
            'Technical Lead',
            'Scrum Master',
            'Data Scientist',
            'Software Architect',
            'Security Analyst',
            'Content Strategist',
            'SEO Specialist'
        ];

        // Insert each role into the database
        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role,
            ]);
        }
    }
}