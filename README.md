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