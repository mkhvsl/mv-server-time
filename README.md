# Server Time

Returns current server time based on IP using https://worldtimeapi.org.

## Requirements

- PHP 7.4 or higher
- Composer

## Setup

```bash
composer install
```

## Usage

```bash
<?php

require __DIR__ . '/vendor/autoload.php';

use Mkhvsl\MvServerTime\ServerTime;

$now = (new ServerTime())->now();

?>
```

## Testing

Unit tests are written using PHPUnit.

Run tests:

```bash
./vendor/bin/phpunit tests
```