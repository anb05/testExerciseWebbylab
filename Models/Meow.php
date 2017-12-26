<?php
/**
 * This file contains a meow simulation class
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

namespace Models;

use Contracts\VoiceBehavior;

/**
 * This class implements a meow simulation
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
class Meow implements VoiceBehavior
{
    /**
     * This method simulates mouw
     *
     * @return string
     */
    public function say() : string
    {
        return "mouw \n";
    }
}

