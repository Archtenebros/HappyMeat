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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('text', TextType::class)
                ->add('farmer', CheckboxType::class)
                ->add('product', CheckboxType::class)
                ->add('recipe', CheckboxType::class)
                ->add('typeAnimal', EntityType::class, array(
                    'class' => TypeAnimal::class,
                ))
                ->add('search', ButtonType::class)
        ;
    }
}