<?php

namespace Plugin\Sample\Form\Extension;

use Eccube\Form\Type\Front\EntryType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Plugin\Sample\Form\Type\Admin\CustomerRankType;

/**
 * Class Extension
 * @FormExtension
 */

class EntryTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rank', CustomerRankType::class
                /*,[
                'label' => 'ランク',
                'required' => true,
                'multiple' => false,
                'expanded' => true,
              'eccube_form_options' => [
                    'auto_render' => true,
                ],
               'choices' => [
                    "通常会員" => 0, "特別会員" => 1,
                ]
            ]*/
                );
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return EntryType::class;
    }
}