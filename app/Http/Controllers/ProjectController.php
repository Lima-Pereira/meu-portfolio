<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function create()
    {
        return view('projects.create');
    }
    //Criar um novo projeto no banco com os dados que vieram do formulário.
    public function store(Request $request)
    {
        $data = $request->all();

        // Verifica se existe um arquivo de imagem no formulário
        if ($request->hasFile('image')) {
            // Salva na pasta 'projects' dentro de 'storage/app/public'
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        Project::create($data);

        return redirect('/projetos')->with('success', 'Projeto salvo com sucesso!');
    }

    public function index()
    {
        $projects = Project::all(); //Buscar todos os projetos no banco
        return view('projects.index', compact('projects')); // Passar a variável $projects para a view
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id); // Encontrar o projeto ou dá erro 404
        $project->delete(); // Deletar o projeto
        return redirect('/projetos')->with('success', 'Projeto excluído!'); // Redirecionar para a lista de projetos com mensagem de sucesso

    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $data = $request->all();

        // Se o usuário enviar uma nova imagem, atualizamos o arquivo
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($data);

        return redirect('/projetos')->with('success', 'Projeto atualizado com sucesso!');
    }

    // No seu ProjectController.php, mude o nome para:
    public function importFromGithub()
    {
        $response = Http::get('https://api.github.com/users/Lima-Pereira/repos');

        if ($response->successful()) {
            foreach ($response->json() as $repo) {
                Project::updateOrCreate(
                    ['link' => $repo['html_url']],
                    [
                        'title' => $repo['name'],
                        'description' => $repo['description'] ?? 'Importado do GitHub',
                    ]
                );
            }
            return redirect('/projetos')->with('success', 'Sincronizado com sucesso!');
        }

        return redirect('/projetos')->with('error', 'Erro ao conectar com o GitHub.');
    }
}
