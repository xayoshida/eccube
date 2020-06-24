<?php
namespace Plugin\Sample\Form\Type\Admin;

use Plugin\Sample\Entity\CustomerRank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerRankType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
        $builder->add('customer_rank', ChoiceType::class,
            [
                'label' => 'ランク',
                'required' => true,
                'multiple' => false,
                'expanded' => true,
                'eccube_form_options' => [
                    'auto_render' => true,
                ],
                'choices' => [
                    "通常会員" => 1, "特別会員" => 2,
                ]]);
    }

    // data_classオプションでエンティティのクラス名を指定しています。
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CustomerRank::class,
        ]);
    }
}