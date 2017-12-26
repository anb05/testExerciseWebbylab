<?php
/**
 * This file contains a super class for create any animals
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
 * This is a super class for create any animals
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
abstract class Animal
{
    /**
     * In this property stores instance of VoiceBehavior for animal
     */
    private $voice;

    /**
     * This property stores the name of an instance of an animal
     */
    private $name;

    /**
     * This property stores animal species
     */
    protected $animal; 

    /**
     * In this construct initializations property animal
     *
     * @param VoiceBehavior $voice The object of simulate animals voice
     * @param string|null   $name  The name of the animal
     */
    public function __construct(VoiceBehavior $voice, $name = null)
    {
        $this->name = $name;

        $this->voice = $voice;
    }

    /**
     * Animal says
     *
     * @return string
     */
    public function speack()
    {
        return $this->voice->say();
    }

    /**
     * This is changing the name
     *
     * @param string $name the name of the animal
     *
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * This method returns the name of the animal
     *
     * @return string The name of the animal
     */
    public function getName()
    {
        return  $this->name;
    }

    /**
     * This method checks the name of the animal
     *
     * @return bool
     */
    public function hasName()
    {
        if (empty($this->name)) {
            return false;
        }
        return true;
    }

    /**
     * This method set the object of VoiceBehavior
     *
     * @param VoiceBehavior $voice The object of VoiceBehavior
     *
     * @return void
     */
    public function setVoice(VoiceBehavior $voice)
    {
        $this->voice = $voice;
    }

    /**
     * This returns the object VoiceBehavior
     *
     * @return VoiceBehavior
     */
    public function getVoice()
    {
        return $this->voice;
    }

    /**
     * This method checks of instance VoiceBehavior
     *
     * @return bool
     */
    public function hasVoice()
    {
        if (empty($this->voice)) {
            return false;
        }
        return true;
    }

}
