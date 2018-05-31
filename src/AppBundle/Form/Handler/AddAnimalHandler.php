<?php

namespace AppBundle\Form\Handler;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class AddAnimalHandler
{
    protected $form;
    protected $request;
    protected $em;

    /**
     * @param \Symfony\Component\Form\Form $form
     * @param \Symfony\Component\HttpFoundation\RequestStack $request
     * @param \Doctrine\ORM\EntityManager $em
     **/
    function __construct(Form $form, RequestStack $request, EntityManager $em)
    {
        $this->form = $form;
        $this->request = $request->getCurrentRequest();
        $this->em = $em;
    }

    /**
     * @return bool
     **/
    function process()
    {
        $this->form->handleRequest($this->request);

        if ($this->request->isMethod('post') && $this->form->isValid()) {
            return true;
        }
        return false;
    }

    /**
     * @return \Symfony\Component\Form\Form
     **/
    function getForm()
    {
        return $this->form;
    }

    protected function onSuccess()
    {
        //DO the persistance
    }
}

