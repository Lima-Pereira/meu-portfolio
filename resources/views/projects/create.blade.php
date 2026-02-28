@extends('layouts.app')

@section('content')
    {{-- Container: bg-white no claro, dark:bg-gray-900 no escuro --}}
    <div class="max-w-2xl mx-auto bg-white dark:bg-gray-900 p-8 rounded-lg shadow-md border border-transparent dark:border-gray-800 transition-colors duration-300">
        <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Cadastrar Novo Projeto</h1>

        <form action="/projetos" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            {{-- Título do projeto --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título do Projeto</label>
                <input type="text" name="title" required
                    class="mt-1 block w-full border border-gray-300 dark:border-gray-700 rounded-md shadow-sm p-2 
                           bg-white dark:bg-gray-800 text-gray-900 dark:text-white 
                           focus:ring-blue-500 focus:border-blue-500 outline-none transition">
            </div>
            {{-- Descrição do projeto --}}
             
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Descrição</label>
                <textarea name="description" rows="3" required
                    class="mt-1 block w-full border border-gray-300 dark:border-gray-700 rounded-md shadow-sm p-2 
                           bg-white dark:bg-gray-800 text-gray-900 dark:text-white 
                           focus:ring-blue-500 focus:border-blue-500 outline-none transition"></textarea>
            </div>
            {{-- Link do projeto --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Link do Projeto</label>
                <input type="url" name="link" required
                    class="mt-1 block w-full border border-gray-300 dark:border-gray-700 rounded-md shadow-sm p-2 
                           bg-white dark:bg-gray-800 text-gray-900 dark:text-white 
                           focus:ring-blue-500 focus:border-blue-500 outline-none transition">
            </div>

            {{-- Capa img --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Capa do Projeto (Imagem)</label>
                <input type="file" name="image"
                    class="mt-1 block w-full text-sm text-gray-500 dark:text-gray-400 
                           file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 
                           file:text-sm file:font-semibold file:bg-blue-50 dark:file:bg-blue-900 
                           file:text-blue-700 dark:file:text-blue-200 hover:file:bg-blue-100 transition">
            </div>

            {{-- Botão Salvar --}}
            <div class="pt-4">
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-200 shadow-lg transform hover:scale-[1.01]">
                    Salvar Projeto
                </button>
            </div>
        </form>
    </div>
@endsection