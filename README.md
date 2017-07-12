## Selami Example App Skeleton

[![Build Status](https://travis-ci.org/selamiphp/selami-skeleton.svg?branch=master)](https://travis-ci.org/selamiphp/selami-skeleton) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/selamiphp/selami-skeleton/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/selamiphp/selami-skeleton/?branch=master)

### Installation

```bash
composer create-project selami/selami-skeleton myApp
cd myApp
cp config/autoload/local.php.dist config/autoload/local.php
```

### Testing locally

```bash
bin/console server:run
```

### Available routes with the default installation:

* http://127.0.0.1:8080/
* http://127.0.0.1:8080/category/test-category-slug
* http://127.0.0.1:8080/2017/05/test-json-slug


