# Instalation
```bash
composer require krzysztofzylka/reflection
```

# Methods
## Get class directory path
```php
\Krzysztofzylka\Reflection\Reflection::getDirectoryPath($objectOrClass)
```
## Get class public property
```php
\Krzysztofzylka\Reflection\Reflection::getPublicPropertyList($object)
```
## Get class comments
```php
\Krzysztofzylka\Reflection\Reflection::getClassComment($object, 'type (not required)')
```
## Get class method comments
```php
\Krzysztofzylka\Reflection\Reflection::getClassMethodComment($object, 'method', 'type (not required)')
```
## Find class method comment
```php
$comments = \Krzysztofzylka\Reflection\Reflection::getClassMethodComment($object, 'method', 'type (not required)')
\Krzysztofzylka\Reflection\Reflection::findClassComment($comments, 'auth')
```
## Get class methods
```php
\Krzysztofzylka\Reflection\Reflection::getClassMethods($objectOrClass)
```