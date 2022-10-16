<?php

declare(strict_types=1);

namespace Owl\Bundle\CompanyBundle\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class CompanyType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'owl.form.common.name',
                'required' => true
            ])
            ->add('nip', TextType::class, [
                'label' => 'owl.form.common.nip',
                'required' => true
            ])
            ->add('city', TextType::class, [
                'label' => 'owl.form.common.city',
                'required' => true
            ])
            ->add('street', TextType::class, [
                'label' => 'owl.form.common.street',
                'required' => true
            ])
            ->add('postCode', TextType::class, [
                'label' => 'owl.form.common.post_code',
                'required' => true
            ])
            ->add('phone', TextType::class, [
                'label' => 'owl.ui.phone',
                'required' => true
            ])
            ->add('email', TextType::class, [
                'label' => 'owl.ui.email',
                'required' => true
            ])
            ->add('trade', TextType::class, [
                'label' => 'owl.ui.trade',
                'required' => false
            ])
            ->add('contactPerson', TextType::class, [
                'label' => 'owl.ui.contact_person',
                'required' => false
            ])
            ->add('description', TextareaType::class, [
                'label' => 'owl.ui.description',
                'attr' => ['rows' => 3],
                'required' => false
            ])
            ->add('comments', TextareaType::class, [
                'label' => 'owl.form.common.comments',
                'attr' => ['rows' => 3],
                'required' => false
            ])
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'owl_company';
    }
}
