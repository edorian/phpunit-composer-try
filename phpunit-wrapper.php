<?php

set_include_path(
    get_include_path() .
    PATH_SEPARATOR .
    __DIR__ . '/../../pear-pear.phpunit.de/PHP_CodeCoverage' .
    PATH_SEPARATOR .
    __DIR__ . '/../../pear-pear.phpunit.de/PHPUnit' .
    PATH_SEPARATOR .
    __DIR__ . '/../../pear-pear.phpunit.de/PHPUnit_MockObject' .
    PATH_SEPARATOR .
    __DIR__ . '/../../pear-pear.phpunit.de/PHP_Timer' .
    PATH_SEPARATOR .
    __DIR__ . '/../../pear-pear.phpunit.de/PHP_TokenStream' .
    PATH_SEPARATOR .
    __DIR__ . '/../../pear-pear.phpunit.de/Text_Template' .
    PATH_SEPARATOR .
    __DIR__ . '/../../pear-pear.phpunit.de/File_Iterator' .
    PATH_SEPARATOR .
    __DIR__ . '/../../pear-pear.phpunit.de/PHP_Invoker' .
    PATH_SEPARATOR .
    __DIR__ . '/../../pear-pear.phpunit.de/PHPUnit_Story' .
    PATH_SEPARATOR .
    __DIR__ . '/../../pear-pear.phpunit.de/PHPUnit_Selenium' .
    PATH_SEPARATOR .
    __DIR__ . '/../../pear-pear.phpunit.de/DbUnit' .
    PATH_SEPARATOR .
    __DIR__ . '/../../pear-pear.symfony-project.com/YAML/'
);

require __DIR__ . '/../../pear-pear.phpunit.de/PHPUnit/bin/phpunit';
