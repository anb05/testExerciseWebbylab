<?php
/**
 * This file contain a autoload
 *
 * PHP version 7.2
 *
 * @category TestExercise
 *
 * @package ForWebbyLab
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license MIT <http://opensource.org/licenses/MIT>
 *
 * @link https://github.com/anb05/testExerciseWebbylab
 */

declare(strict_types = 1);

/**
 * This is an autoload function
 *
 * @param string $class class namespace
 *
 * @return bool
 */
function autoload($class)
{
    $dirArray = explode("\\", $class);

    $path = realpath(
        __DIR__ . "/../" . DIRECTORY_SEPARATOR .
        implode(DIRECTORY_SEPARATOR, $dirArray) .
        ".php"
    );

    if (is_file($path)) {
        include_once $path;
        return true;
    }
    return false;
}

spl_autoload_register('autoload');
