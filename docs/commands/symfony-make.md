## Symfony MakerBundle

http://symfony.com/doc/current/bundles/SymfonyMakerBundle/index.html

This bundle provides several commands under the make: namespace. List them all executing this command:
```bash


bin/console list make
```

output:
```bash
 make:command            Creates a new console command class
 make:controller         Creates a new controller class
 make:entity             Creates a new Doctrine entity class

 [...]

 make:validator          Creates a new validator and constraint class
 make:voter              Creates a new security voter class
```

The names of the commands are self-explanatory, but some of them include optional arguments and options. Check them out with the --help option:
```bash
 php bin/console make:controller --help
```


### Make Entity


- eg. `bin/console make:entity PageContent`
- https://symfony.com/doc/current/doctrine.html#creating-an-entity-class
