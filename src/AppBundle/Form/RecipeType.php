<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecipeType extends ArticleType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('typeAnimal', EntityType::class, array(
                    'choice_label' => 'Animal Type',
                    'class' => 'AppBundle\Entity\TypeAnimal',
                ))
                ->add('ingredients', CollectionType::class, array(
                    "allow_add" => true,
                    "entry_type" => IngredientType::class,
                )); //TODO Jimmy regarde https://symfony.com/doc/3.4/reference/forms/types/collection.html pour le côté client
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Recipe'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_recipe';
    }


}
