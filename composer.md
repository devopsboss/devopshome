## Composer

### Package info

```
"require": {
    "php": "^7.1.3",
    "ext-iconv": "*",                           // (initial)
    "ext-amqp": "*",                            // ensure php-amqp is installed for AMQP transport with Symfony Messenger
    "cpliakas/git-wrapper": "^2.0",             // A PHP wrapper around the Git command line utility
    "doctrine/doctrine-cache-bundle": "^1.3",   // Symfony Bundle for Doctrine Cache
    "enqueue/messenger-adapter": "^0.1.2",      // This Symfony Messenger transport allows you to use Enqueue to send and receive your messages from all the supported brokers
    "friendsofsymfony/rest-bundle": "^2.3",     // Provides several tools to assist in building REST applications
    "friendsofsymfony/user-bundle": "^2.0",     // TODO: comment
    "jms/serializer-bundle": "^2.3",            // Serialize your data into a requested output format such as JSON, XML, or YAML, and vice versa (FOSRestBundle wants this)
    "lexik/jwt-authentication-bundle": "^2.4",  // TODO: comment
    "liip/monitor-bundle": "^2.7",              // provides a way to run a series of application related health checks
    "nelmio/api-doc-bundle": "~3.2",            // Auto generated api documentation
    "nelmio/cors-bundle": "^1.5",               // TODO: comment
    "php-extended/php-tail": "^2.2",            // Read load files
    "sensio/framework-extra-bundle": "^5.1",    // (initial)
    "sensiolabs/ansi-to-html": "^1.1",          // TODO: comment
    "symfony/asset": "^4.1",                    // (initial)
    "symfony/console": "^4.1",                  // (initial)
    "symfony/expression-language": "^4.1",      // (initial)
    "symfony/flex": "^1.0",                     // (initial)
    "symfony/form": "^4.1",                     // (initial)
    "symfony/framework-bundle": "^4.1",         // (initial)
    "symfony/lts": "^4@dev",                    // (initial)
    "symfony/messenger": "^4.1",                // Message bus and some routing capabilities to send messages within your application and through transports such as message queues
    "symfony/monolog-bundle": "^3.1",           // (initial)
    "symfony/orm-pack": "*",                    // (initial)
    "symfony/process": "^4.1",                  // (initial)
    "symfony/security-bundle": "^4.1",          // (initial)
    "symfony/serializer-pack": "*",             // (initial) and required for symfony/messenger
    "symfony/stopwatch": "^4.1",                // TODO: comment
    "symfony/swiftmailer-bundle": "^3.1",       // (initial)
    "symfony/twig-bundle": "^4.1",              // (initial)
    "symfony/validator": "^4.1",                // (initial)
    "symfony/web-link": "^4.1",                 // (initial)
    "symfony/webpack-encore-pack": "*",         // (initial)
    "symfony/yaml": "^4.1"                      // (initial)
    "willdurand/hateoas-bundle": "^1.3"         // TODO: comment
},
"require-dev": {
    "bmitch/churn-php": "^1.0",                     // Discover files in need of refactoring
    "codeception/codeception": "^2.4",              // Full-stack testing PHP framework
    "codedungeon/phpunit-result-printer": "^0.19",  // PHPUnit Pretty Result Printer
    "dephpend/dephpend": "dev-master",              // Detect flaws in your architecture, before they drag you down into the depths of dependency hell
    "doctrine/doctrine-fixtures-bundle": "^3.0",    //
    "friendsofphp/php-cs-fixer": "^2.12",           // Automatically fix PHP coding standards issues
    "infection/infection": "^0.9.0",                // Mutation Testing framework
    "insolita/unused-scanner": "^1.0",              // Detect unused composer dependencies
    "maglnet/composer-require-checker": "^1.0",     // Check whether a specific composer package uses imported symbols that aren't part of its direct composer dependencies
    "phan/phan": "^0.12.14",                        // Static analyzer for PHP
    "phpmd/phpmd": "^2.6",                          // PHP Mess Detector - looks code code problems
    "phploc/phploc": "^4.0",                        // Measuring the size of a PHP project
    "phpmetrics/phpmetrics": "^2.4",                // PHP Metrics - code quality analysis
    "phpstan/phpstan": "^0.10.2",                   // Static analyzer for PHP
    "phpunit/php-code-coverage": "^6.0",            // Library that provides collection, processing, and rendering functionality for PHP code coverage information.
    "povils/phpmnd": "^2.0",                        // PHP Magic Number Detector
    "roave/security-advisories": "dev-master",      // Security for composer packages
    "sebastian/phpcpd": "^4.0",                     // Tool for quickly measuring the size of a PHP project
    "sensiolabs/security-checker": "^4.1",          // Checks if your application uses dependencies with known security vulnerabilities
    "symfony/debug-pack": "*",                      // (initial)
    "symfony/dotenv": "^4.1",                       // (initial)
    "symfony/maker-bundle": "^1.0",                 // (initial)
    "symfony/profiler-pack": "*",                   // (initial)
    "symfony/test-pack": "^1.0",                    // (initial) phpunit-bridge, css-selector, dom-crawler, browser-kit
    "symfony/web-server-bundle": "^4.1",            // (initial)
    "wapmorgan/php-code-fixer": "^2.0"              // A scanner that checks compatibility of your code with new interpreter versions
},
```


### Config

```
"config": {
    "bin-dir": "/var/local/bin",    // install vendor bin files to /var/local/bin to be used globally
    "preferred-install": {
        "*": "dist"
    },
    "sort-packages": true
},
```



----



### Initial packages from website-skeleton

```json
"require": {
    "php": "^7.1.3",
    "ext-iconv": "*",
    "sensio/framework-extra-bundle": "^5.1",
    "symfony/asset": "^4.1",
    "symfony/console": "^4.1",
    "symfony/expression-language": "^4.1",
    "symfony/flex": "^1.0",
    "symfony/form": "^4.1",
    "symfony/framework-bundle": "^4.1",
    "symfony/lts": "^4@dev",
    "symfony/monolog-bundle": "^3.1",
    "symfony/orm-pack": "*",
    "symfony/process": "^4.1",
    "symfony/security-bundle": "^4.1",
    "symfony/serializer-pack": "*",
    "symfony/swiftmailer-bundle": "^3.1",
    "symfony/twig-bundle": "^4.1",
    "symfony/validator": "^4.1",
    "symfony/web-link": "^4.1",
    "symfony/webpack-encore-pack": "*",
    "symfony/yaml": "^4.1"
},
"require-dev": {
    "symfony/debug-pack": "*",
    "symfony/dotenv": "^4.1",
    "symfony/maker-bundle": "^1.0",
    "symfony/profiler-pack": "*",
    "symfony/test-pack": "^1.0",
    "symfony/web-server-bundle": "^4.1"
},
```

## Extra Packages


### Stopwatch Component (JMSSerializerBundle wants this)

- composer require symfony/stopwatch
- The Stopwatch component provides a way to profile code
- https://packagist.org/packages/symfony/stopwatch


### JMSSerializerBundle (FOSRestBundle wants this)

- composer require jms/serializer-bundle
- JMSSerializerBundle allows you to serialize your data into a requested output format such as JSON, XML, or YAML, and vice versa
- http://jmsyst.com/bundles/JMSSerializerBundle


### FOSRestBundle

- composer require friendsofsymfony/rest-bundle 
- FOSRestBundle provides several tools to assist in building REST applications
- http://symfony.com/doc/master/bundles/FOSRestBundle/1-setting_up_the_bundle.html
- http://symfony.com/doc/master/bundles/FOSRestBundle/2-the-view-layer.html


### Twig (NelmioApiDocBundle wants this)

- composer require symfony/twig-bundle
- Twig, the flexible, fast, and secure template language for PHP 
- https://packagist.org/packages/twig/twig
- https://symfony.com/doc/current/reference/configuration/twig.html


### NelmioApiDocBundle

- composer require nelmio/api-doc-bundle ~3.0@beta
- Auto generated api documentation
- Installing the beta version for now so we can use swagger
- https://github.com/nelmio/NelmioApiDocBundle
- Changed `config/routes/nelmio_api_doc.yaml` to fix `Unable to find file "@NelmioApiDocBundle/Resources/config/routing.yml"`

```
NelmioApiDocBundle:
    resource: "@NelmioApiDocBundle/Resources/config/routing/swaggerui.xml"
    prefix:   /docs
```

### SensioFrameworkExtraBundle

- composer require sensio/framework-extra-bundle
- The default Symfony FrameworkBundle implements a basic but robust and flexible MVC framework. SensioFrameworkExtraBundle extends it to add sweet conventions and annotations. It allows for more concise controllers.
- http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html


### Symfony MakerBundle

- composer require --dev maker
- Symfony Maker helps you create empty commands, controllers, form classes, tests and more so you can forget about writing boilerplate code.
- http://symfony.com/doc/current/bundles/SymfonyMakerBundle/index.html


### DoctrineBundle

- composer require doctrine/doctrine-bundle
- Integrates Doctrine's ORM and DBAL projects into Symfony applications
- http://symfony.com/doc/current/bundles/DoctrineBundle/installation.html#step-1-download-the-bundle


### Doctrine 2 Object Relational Mapper (DoctrineFixturesBundle wants this) 

- composer require doctrine/orm
- Object-Relational-Mapper for PHP
- https://packagist.org/packages/doctrine/orm


### DoctrineFixturesBundle

- composer require --dev doctrine/doctrine-fixtures-bundle
- Fixtures are used to load a "fake" set of data into a database that can then be used for testing or to help give you some interesting data while you're developing your application. 
- http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html



### DoctrineMigrationsBundle

- composer require doctrine/doctrine-migrations-bundle
- The database migrations feature is an extension of the database abstraction layer and offers you the ability to programmatically deploy new versions of your database schema in a safe, easy and standardized way.
- http://symfony.com/doc/current/bundles/DoctrineMigrationsBundle/index.html


### DoctrineCacheBundle

- composer require doctrine/doctrine-cache-bundle
- The DoctrineCacheBundle allows your Symfony application to use different caching systems through the Doctrine Cache library.
- http://symfony.com/doc/current/bundles/DoctrineCacheBundle/index.html


### Symfony Validator Component (FOSUserBundle wants this)

- composer require symfony/validator
- The Validator component provides tools to validate values following the JSR-303 Bean Validation specification.
- http://symfony.com/doc/current/components/validator.html

### SwiftmailerBundle (FOSUserBundle wants this)

- composer require symfony/swiftmailer-bundle
- The swiftmailer key configures Symfony's integration with Swift Mailer, which is responsible for creating and delivering email messages.
- https://symfony.com/doc/current/reference/configuration/swiftmailer.html


### FOSUserBundle

- composer require friendsofsymfony/user-bundle
- The Symfony Security component provides a flexible security framework that allows you to load users from configuration, a database, or anywhere else you can imagine
- http://symfony.com/doc/master/bundles/FOSUserBundle/index.html


### JWT authentication bundle

- composer require lexik/jwt-authentication-bundle
- This bundle provides JWT (Json Web Token) authentication for your Symfony API.
- https://github.com/lexik/LexikJWTAuthenticationBundle


### nelmio cors bundle

- composer require nelmio/cors-bundle
- Adds CORS (Cross-Origin Resource Sharing) headers support in your Symfony2 application
- https://packagist.org/packages/nelmio/cors-bundle


### monolog-bundle

- composer require symfony/monolog-bundle
- Symfony MonologBundle for logging
- https://packagist.org/packages/symfony/monolog-bundle


### hateoas-bundle

- composer require willdurand/hateoas-bundle
- Integration of Hateoas into Symfony2.
- https://packagist.org/packages/willdurand/hateoas-bundle


### Symfony Debug Component (suggested by symfony phpunit bridge)

- composer require --dev symfony/debug
- The Debug component provides tools to ease debugging PHP code
- https://packagist.org/packages/symfony/debug


### Symfony PHPUnit Bridge

- composer require --dev symfony/phpunit-bridge
- Provides utilities for PHPUnit, especially user deprecation notices management
- https://packagist.org/packages/symfony/phpunit-bridge


### Symfony Asset Component (used for docs?)

- composer require symfony/asset
- The Asset component manages URL generation and versioning of web assets such as CSS stylesheets, JavaScript files and image files.
- http://symfony.com/doc/current/components/asset.html


### Symfony Web Profiler Bundle 

- composer require symfony/web-profiler-bundle
- Symfony WebProfilerBundle (eg. to be able to visit _profiler/1d9e52)
- https://packagist.org/packages/symfony/web-profiler-bundle


### Symfony Process Component

- composer require symfony/process
- The Process component executes commands in sub-processes.
- http://symfony.com/doc/current/components/process.html

### DoctrineFixturesGeneratorBundle

- composer require --dev webonaute/doctrine-fixtures-generator-bundle
- Generate Fixture from your existing data in your database
- https://github.com/Webonaute/DoctrineFixturesGeneratorBundle
- https://github.com/Webonaute/DoctrineFixturesGeneratorBundle/blob/master/Resources/doc/index.md
