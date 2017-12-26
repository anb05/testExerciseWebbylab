<?php
/**
 * This file contains an Application Controller class
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

namespace Controller;

use Models\Cat;
use Models\Meow;

/**
 * This class executes Application 
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
class AppController
{
    /**
     * This method implements answer of test execise
     *
     * @return void
     */
    public function run()
    {
        $cat = new Cat(new Meow(), 'Garfield');

        echo  $cat->getName() . "\n";
        //echo  ($cat->getName() === 'Garfield' ? 'true' : 'false') . "\n";
        echo $cat->meow() . "\n";

        echo "\nRename Cat!\n";
        $cat->setName("Vasja");
        echo  $cat->getName() . "\n";
        echo $cat->meow() . "\n";
    }
}
