<?php
namespace Plugin\Sample\Form\Type\Admin;

use Plugin\Sample\Entity\CustomerRank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TExtType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerRankType extends AbstractType
{
    // フォーム項目を生成します。
    /**
     * {@inheritdoc}
     */
   /* public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('customer_rank', TextType::class);
    }

    // data_classオプションでエンティティのクラス名を指定しています。
    /**
     * {@inheritdoc}
     */
   /* public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CustomerRank::class,
        ]);
    }*/
}