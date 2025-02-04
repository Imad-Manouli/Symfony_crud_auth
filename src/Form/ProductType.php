<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name_p', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Name product'
                ]
                ])

            ->add('description_p', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Description'
                ]
                ])

            ->add('prix', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'price'
                ]
                ])

            ->add('qte_p', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'quantity'
                ]
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
