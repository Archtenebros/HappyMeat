<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 03/06/2018
 * Time: 01:48
 */

namespace AppBundle\Form;


use AppBundle\Entity\TypeAnimal;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('text', TextType::class, array(
            'required' => false
        ))
                ->add('typeSearch', ChoiceType::class, array(
                    'choices' => array(
                        'Farmer' => 'farmer',
                        'Product' => 'product',
                        'Recipe' => 'recipe'
                    ),
                    'required' => false,
                ))
                ->add('search', ButtonType::class)
        ;
    }
}