# KRUSE Craft multisite

Existing Craft CMS 3.9.15 project. Web root: `public_html/`.

## Development setup

1. Install PHP compatible with the locked dependencies (Composer platform is PHP 8.0), Composer, and MySQL. Enable the PHP extensions required by `composer.lock`.
2. Run `composer install` using the committed lockfile; do not run `composer update` as part of setup.
3. Copy `.env.example` to `.env`. Generate a local security key and configure a dedicated local database. Never use production database credentials.
4. Import an authorized database backup into the local database. Obtain media separately and place it in `public_html/media/`. Keep backups and media out of Git.
5. Create writable `storage/` and `public_html/cpresources/` directories.
6. Configure local multisite URLs to match the imported database and local host. Review integrations before running background jobs. Local web email is written to files by `config/app.web.php`.
7. Serve `public_html/` with a PHP-capable web server and route non-file requests to `index.php`.

The database, uploaded media, dependencies, Craft license, and private environment values are intentionally excluded. A code checkout alone does not constitute a running site. Supply `MAILCHIMP_API_KEY` privately only when the integration is needed.

## Cloud setup

Install dependencies from the lockfile and lint PHP before attempting application startup. Database access and media are separate setup requirements. Do not apply project configuration, migrations, or updates to production during environment setup.
