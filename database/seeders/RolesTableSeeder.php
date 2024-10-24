<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'description' => 'administrator with full access'
        ]);

        Role::create([
            'name' => 'user',
            'description' => 'user with limited access'
        ]);
    }
}
