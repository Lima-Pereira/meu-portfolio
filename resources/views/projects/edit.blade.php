@extends('layouts.app')

@section('content')
    {{-- Container: bg-white no claro, dark:bg-gray-900 no escuro --}}
    <div class="max-w-2xl mx-auto bg-white dark:bg-gray-900 p-8 rounded-lg shadow-md border border-transparent dark:border-gray-800 transition-colors duration-300">
        <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Editar Projeto</h1>

        <form action="/projetos/{{ $project->id }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            {{-- Título --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título do Projeto</label>
                <input type="text" name="title" value="{{ $project->title }}" required 
                    class="mt-1 block w-full border border-gray-300 dark:border-gray-700 rounded-md shadow-sm p-2 
                           bg-white dark:bg-gray-800 text-gray-900 dark:text-white 
                           focus:ring-blue-500 focus:border-blue-500 outline-none">
            </div>

            {{-- Descrição --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Descrição</label>
                <textarea name="description" rows="3" required
                    class="mt-1 block w-full border border-gray-300 dark:border-gray-700 rounded-md shadow-sm p-2 
                           bg-white dark:bg-gray-800 text-gray-900 dark:text-white 
                           focus:ring-blue-500 focus:border-blue-500 outline-none">{{ $project->description }}</textarea>
            </div>

            {{-- Link --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Link do Projeto</label>
                <input type="url" name="link" value="{{ $project->link }}" required
                    class="mt-1 block w-full border border-gray-300 dark:border-gray-700 rounded-md shadow-sm p-2 
                           bg-white dark:bg-gray-800 text-gray-900 dark:text-white 
                           focus:ring-blue-500 focus:border-blue-500 outline-none">
            </div>

            @if($project->image)
                <div class="mt-2">
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Capa atual:</p>
                    <img src="{{ asset('storage/' . $project->image) }}" class="w-32 h-20 object-cover rounded shadow border dark:border-gray-700">
                </div>
            @endif

            {{-- Upload de Arquivo --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Alterar Capa (Opcional)</label>
                <input type="file" name="image" 
                    class="mt-1 block w-full text-sm text-gray-500 dark:text-gray-400 
                           file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 
                           file:text-sm file:font-semibold file:bg-blue-50 dark:file:bg-blue-900 
                           file:text-blue-700 dark:file:text-blue-200 hover:file:bg-blue-100 transition">
            </div>

            <div class="pt-4 flex space-x-2">
                <button type="submit" 
                    class="flex-1 bg-green-600 text-white font-bold py-2 px-4 rounded hover:bg-green-700 transition duration-200">
                    Atualizar Projeto
                </button>
                <a href="/projetos" class="bg-gray-500 dark:bg-gray-700 text-white py-2 px-4 rounded hover:bg-gray-600 dark:hover:bg-gray-600">Cancelar</a>
            </div>
        </form>
    </div>
@endsection