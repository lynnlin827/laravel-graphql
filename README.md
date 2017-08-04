[![Build Status](https://img.shields.io/travis/lynn80827/laravel-graphql/master.svg?style=flat-square)](https://travis-ci.org/lynn80827/laravel-graphql) [![license](https://img.shields.io/github/license/mashape/apistatus.svg?style=flat-square)](http://lynn.mit-license.org/)


## Installation

```
$ composer install
```

## Technology Stacks

* Laravel - API development
* Postman/Newman - API testing
* Travis - CI

## Usage

Start the built-in server

```
$ php artisan serve
```

Open the GraphiQL

```
http://localhost:8000/graphiql
```

## Test

```
$ newman run tests/postman/GraphQL.postman_collection.json
```


## Deployment

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/lynn80827/laravel-graphql)
