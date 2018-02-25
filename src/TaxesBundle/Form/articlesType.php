<?php

namespace TaxesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class articlesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('labelName', TextType::class, array(
            'constraints' => array(
                new NotBlank(),
            ),
            'attr' => array(
                'maxlength' => 100
            ),
        ))
        ->add('description', TextareaType::class, array(
            'required' => false,
            'attr' => array(
                'maxlength' => 255
            ),
        ))

        ->add('amountHt', TextType::class, array(
            'constraints' => array(
                new NotBlank(),
                new GreaterThan(0)
            )
        ))
        ->add('save', SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TaxesBundle\Entity\articles'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'taxesbundle_articles';
    }


}
