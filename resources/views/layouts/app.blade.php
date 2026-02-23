<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Henrique Lima | Meu Portifólio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body
    class="bg-gray-100 dark:bg-gray-950 text-gray-900 dark:text-gray-100 font-sans leading-normal tracking-normal transition-colors duration-300">
    <nav
        class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800 py-4 transition-colors duration-300">
        <div class="container mx-auto px-4 flex justify-between items-center">

            <a href="/" class="text-xl font-black text-blue-600 dark:text-blue-400 uppercase">
                Meu<span class="text-gray-800 dark:text-gray-100">Portfólio</span>
            </a>

            <div class="flex items-center space-x-4">
                <button id="theme-toggle"
                    class="p-2 rounded-lg text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                    <span id="theme-toggle-dark-icon" class="hidden">🌙</span>
                    <span id="theme-toggle-light-icon" class="hidden">☀️</span>
                </button>

                <a href="/projetos/novo"
                    class="relative inline-flex items-center justify-center px-4 py-1.5 overflow-hidden font-bold text-white transition duration-300 ease-out border-2 border-blue-600 rounded-full shadow-md group">

                    <span
                        class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-blue-600 group-hover:translate-x-0 ease">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </span>

                    <span
                        class="absolute flex items-center justify-center w-full h-full text-blue-600 transition-all duration-300 transform group-hover:translate-x-full ease dark:text-blue-400">
                        + Projetos
                    </span>

                    <span class="relative invisible">+ Projetos</span>
                </a>
            </div>
        </div>
    </nav>

    <main class="contaniner mx-auto mt-10 p-4">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        @yield('content')
    </main>

    <footer class="text-center mt-20 py-6 text-gray-500 text-sm">
        &copy; 2026 - Henrique Lima da Silva Pereira | Junior Developer
    </footer>
    <script>
        // Configura o Tailwind para usar a classe 'dark' manualmente
        tailwind.config = {
            darkMode: 'class',
        }

        const themeToggleBtn = document.getElementById('theme-toggle');
        const darkIcon = document.getElementById('theme-toggle-dark-icon');
        const lightIcon = document.getElementById('theme-toggle-light-icon');

        // Verifica a preferência salva ou do sistema
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            lightIcon.classList.remove('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            darkIcon.classList.remove('hidden');
        }

        themeToggleBtn.addEventListener('click', function() {
            document.documentElement.classList.toggle('dark');
            darkIcon.classList.toggle('hidden');
            lightIcon.classList.toggle('hidden');

            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('color-theme', 'dark');
            } else {
                localStorage.setItem('color-theme', 'light');
            }
        });
    </script>
</body>

</html>
