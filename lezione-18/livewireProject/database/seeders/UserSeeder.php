<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //->has(Post::factory(3))
        User::factory()->create(['name'=>'Emanuele','email'=>'admin@example.com','is_admin'=>true,'password'=>'admin']);
        User::factory(10)->create();
    }
}
