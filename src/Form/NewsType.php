<?php

namespace App\Form;

use App\Entity\News;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class)
            ->add('description', CKEditorType::class)
            ->remove('imageName')
            ->add('imageFile', FileType::class, ['label'=> 'Image'])
            ->add('updatedAt', DateTimeType::class, ['widget'=>'single_text', 'label'=>'Mise à jour le'])
            ->add('detail', CKEditorType::class)
            ->add('video', TextType::class)
            ->add('imageFileArticle')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => News::class,
        ]);
    }
}
