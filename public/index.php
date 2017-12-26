<?php
/**
 * This is a Front Controller
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

//echo __FILE__ . " " . __LINE__ . "\n";
require_once __DIR__ . "/../Service/autoload.php";

$app = new \Controller\AppController();

$app->run();
