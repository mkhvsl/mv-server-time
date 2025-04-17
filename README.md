# Server Time

Returns current server time based on IP using https://worldtimeapi.org.

## Requirements

- PHP 7.4 or higher
- Composer

## Setup

```bash
composer require mkhvsl/mv-server-time
```

## Usage

```bash
<?php

require __DIR__ . '/vendor/autoload.php';

use Mkhvsl\MvServerTime\ServerTime;

$time = (new ServerTime())->now(); // Based on server IP
// or
$time = (new ServerTime())->now('8.8.8.8'); // Based on provided IP

echo $time->format('Y-m-d H:i:s');

?>
```

## Testing

Unit tests are written using PHPUnit.

Run tests:

```bash
./vendor/bin/phpunit tests
```