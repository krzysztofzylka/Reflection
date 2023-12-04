<?php

use Krzysztofzylka\Reflection\Reflection as ReflectionAlias;

include('test.php');
include('../vendor/autoload.php');

$object = new test();

echo '<pre>';
var_dump([
    'getDirectoryPath' => ReflectionAlias::getDirectoryPath(test::class),
    'publicPropertyList' => ReflectionAlias::getPublicPropertyList($object),
    'getClassComment' => ReflectionAlias::getClassComment($object),
    'getClassMethodComment' => ReflectionAlias::getClassMethodComment($object, 'method'),
    'findClassComment' => ReflectionAlias::findClassComment(ReflectionAlias::getClassMethodComment($object, 'method'), 'auth'),
    'getClassMethods' => ReflectionAlias::getClassMethods($object)
]);