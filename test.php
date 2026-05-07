<?php

var_export([
    'PHP_OS_FAMILY' => PHP_OS_FAMILY,
    'PHP_EOL' => PHP_EOL,
    'json_encode(PHP_EOL)' => json_encode(PHP_EOL),
    'DIRECTORY_SEPARATOR' => DIRECTORY_SEPARATOR,
    '__FILE__' => __FILE__,
    '__DIR__' => __DIR__,
    getcwd(),
    'realpath' => realpath(__DIR__ . '/..'),
    tempnam(),
    sys_get_temp_dir(),
]);