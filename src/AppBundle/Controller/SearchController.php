<?php

namespace AppBundle\Controller;

use AppBundle\Form\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SearchController extends Controller
{
    public function farmersAction(Request $request)
    {
        $form = $this->createFormBuilder(null)
                    ->add('text', TextType::class)
                    ->add('typeSearch', ChoiceType::class, array(
                        'choices' => array(
                            'Farmer' => 'farmer',
                            'Product' => 'product',
                            'Recipe' => 'recipe'
                        ),
                        'preferred_choices' => array('Farmer' => 'farmer')
                    ))
                    ->add('search', SubmitType::class)
                    ->getForm();
        $form->handleRequest($request);
        $results = null;

        if($form->isSubmitted()&&$form->isValid())
        {
            $data = $form->getData();
            if($data['typeSearch'] = 'farmer')
            {
                $results = $this->getDoctrine()->getRepository("AppBundle:Owner")->findBy(array("name" => $data['text']));
            } else if ($data['typeSearch'] = 'product')
            {
                $results = $this->getDoctrine()->getRepository("AppBundle:Animal")->findBy(array("title" => $data['text']));
            } else {
                $results = $this->getDoctrine()->getRepository("AppBundle:Recipe")->findBy(array("title" => $data['text']));
            }
        }

        return $this->render('@App/search/farmers.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
