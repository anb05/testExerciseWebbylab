<?php
/**
 * Interface VoiceBehavior
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

namespace Contracts;

/**
 * This interface declare the behavior of the Voice of the Animal
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
Interface VoiceBehavior
{
    /**
     * How to the animal speack
     *
     * @return string;
     */
    public function say() : string;
}

