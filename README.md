# php-mini-framework
Mini PHP framework with advanced routing (powered by Symfony routing component) and Blade template system.

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

## License

MIT

Maintained by Sony Arianto Kurniawan <<sony@sony-ak.com>> and contributors.
