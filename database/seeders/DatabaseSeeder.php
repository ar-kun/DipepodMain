<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PostCategory;
use App\Models\Post;
use App\Models\Umkm;
use App\Models\UmkmCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::create([
            'name' => 'Admin',
            'username' => 'dipepod.admin',
            'role' => 'admin',
            'email' => 'admin.dipepod@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admindipepod'), // password
            'remember_token' => \Illuminate\Support\Str::random(10),
            'is_admin' => true,
        ]);
        \App\Models\User::create([
            'name' => 'Admin UMKM',
            'username' => 'umkm.admin',
            'role' => 'admin_umkm',
            'email' => 'umkm.dipepod@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('umkmdipepod'), // password
            'remember_token' => \Illuminate\Support\Str::random(10),
            'is_admin' => true,
        ]);
        \App\Models\User::create([
            'name' => 'Admin Wisata',
            'username' => 'wisata.admin',
            'role' => 'admin_umkm',
            'email' => 'wisata.dipepod@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('wisatadipepod'), // password
            'remember_token' => \Illuminate\Support\Str::random(10),
            'is_admin' => true,
        ]);

        \App\Models\User::factory(1)->create();


        PostCategory::create([
            'name' => 'Berita',
            'slug' => 'berita',
        ]);
        PostCategory::create([
            'name' => 'Agenda',
            'slug' => 'agenda',
        ]);

        UmkmCategory::create([
            'name' => 'Makanan & Minuman',
            'slug' => 'makanan-dan-minuman',
        ]);
        UmkmCategory::create([
            'name' => 'Kerajinan',
            'slug' => 'kerajinan',
        ]);
        UmkmCategory::create([
            'name' => 'Lain - Lain',
            'slug' => 'lain-Lain',
        ]);

        // Post::factory(10)->create();
        // Umkm::factory(10)->create();
    }
}
