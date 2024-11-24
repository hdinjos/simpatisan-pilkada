<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     // 'name' => 'Test User',
        //     // 'email' => 'test@example.com',
        //     'name' => "Koorinator 1",
        //     'username' => 'koordinator+1',
        //     'password' => '123456',
        //     'role' => 'KOOR',   
        // ]);

        DB::table('users')->insert([
            'name' => "Koorinator 1",
            'username' => 'koordinator+1',
            'password' => Hash::make('123456'),
            'role' => 'KOOR',   
        ]);
    }
}
