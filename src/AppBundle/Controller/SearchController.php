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
                    ->add('text', TextType::class, array(
                        'required' => false,
                    ))
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
        $results = $this->getDoctrine()->getRepository("AppBundle:Owner")->findAll();
        $typeSearch = null;

        if($form->isSubmitted()&&$form->isValid())
        {
            $data = $form->getData();
            $typeSearch = $data['typeSearch'];
            if($data['typeSearch'] == 'farmer')
            {
                $results = $data['text'] == null ? $this->getDoctrine()->getRepository("AppBundle:Owner")->findAll() : $this->getDoctrine()->getRepository("AppBundle:Owner")->findByName($data['text']);
            }
            else if ($data['typeSearch'] == 'product')
            {
                $results = $data['text'] == null ? $this->getDoctrine()->getRepository("AppBundle:Animal")->findAll() : $this->getDoctrine()->getRepository("AppBundle:Animal")->findByName($data['text']);
            }
            else
            {
                $results = $data['text'] == null ? $this->getDoctrine()->getRepository("AppBundle:Recipe")->findAll() : $this->getDoctrine()->getRepository("AppBundle:Recipe")->findByName($data['text']);
            }
        }

        return $this->render('@App/search/results.html.twig', array(
            'form' => $form->createView(),
            'results' => $results,
            'typeSearch' => $typeSearch
        ));
    }
}
