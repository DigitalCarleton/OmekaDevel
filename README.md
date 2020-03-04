# Omeka Kint

This plugin enables Kint PHP debugging in your Omeka site.

## Installation:

Install and activate this plugin on your Omeka site.

You now have access to Kint commands when working on any PHP file within the site.

## Usage (from [Kint](https://github.com/kint-php/kint)):

```php
<?php

Kint::dump($GLOBALS, $_SERVER); // pass any number of parameters
d($GLOBALS, $_SERVER); // or simply use d() as a shorthand

Kint::trace(); // Debug backtrace
d(1); // Debug backtrace shorthand

s($GLOBALS); // Basic output mode

~d($GLOBALS); // Text only output mode

Kint::$enabled_mode = false; // Disable kint
d('Get off my lawn!'); // Debugs no longer have any effect
```

