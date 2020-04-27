# Dev environment for symfony bundle development

## Installation
`git clone git@github.com:stefanwiegmann/dev.git`
`git submodule update --init --recursive`
`composer install`
### create database symdev
`php bin/console make:migration`
`php bin/console doctrine:migrations:migrate`

## Add existing Submodule
`git submodule add git@github.com:stefanwiegmann/blog.git src/Stefanwiegmann/BlogBundle`

## Bootstrap
Bootstrap is included in the asset folder with version 4.4.1
