<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Division;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Febri Mardean',
            'username' => 'febrimardean',
            'role' => 'Super User',
            'email' => 'febrimardean@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::factory(3)->create();
        Department::factory(6)->create();
        // Division::factory(6)->create();
        Division::create([
            'department_id' => 1,
            'name' => 'Human Resource Payroll'
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
