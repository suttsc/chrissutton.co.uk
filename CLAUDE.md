# chrissutton.co.uk

Personal site. Written as a Laravel 13 app, but deployed as a **static site** on Cloudflare Pages. There is no PHP at runtime: every page must work as plain exported HTML.

## How it deploys

1. `spatie/laravel-export` renders the routes to static HTML in `dist/` (`php artisan export`).
2. `dist/` is committed to git.
3. Pushing to GitHub triggers the Cloudflare Pages deployment, which serves `dist/` as-is. Cloudflare does not run a build, so whatever is committed in `dist/` is what goes live.

A pre-push hook (`.githooks/pre-push`) runs the export on every `git push`. If the export changes `dist/` and those changes are not committed, it blocks the push; commit `dist/` and push again.

After a fresh clone, enable the hook once:

```bash
git config core.hooksPath .githooks
```

## Running the export

The dependencies need PHP 8.4+. Host PHP is 8.3, so run artisan through the `php_84` Docker container (it mounts `/var/www/vhosts`):

```bash
docker exec -u "$(id -u):$(id -g)" -w /var/www/vhosts/chrissutton php_84 php artisan export
```

The hook does this automatically when host PHP is too old, so the container must be running when pushing.

## Checks

Run through the container, same as the export:

- `php artisan test` — feature tests in `tests/Feature` (pages render, export paths are valid).
- `vendor/bin/pint` — code style (`--test` to check only).
- `vendor/bin/phpstan analyse --memory-limit=1G` — Larastan, level 8, config in `phpstan.neon`.

`composer check` runs all three, but the `php_84` container has no Composer installed and the host Composer runs on PHP 8.3, so Composer commands need a Composer binary made available inside the container first.

## Things to know when changing pages

- **New pages must be reachable by the exporter.** It crawls links starting from `/`. The index is intentionally blank (background only) and links to nothing, so every page has to be listed in `paths` in `config/export.php` (as `about` is), or it will not be exported.
- **Use root-relative asset URLs** (`/profile.jpg`, not `profile.jpg`). Pages are exported as `name/index.html`, so relative paths break.
- **Static assets go in `public/`**, which is copied into `dist/` on export. `dist/` is emptied before each export, so never put anything only in `dist/`.
- No database, sessions, forms or anything else that needs a server at request time.

## Pages

- `/` — `resources/views/home.blade.php`: empty layout, just the animated background and footer.
- `/about` — `resources/views/about.blade.php`: the CV / about me page.
- `/articles`, `/article/{article}` — placeholder routes, not currently exported.

Layout lives in `resources/views/components/layout/`. Styling is Tailwind via the CDN script, not a Vite build.
