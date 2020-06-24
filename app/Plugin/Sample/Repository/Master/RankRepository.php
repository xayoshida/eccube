<?php

namespace Plugin\Sample\Repository\Master;

use Plugin\Sample\Entity\Master\Rank;
use Eccube\Repository\AbstractRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * RankRepository
 */
class RankRepository extends AbstractRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Rank::class);
    }

}