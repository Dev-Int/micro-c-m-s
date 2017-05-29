<?php

namespace MicroCMS\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

/**
 * Description of ArticleType
 *
 * @author dev-int
 */
class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('title', TextType::class)
                ->add('content', TextareaType::class);
    }

    public function getBlockPrefix()
    {
        return 'article';
    }
}
