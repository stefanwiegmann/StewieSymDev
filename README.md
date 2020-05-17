StewieSymDev
============

StewieSymDev is a Symfony application for local bundle development. Git submodules under /lib include

- StewieUserBundle
- StewieWikiBundle

## Installation
`git clone git@github.com:stefanwiegmann/dev.git`
`git submodule update --init --recursive`
`composer install`
### create database symdev
`php bin/console make:migration`
`php bin/console doctrine:migrations:migrate`

## Add existing Submodule
`git submodule add git@github.com:stefanwiegmann/StewieBlogBundle.git lib/stewie/blog-bundle/`

## Bootstrap
Bootstrap is included in the asset folder with version 4.5.0

## License

See the bundled [LICENSE](https://github.com/stefanwiegmann/StewieSymDev/blob/master/LICENSE.txt) file.
