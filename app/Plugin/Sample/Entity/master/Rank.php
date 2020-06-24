<?php

namespace Plugin\Sample\Entity\Master;

use Doctrine\ORM\Mapping as ORM;


/**
 * Rank
 *
 * @ORM\Table(name="sample_mtb_rank")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Plugin\Sample\Repository\Master\RankRepository")
 * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
 */
class Rank extends \Eccube\Entity\Master\AbstractMasterEntity
{
}