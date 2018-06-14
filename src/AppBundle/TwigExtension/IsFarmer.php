<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 14/06/2018
 * Time: 22:25
 */

namespace AppBundle\TwigExtension;


use AppBundle\Entity\Owner;

class IsFarmer extends \Twig_Extension
{
    public function getTests()
    {
        return [
            'isfarmer' =>  new \Twig_Function_Method($this, 'isFarmer')
        ];
    }

    /**
     * @param $var
     * @param $instance
     * @return bool
     */
    public function isFarmer($var) {
        return $var instanceof Owner;
    }
}