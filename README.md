# SimpleObfuscator
A simple class to encrypt and decrypt strings via a given salt (bijective).

## Basic Usage

Instantiate the Obfuscator
```php
<?php

// create a new instance
$obfuscator = new \SimpleObfuscator\SimpleObfuscator('my-securty-by-obscurity');
```

Then you can encrypt your string and decrypt the generated hex string.

```php
$encrypted = $obfuscator->encrypt('4711-foobar'); // $encrypted == "6f927ea5a49b7c"
$decrypted = $obfuscator->decrypt('6f927ea5a49b7c'); // $decrypted === "4711-foobar"
```
