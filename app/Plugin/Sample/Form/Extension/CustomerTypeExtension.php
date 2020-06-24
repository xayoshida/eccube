<?php

namespace Plugin\Sample\Form\Extension;

use Eccube\Form\Type\Admin\CustomerType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Class Extension
 * @FormExtension
 */

class CustomerTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
            ->add('rank', ChoiceType::class, [
                'label' => 'ランク',
                'required' => true,
                'multiple' => false,
                'expanded' => true,
                'eccube_form_options' => [
                    'auto_render' => true,
                ],
                'choices' => [
                    "通常会員" => 1, "特別会員" => 2,
                ]
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return CustomerType::class;
    }
}