## Installation

```
composer install
pnpm install
```

Add a file `server/config.php` with these keys:

```
<?php

define("DB_URL", "localhost");
define("DB_USER", "root");
define("DB_PASS", "changeme");
define("DB_DB", "goatabase");
define("BASE_URL", "the base url for where this is being run");
define("JWT_KEY", "secret key");

?>
```

## Running

To start up the local php server:
```
node start
```

To start up the php-components watcher:

```
npm run watch
```