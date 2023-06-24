# mini-php-framework
Mini PHP framework with advanced routing (powered by `Symfony` routing component) and `Blade` template system.

## Requirements
- PHP 8.2.x
- Composer

## What's included?

This project is a skeleton project with some routes sample.

- `/`, home page, code at `src/Application.php` on `index()` function.
- `/about`, about page, code at `src/Application.php` on `about()` function.
- `/template`, a page that load Blade template, code at `src/Application.php` on `template()` function.
- `/content/{id}`, a page that show dynamic route, code at `src/Application.php` on `content()` function.

All routes defined on `src/routes.php`.

## How to run?

1. Make sure you have PHP 8.2.x or above and Composer installed on your system.
2. Go to this project directory.
3. Run `composer install`, it will install all necessary packages and will create `vendor` directory if not exists yet.
4. Run `php -S localhost:3000 -t public`, it will run local web server on port 3000 and serving files on `public` directory.
5. That's it, now to to your browser at access to `http://localhost:3000`
6. Extend it for your further needs.

## What do you mean extend?

- For example if you want to add database connection capabilities, just use PDO or any other method like ORM and others.
- For example if you want to add cache capabilities, just use memcache, redis or any other techniques.
- For example if you want to add user session capabilitites, just use PHP session or any other techniques.
- Just use your imagination to extend and just plug and play other component and adjust accordingly.
- Or even you can refactor the framework, if good then do PR haha.

## How to start into the code?

- Look into `public/index.php`, that's the starting point when we run this framework.
- Look into `composer.json`, that's contains the library needed for this framework.
- Look into `src` directory, there are files there that actually important for this framework. Included from `public/index.php`.
- Look into `templates`, that's the location of Blade template files. Blade template is usually in `xxxx.blade.php` naming format.
- `compiled_templates` directory will act as a cache for the Blade template.
- Look into `src/Config.php`, that's contains some config that used in this framework, you can add or adjust based on your needs.

## Issues, ideas or contribute?

Just submit via GitHub issue or submit your PR. We are happy to review.

## License

MIT

Maintained by Sony Arianto Kurniawan <<sony@sony-ak.com>> and contributors.
