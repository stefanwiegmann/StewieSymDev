# Skeleton bundle for symfony bundle development

## Installation
`git clone git@github.com:stefanwiegmann/skeleton-bundle.git lib/stefanwiegmann/skeleton-bundle/`
### enable
```php
// config/bundles.php
    // ...
    Stefanwiegmann\SkeletonBundle\StefanwiegmannSkeletonBundle::class => ['all' => true],
```

```php
// composer.json
    // ...
    "autoload-dev": {
        "psr-4": {
            "App\\Tests\\": "tests/",
            // ...
            "Stefanwiegmann\\SkeletonBundle\\": "lib/stefanwiegmann/skeleton-bundle/"
        }
    },
    // ...
```

`composer dump-autoload`
