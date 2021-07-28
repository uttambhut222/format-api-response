# format-api-response
 A Laravel package to format REST API Response.
 
## Installation

To get started, require this package

- Via Composer

``` bash
 composer require theopeneyes/format-api-response
```

- Via composer.json file

Add the following to the `require` section of your projects `composer.json` file.
``` php
"theopeneyes/format-api-response": "dev-main",
```

Run composer update to download the package

``` bash
 composer update
```

## Usage

```php
use TheOpenEyes\FormatApiResponse\FormatApiResponse;

FormatApiResponse::response($code, $message, $count, $payload);


```
