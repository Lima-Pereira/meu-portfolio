<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Project;

class ImportGithubProjects extends Command
{
    protected $signature = 'github:import';
    protected $description = 'Importa projetos do perfil Lima-Pereira';

    public function handle()
    {
        $response = Http::get('https://api.github.com/users/Lima-Pereira/repos');

        if ($response->successful()) {
            foreach ($response->json() as $repo) {
                Project::updateOrCreate(
                    ['link' => $repo['html_url']], // Evita duplicados
                    [
                        'title' => $repo['name'],
                        'description' => $repo['description'] ?? 'Projeto do GitHub',
                    ]
                );
            }
            $this->info('Projetos importados com sucesso!');
        }
    }
}