## Doctrine Fixtures



### Loading Fixtures

```bash
bin/console doctrine:fixtures:load -n
```


### Generating Fixtures

For example:

```bash
bin/console doctrine:generate:fixture --entity=App:Projects --name="Profession" --overwrite --no-interaction
```

- Ensure this namespace is being used: `App\DataStore\DataFixtures\ORM`
