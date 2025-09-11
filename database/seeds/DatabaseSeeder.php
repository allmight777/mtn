<?php

namespace Database\Seeders;

use App\Models\Groupe;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Créer le Groupe A et B
        $groupeA = Groupe::firstOrCreate(['nom' => 'Groupe A'], ['libelle' => 'userSimple']);
        $groupeB = Groupe::firstOrCreate(['nom' => 'Groupe B'], ['libelle' => 'SuperAdmin']);

        // Créer un utilisateur admin dans le Groupe B
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'nom' => 'Admin',
                'prenom' => 'Super',
                'matricule' => 'ADMIN001',
                'contact' => '+22900000000',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'is_admin' => 1,
                'is_actif' => 1,
                'groupe_id' => $groupeB->id,
            ]
        );
    }
}
