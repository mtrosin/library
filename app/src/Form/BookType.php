<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, [
                'label' => 'Título',
                'attr' => ['class' => 'form-control'],
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('description', null, [
                'label' => 'Descrição',
                'attr' => ['class' => 'form-control'],
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('pages', null, [
                'label' => 'Número de páginas',
                'attr' => ['class' => 'form-control'],
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('author', null, [
                'label' => 'Autor',
                'attr' => ['class' => 'form-control'],
                'label_attr' => ['class' => 'form-label'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
