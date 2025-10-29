<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Muhamad Noval, S.Kom., M.T.I.',
                'email' => 'tznoval18@yahoo.com',
                'nip' => '198602072009011005',
                'unit_kerja' => 'Pusat Strategi Kebijakan Pembangunan Bidang Agama',
                'jabatan' => 'Pranata Komputer Ahli Muda',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Farida Ishak Indrawan, S.E, M.AP.',
                'email' => 'farida.pande@gmail.com', 
                'nip' => '198505182009122003',
                'unit_kerja' => 'Pusdiklat Tenaga Administrasi',
                'jabatan' => 'Analis Kebijakan Ahli Muda',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ],
        ];

        foreach ($users as $user) {
            \App\Models\User::updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
        
        // Update existing admin user with additional fields
        \App\Models\User::where('email', 'admin@example.com')->update([
            'name' => 'Admin User',
            'nip' => '199001012020121001',
            'unit_kerja' => 'Unit TI',
            'jabatan' => 'Administrator Sistem',
        ]);
    }
}
