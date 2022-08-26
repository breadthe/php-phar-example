# PHP CLI script that responds with serialized JSON

A basic PHP/composer project with the singular purpose to be bundled into a PHAR and executed at the command line.

This is a companion to the [Tauri/Vite/PHP demo](https://github.com/breadthe/tauri-vite-php) which shows how a desktop app might communicate with a PHP script.

## Generating the PHAR

The easiest way to generate a PHAR from a PHP project or script is to install [Box](https://github.com/box-project/box) globally on your system, then run `box compile` inside the project folder.
