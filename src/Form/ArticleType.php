<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('published',ChoiceType::class, [
                'choices'  => [
                    'published' => 1,
                    'unpublished' => 0,
                ],
            ])
            ->add('url')
            ->add('description')
            ->add('category')
            // ->add('user', EntityType::class, [
            //     'class' => User::class,
            //     'choice_label' => 'firstname',
            //     ])
            ->add('submit', SubmitType:: class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
