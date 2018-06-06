<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 04/06/2018
 * Time: 20:02
 */

namespace MyUserBundle\Model;

use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Doctrine\UserManager;
use FOS\UserBundle\Util\CanonicalFieldsUpdater;
use FOS\UserBundle\Util\PasswordUpdaterInterface;

class OwnerManager extends UserManager
{
    public function __construct(PasswordUpdaterInterface $passwordUpdater, CanonicalFieldsUpdater $canonicalFieldsUpdater, ObjectManager $om, $class)
    {
        parent::__construct($passwordUpdater, $canonicalFieldsUpdater, $om, $class);
    }

    public function createOwner()
    {

    }
}