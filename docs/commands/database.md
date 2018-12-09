## Scripts and console commands




### Rebuild database

```bash
bin/console opendevops:rebuild:database
```

### Clear database cache
```bash
bin/console doctrine:cache:clear-metadata && bin/console doctrine:cache:clear-query && bin/console doctrine:cache:clear-result
```


### Doctrine status

```bash
bin/console doctrine:migrations:status
```

### Doctrine preview

```bash
bin/console doctrine:schema:update --dump-sql
```

### Doctrine generate migrations

```bash
bin/console doctrine:migrations:diff
```

### Doctrine run migration 

```bash
bin/console doctrine:migrations:migrate
```


### View Doctrine Mapping Info
```bash
bin/console doctrine:mapping:info
```


### Doctrine generate entities

https://symfony.com/doc/current/doctrine.html#generating-getters-and-setters
 
```bash
bin/console doctrine:generate:entities App/Bundle/DataStore/Entity/AccountingMap
```
