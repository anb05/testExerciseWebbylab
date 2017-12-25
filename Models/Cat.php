<?php
/**
 * This file contains a Cat simulation class
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

use Models\Animal;

/**
 * This class implements a Cat simulation
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
class Cat extends Animal
{
    /**
     * In this construct initializations property Cat
     *
     * @param string|null $name The name of the animal
     */
    public function __construct($name = null)
    {
        parent::__construct($name);

        echo "create object" . $this->animal . "\n";
    }

    /**
     * This method simulate mewing
     *
     * @return string
     */
    public function meow()
    {
        $speech  = $this->animal . " ";

        if (hasName()) {
            $speech .= getName() . " is saying ";
        } else {
            return "You don't have a Cat model!!!\n";
        }

        if (hasVoice()) {
            $speech .= $this->speack();
        } else {
            return "You don't have a Cat model!!!\n";
        }

        return $speech;
    }
}

