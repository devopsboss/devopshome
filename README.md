# Devops Home App

## Requirements

- <del>yarn    - https://yarnpkg.com/lang/en/docs/install/#windows-stable
- nodejs & npm - https://nodejs.org/en/


## Install

```
clone this repo
composer install
```

## Frontend assets

If you want to re-compile the frontend assets execute:
```
npm install
npm run build
```

Update npm packages
```
npm update
```



### npm packages

```
npm install @symfony/webpack-encore --dev      // asset builder
npm install bootstrap --dev                    // bootstrap for ui design
npm install jquery --dev                       // required for bootstrap
npm install popper.js --dev                    // required for bootstrap
npm install prismjs --dev                      // syntax highlighting
npm install sass-loader node-sass --dev        // compile sass into css
npm install webpack-notifier --dev             // asset builder
```



### composer

```


```

----

### TODO - entities


```
TaskCommand
- id
- command
- arguments

TaskCommandHistory
- id
- task_command
- log_name

Project
- id
- name
- descripton
- type (remote-server, this-server, vagrant-share)

ProjectTaskCommands (project_taskcommands)
- id
- project
- task_command
- status

```



### TODO





- [ ] https://bitbucket.org/open-devops/opendevops-app/issues/31/usr-local-bin-as-commands

testing packages

<del>composer require --dev phpunit/phpunit</del>
- [x] composer require --dev phpunit/php-code-coverage
- [x] composer require --dev codeception/codeception
- [x] composer require --dev codedungeon/phpunit-result-printer

code quality packages

- [x] composer require --dev roave/security-advisories:dev-master
- [x] composer require --dev friendsofphp/php-cs-fixer
- [x] composer require --dev wapmorgan/php-code-fixer
- [x] composer require --dev phpmd/phpmd
- [x] composer require --dev phpstan/phpstan
- [x] composer require --dev phpmetrics/phpmetrics
- [x] composer require --dev infection/infection
- [x] composer require --dev maglnet/composer-require-checker
- [X] composer require --dev insolita/unused-scanner
- [x] composer require --dev povils/phpmnd
- [x] composer require --dev dephpend/dephpend:dev-master
- [x] composer require --dev bmitch/churn-php
- [x] composer require --dev phploc/phploc
- [x] composer require --dev sebastian/phpcpd
- [x] composer require --dev sensiolabs/security-checker



- [x] remove https://bootswatch.com/
- [ ] https://bitbucket.org/opendevops/opendevops/issues/18/routing
- [x] https://bitbucket.org/opendevops/opendevops/issues/17/symfony-frontend-install-bootstrap


- [ ] git command \App\Command\GitCommand
<del>setup adminlte-bundle https://bitbucket.org/opendevops/opendevops/issues/15/setup-adminlte-bundle</del>
- [ ] setup phan/phan https://bitbucket.org/opendevops/opendevops/issues/16/setup-phan






### Install

```bash
bin/console opendevops:app:install
```


### Rebuild

```bash
bin/console opendevops:app:rebuild
```

### Database rebuild

```bash
bin/console opendevops:rebuild:database
```


bin/console doctrine:migrations:diff
bin/console doctrine:migrations:migrate
