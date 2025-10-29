<?php

namespace Database\Seeders;

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
        ]);

        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
        ]);

        $this->call([
            CourseCategorySeeder::class,
            KategoriPelatihanSeeder::class,
            PelatihanJarakJauhSeeder::class,
            PelatihanKlasikalSeeder::class,
            PelatihanWebinarSeeder::class,
            KurikulumPelatihanSeeder::class,
            DetailCurriculumSeeder::class,
            PesertaPelatihanSeeder::class,
        ]);
    }
}
