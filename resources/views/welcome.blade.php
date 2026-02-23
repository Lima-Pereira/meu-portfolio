@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center text-center py-12 px-4 md:px-0">
   <div class="w-40 h-40 mb-6 shadow-2xl rounded-full overflow-hidden border-4 border-white ring-4 ring-blue-600">
        <img src="{{ asset('img/henrique.png.jpg') }}"  alt="Henrique Lima da Silva Pereira" class="w-full h-full object-cover">
    </div>
    
    <h1 class="text-3xl md:text-5xl font-bold text-gray-800 mb-2">Henrique Lima da Silva Pereira</h1>
    <p class="text-xl text-gray-600 mb-6 font-medium">Desenvolvedor Junior | PHP & Laravel</p>
    
    <div class="flex space-x-4 mb-10">
        <a href="https://github.com/Lima-Pereira" target="_blank" class="bg-gray-800 text-white px-6 py-2 rounded-full hover:bg-gray-900 transition flex items-center">
            GitHub
        </a>
        <a href="https://www.linkedin.com/in/henrique-lima-pereira" target="_blank" class="bg-blue-700 text-white px-6 py-2 rounded-full hover:bg-blue-800 transition flex items-center">
            LinkedIn
        </a>
    </div>

    <div class="max-w-3xl text-left bg-white p-8 rounded-xl shadow-md border border-gray-100">
        <h2 class="text-2xl font-semibold mb-4 text-blue-600 border-b pb-2 italic">Sobre Mim</h2>
        <p class="text-gray-700 leading-relaxed mb-4">
            Tenho 33 anos e sou formado em <strong>Tecnologia em Análise e Desenvolvimento de Sistemas</strong>. 
            Sou apaixonado por tecnologia e desenvolvimento de software, com experiência em projetos pessoais e acadêmicos utilizando PHP, Laravel, Python e AWS.
        </p>
        
        <h3 class="font-bold text-gray-800 mb-3 uppercase text-sm tracking-widest">Tecnologias:</h3>
        <div class="flex flex-wrap gap-3">
            <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-md text-sm font-bold border border-blue-200">PHP & Laravel</span>
            <span class="bg-yellow-50 text-yellow-700 px-3 py-1 rounded-md text-sm font-bold border border-yellow-200">Python</span>
            <span class="bg-orange-50 text-orange-700 px-3 py-1 rounded-md text-sm font-bold border border-orange-200">AWS</span>
            <span class="bg-red-50 text-red-700 px-3 py-1 rounded-md text-sm font-bold border border-red-200">Git & GitHub</span>
        </div>
    </div>

    <a href="/projetos" class="mt-12 group flex items-center text-blue-600 font-black text-lg hover:text-blue-800 transition">
        CONHEÇA MEUS PROJETOS 
        <span class="ml-2 group-hover:translate-x-2 transition-transform">→</span>
    </a>
</div>
@endsection


{{--tag img rouded-full e overflow-hidden imagem redonda--}}
{{--objet-a imagem fica prenechida sem distorcer--}}