<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = Project::create([
            'title' => 'Ma web app Laravel',
            'description' => 'Découvrez mon app Laravel',
            'technologies' => ['Laravel', 'SQLite', 'TailwindCSS']
        ]);

        $project->tasks()->create([
            'title' => 'Configurer la base de données',
            'is_done' => true
        ]);

        $project->tasks()->create([
            'title' => 'Créer les migrations',
            'is_done' => false
        ]);

        $project = Project::create([
            'title' => 'Mon site e-commerce',
            'description' => 'Un site e-commerce moderne',
            'technologies' => ['Laravel', 'MySQL', 'Vue.js']
        ]);

        $project->tasks()->create([
            'title' => 'Design de la page produit'
        ]);

        Project::create([
            'title' => 'Portfolio React',
            'description' => 'Un portfolio moderne réalisé avec React',
            'technologies' => ['React', 'TypeScript', 'TailwindCSS']
        ]);
    }
}
