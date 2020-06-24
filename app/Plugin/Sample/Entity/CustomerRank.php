<?php
namespace Plugin\Sample\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\AbstractEntity;

/**
 * Config
 *
 * @ORM\Table(name="sample_customer_rank")
 * @ORM\Entity(repositoryClass="Plugin\Sample\Repository\CustomerRankRepository")
 */
class CustomerRank extends AbstractEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    // privateでプロパティ$stock_qty_showを定義します。
    // @ORM\Columnでプロパティ$stock_qty_showをDBテーブルのカラムにマッピングしています。
    /**
     * @var int
     *
     * @ORM\Column(name="customer_rank", type="string", nullable=false);
     */
    private $customer_rank;

    /**
     * @var float
     *
     * @ORM\Column(name="discount_rate", type = "float", nullable=false);
     */
    private $discount_rate;

    // プロパティ$idのGetterメソッドを定義します。
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    // プロパティ$stock_qty_showのGetterメソッドを定義します。
    /**
     * Get StockQtyShow
     *
     * @return int
     */
    public function getCustomerRank()
    {
        return $this->customer_rank;
    }

    // プロパティ$stock_qty_showのSetterメソッドを定義します。
    /**
     * Set $qty
     *
     * @param int $qty
     *
     * @return $this;
     */
    public function setCustomerRank($rank)
    {
        $this->customer_rank = $rank;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountRate()
    {
        return $this->discount_rate;
    }

    /**
     * @param mixed $discount_rate
     * @return $this
     */
    public function setDiscountRate($discount_rate)
    {
        $this->discount_rate = $discount_rate;
        return $this;
    }
}