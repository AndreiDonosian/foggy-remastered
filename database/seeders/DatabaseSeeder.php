<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('test@example.com'),
        ]);

        Plan::factory()->create([
            'title'=>'Free',
            'description'=>'Free plan gather here',
            'features'=>'',
            'price'=>0.00,
            'mb_limit'=>10,
            'status'=>1
            ]);

        Plan::factory()->create([
            'title'=>'Basic',
            'description'=>'Basic plan gather here',
            'features'=>'',
            'price'=>5.00,
            'mb_limit'=>1024,
            'status'=>1
        ]);

        Plan::factory()->create([
            'title'=>'Pro',
            'description'=>'Pro plan gather here',
            'features'=>'',
            'price'=>20.00,
            'mb_limit'=>102400,
            'status'=>1
        ]);
    }
}
