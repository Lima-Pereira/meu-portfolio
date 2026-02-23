# meu-portfolio

🚀 Gerenciador de Portfólio Full-Stack (Laravel + SQLite)
Este é o meu projeto principal de portfólio, desenvolvido para demonstrar minhas habilidades em desenvolvimento web com PHP e Laravel. O sistema permite o gerenciamento completo de projetos e a sincronização automática com repositórios reais através da API do GitHub.

🛠️ Tecnologias Utilizadas
Backend: PHP 8.2 e Framework Laravel 10.

Banco de Dados: SQLite (escolhido pela alta portabilidade e performance em aplicações leves).

Frontend: Blade Templates e Tailwind CSS para uma interface responsiva e moderna.

Integração: Consumo de API externa (GitHub REST API) para automação de dados.

✨ Funcionalidades Principais
Sincronização com GitHub: Um botão dedicado que busca todos os meus repositórios no perfil Lima-Pereira e os cadastra automaticamente no banco de dados.

CRUD de Projetos: Interface completa para criar, ler, editar e excluir informações de projetos manualmente.

Arquitetura MVC: Código organizado seguindo as melhores práticas de desenvolvimento de software aprendidas em ADS.

💻 Como Executar o Projeto Localmente
Como este projeto utiliza SQLite, você não precisa configurar um servidor MySQL externo.

Clonar o repositório:

Bash
git clone https://github.com/Lima-Pereira/meu-portfolio.git
Instalar dependências:

Bash
composer install
Configurar o ambiente:

Duplique o arquivo .env.example para .env.

Crie um arquivo vazio em database/database.sqlite.

Rodar as migrações:

Bash
php artisan migrate
Iniciar o servidor:

Bash
php artisan serve
👤 Autor
Henrique Lima da Silva Pereira Graduado em Análise e Desenvolvimento de Sistemas (ADS).

Busco minha primeira oportunidade como Desenvolvedor Junior.

LinkedIn: linkedin.com/in/henrique-lima-pereira.

GitHub: @Lima-Pereira.