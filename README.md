# Covet House Project

## Visão geral

Aplicação web construída com Laravel (backend PHP) e uma camada frontend usando Inertia + Vite (Vue 3 + TypeScript). Fornece rotas, controllers, views, assets e testes — um esqueleto moderno baseado em Laravel + Inertia.

Tecnologias principais:
- PHP 8.2+
- Laravel ^12
- Inertia.js (inertiajs/inertia-laravel)
- Vite + Vue 3 + TypeScript
- Node.js / npm
- Composer

## Requisitos do projeto

- PHP: ^8.2 (ver `composer.json`)
- Laravel: ^12 (ver `composer.json`)
- Node.js: compatível com Vite 7 (recomenda-se Node >= 16)
- npm ou pnpm (projeto usa scripts npm)
- Banco de dados: MySQL, PostgreSQL, SQLite etc. (configurável via `.env`)

## Dependências relevantes

Dependências PHP principais (extraídas de `composer.json`):
- inertiajs/inertia-laravel ^2.0
- laravel/fortify ^1.30
- laravel/framework ^12.0
- laravel/tinker ^2.10.1
- laravel/wayfinder ^0.1.9

Dependências JS principais (extraídas de `package.json`):
- vue ^3.5.13
- @inertiajs/vue3 ^2.1.0
- vite ^7.0.4
- tailwindcss ^4.1.1
- typescript ^5.2.2

Consulte `composer.json` e `package.json` para a lista completa de dependências e versões.

## Estrutura do projeto (visão rápida)

- `app/` - Lógica da aplicação (Models, Controllers, Providers, Middleware, Actions)
- `config/` - Arquivos de configuração do Laravel
- `database/` - Migrations, factories e seeders
- `public/` - Arquivos públicos (entrada do app, assets compilados)
- `resources/js/` - Código frontend (Inertia, componentes, páginas, routes)
- `resources/css/` - Estilos
- `routes/` - Rotas (`web.php`, `console.php`, `settings.php`)
- `tests/` - Testes de unidade e feature

## Instalação (desenvolvimento)

1. Clone o repositório:

```bash
git clone <repo-url> covet-house-project
cd covet-house-project
```

2. Instale dependências PHP:

```bash
composer install
```

3. Copie o arquivo de ambiente e configure as variáveis (DB, mail, etc):

```bash
cp .env.example .env
# Edite .env conforme necessário (DB_CONNECTION, DB_DATABASE, MAIL_* etc.)
php artisan key:generate
```

4. Instale dependências Node (frontend):

```bash
npm install
```

5. Execute as migrations e (opcional) seeders:

```bash
php artisan migrate
php artisan db:seed    # opcional
```

6. (Opcional) crie o arquivo de banco sqlite para dev, se preferir:

```bash
touch database/database.sqlite
# e ajuste DB_CONNECTION=sqlite no .env
```

7. Crie o link de storage (se necessário):

```bash
php artisan storage:link
```

8. Inicie o ambiente de desenvolvimento (duas janelas/terminais):

```bash
# 1) Assets (Vite) com hot reload
npm run dev

# 2) Backend Laravel
php artisan serve --host=127.0.0.1 --port=8000
```

Acesse http://127.0.0.1:8000

## Scripts úteis

Scripts npm (trechos de `package.json`):

- `npm run dev` — inicia o Vite (desenvolvimento)
- `npm run build` — build de produção (Vite)
- `npm run build:ssr` — build para SSR (quando aplicável)
- `npm run lint` — roda ESLint
- `npm run format` — formata código com Prettier

Scripts composer úteis (trechos de `composer.json`):

- `composer run-script setup` — script de configuração (`composer install`, copia .env, gera chave, migra e builda assets). Use com cuidado em produção.
- `composer run-script dev` — script composto que pode executar servidor, queue e Vite em paralelo (se desejar usar)
- `composer run-script test` — limpa config e roda testes via `php artisan test`

Exemplo rápido para setup inicial (local):

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
php artisan migrate
```

Ou use o script definido no composer:

```bash
composer run-script setup
```

## Testes

Execute os testes PHP com PHPUnit / Artisan:

```bash
php artisan test
# ou
vendor/bin/phpunit
```

## Build / Produção

1. Ajuste variáveis no `.env` de produção.
2. Instale dependências sem dev e otimize autoload:

```bash
composer install --no-dev --optimize-autoloader
npm ci --production
```

3. Compile assets:

```bash
npm run build
```

4. Cache e otimizações do framework:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

5. Execute migrations (somente quando seguro):

```bash
php artisan migrate --force
```

## Observações operacionais

- Jobs/queues: configure `QUEUE_CONNECTION` e rode `php artisan queue:work` ou use um supervisor/serviço.
- Agendamentos: adicione o cron para `php artisan schedule:run` a cada minuto.
- Logs e debugging: veja `storage/logs/`.

## Contribuindo

1. Abra uma issue descrevendo a mudança desejada.
2. Faça um fork e crie uma branch com um nome descritivo.
3. Faça commits pequenos e claros.
4. Abra um pull request contra a branch principal (`main`) com descrição do que foi feito.

Sugestão: adicione um `CONTRIBUTING.md` e `CODE_OF_CONDUCT.md` para padronizar contribuições.

## Licença

Este projeto usa a licença MIT (ver `composer.json`).

---

