<?php
namespace Plugin\Sample;

use Eccube\Event\TemplateEvent;
use Plugin\Sample\Repository\CustomerRankRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class Event implements EventSubscriberInterface
{
    /**
     * @var CustomerRankRepository
     */
    protected $ConfigRepository;

    /**
     * ProductReview constructor.
     *
     * @param CustomerRankRepository $ConfigRepository
     */
    public function __construct(CustomerRankRepository $ConfigRepository)
    {
        $this->ConfigRepository = $ConfigRepository;
    }

    /**
     * 配列のキーはイベント名、値は呼び出すメソッド名です。
     *
     * @return array
     */
    public static function getSubscribedEvents()
    {

        return [
            'Customer/edit.twig' => 'CustomerEditTwig',
        ];
    }


    /**
     * @param TemplateEvent $event
     */
    public function CustomerEditTwig(TemplateEvent $event)
    {
        $twig = '@Sample/admin/Customer/edit.twig';
        // addSnippet()関数で指定したテンプレートを<body>タグの下部に追加できます。
        $event->addSnippet($twig);
        $Config = $this->ConfigRepository->get();
       /* $parameters = $event->getParameters();
        $parameters['Cust'] = $Config->getStockQtyShow();
        $event->setParameters($parameters);*/
    }
}