<?php
namespace Plugin\Sample\Repository;

use Eccube\Repository\AbstractRepository;
use Plugin\Sample\Entity\CustomerRank;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CustomerRankRepository extends AbstractRepository
{
    /**
     * ConfigRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CustomerRank::class);
    }

    /**
     * @param int $id
     *
     * @return null|CustomerRank
     */
    public function get($id = 1)
    {
        return $this->find($id);
    }
}