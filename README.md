# car-retnal-2

A Laravel 13 starter for a car-rental website, using PHP 8.3, Livewire 4 (including Alpine.js), Tailwind CSS 4 and Vite 8. The homepage is a preview: the date form validates dates but does not search inventory or make bookings. Vehicle listings, accounts and reservations are future work. The sample images are remotely hosted by Unsplash and require an internet connection in the browser.

## Local setup

Prerequisites: PHP 8.3 with the extensions required by Composer and `pdo_pgsql`, Composer 2, Node.js 24, npm 11 and PostgreSQL 17. Create a dedicated empty development database and a separate database for tests; do not use existing application or production data. Give your local database user the permissions needed to create tables in each database.

```sh
composer install
cp .env.example .env
# Set DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME and DB_PASSWORD in .env.
php artisan key:generate
php artisan migrate
php artisan db:seed
npm install
npm run build
php artisan test --env=testing
php artisan serve
```

Visit http://localhost:8000. For frontend development, run `npm run dev` in a second terminal instead of building after every change. The default seeder intentionally contains no customer or vehicle data. It is safe to run repeatedly. Never commit `.env` files or share the generated key or database credentials.

The current smoke tests do not modify a database. For future database tests, configure a separate test database with environment variables or a local ignored `.env.testing` file; Laravel's `--env=testing` selects it. Run `php artisan migrate --env=testing` only after confirming that it points to that separate database. The example values in `.env.example` are placeholders, not provisioned credentials.

## Validation in the isolated task workspace

Against base revision `0e6545b2cd583ec3713f8167e247d8ce92fb1aab`:

- `composer validate --strict` and `composer check-platform-reqs`: passed on PHP 8.3.36 and Composer 2.7.1.
- `npm install` and `npm run build`: passed on Node 24.22.3 and npm 11.19.1; Vite 8.3.8 built production assets.
- `php artisan migrate --force` with the isolated PostgreSQL 17.12 task database supplied through environment variables: passed all three Laravel migrations. `php artisan db:seed --force` passed.
- `php artisan test --env=testing`: exit 0, 16 assertions; three tests reported warnings because the workspace blocks reading `.env`. An earlier run exposed a Livewire assertion mismatch, which was corrected before the final run.
- `php artisan route:list`: passed. Key generation could not be verified here because the sandbox denied access to `.env` (and injects an application key into the environment).
- Browser/mobile rendering and interactive Alpine behavior were not checked: no browser was available. Git status and diff checks could not run because the isolated Git control directory was inaccessible. The broker owns the resulting commit and independent review; no resulting commit SHA or quality acceptance is available at this stage.
