## Symfony Debug


### Autowiring

- https://symfony.com/doc/current/service_container/autowiring.html


### Debug the Service Container & List Services

- https://symfony.com/doc/current/service_container/debug.html


You can find out what services are registered with the container using the console. To show all services and the class for each service, run:

```bash
bin/console debug:container
```

By default, only public services are shown, but you can also view private services:

```bash
bin/console debug:container --show-private
```

To see a list of all of the available types that can be used for autowiring, run:

```bash
bin/console debug:autowiring
```



