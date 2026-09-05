<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom" => $this->faker->name(),
            "prenom" => $this->faker->firstName,
            "sexe" => ["M", "F"][rand(0, 1)],
            "age" => rand(10, 25),
            "niveau_scolaire_id" => rand(1,4)
        ];
    }
}
