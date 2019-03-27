# Simple Obfuscator
A simple class to encrypt and decrypt strings with a given salt (bijective).

## Installation

    composer require dandjo/simple-obfuscator

## Usage

Instantiate the Obfuscator.

```php
// create a new instance
$salt = 'my-security-by-obscurity';
$obfuscator = new \Dandjo\SimpleObfuscator\SimpleObfuscator($salt);
```

Then you can encrypt your string and decrypt the generated hex string.

```php
$encrypted = $obfuscator->encrypt('4711-foobar');  // $encrypted == "6f927ea5a49b7c"
$decrypted = $obfuscator->decrypt('6f927ea5a49b7c');  // $decrypted === "4711-foobar"
```
