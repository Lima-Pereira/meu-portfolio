@extends('layouts.app')

@section('content')
    <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white">Meus Projetos</h1>

        <div class="flex items-center space-x-3">
            <form action="{{ route('projects.github') }}" method="POST">
                @csrf
                <button type="submit" 
                    class="bg-gray-800 hover:bg-black text-white text-xs font-black px-4 py-2 rounded-full shadow-md transition-all flex items-center border border-gray-700">
                    <svg class="w-3 h-3 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.43.372.823 1.102.823 2.222 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 21.795 24 17.298 24 12c0-6.627-5.373-12-12-12"/>
                    </svg>
                    SYNC GITHUB
                </button>
            </form>

            <a href="/" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 font-bold flex items-center transition duration-200">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Voltar
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($projects as $project)
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden flex flex-col border border-transparent dark:border-gray-700 transition-colors duration-300">
                {{-- Conteúdo do Card (Imagem, Título, Descrição e Ações) --}}
                @if ($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" class="w-full h-48 object-cover" alt="{{ $project->title }}">
                @else
                    <div class="w-full h-48 bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-400 dark:text-gray-500 font-bold">
                        {{ strtoupper(substr($project->title, 0, 2)) }}
                    </div>
                @endif

                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-gray-800 dark:text-white">{{ $project->title }}</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 h-12 overflow-hidden text-sm">{{ $project->description }}</p>

                    <div class="flex justify-between items-center mt-auto pt-4 border-t border-gray-100 dark:border-gray-700">
                        <a href="{{ $project->link }}" target="_blank" class="text-blue-500 dark:text-blue-400 hover:underline font-bold text-sm">Link</a>

                        <div class="flex space-x-3 text-sm">
                            <a href="/projetos/{{ $project->id }}/editar" class="text-yellow-600 dark:text-yellow-400 hover:text-yellow-700 font-medium">Editar</a>
                            <form action="/projetos/{{ $project->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 dark:text-red-400 hover:text-red-700 font-medium" onclick="return confirm('Excluir?')">Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection