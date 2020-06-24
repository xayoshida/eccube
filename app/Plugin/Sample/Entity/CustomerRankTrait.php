<?php

namespace Plugin\Sample\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Eccube\EntityExtension("Eccube\Entity\Customer")
 */
trait CustomerRankTrait {

    /**
     * @ORM\Column(name="customer_rank_id", type="smallint", length=5)
     * @Assert\NotBlank()
     * @Eccube\FormAppend(
     *  auto_render=true,
     *  type="\Symfony\Component\Form\Extension\Core\Type\ChoiceType",
     *  options={
     *    "required": true,
     *    "label": "ランク",
     *     "multiple": false,
     *     "expanded": true,
     *     "choices": {"通常会員": 1, "特別会員": 2,},
     *  }
     * )
     */
    private $rank;

    public function getRank() {
        return $this->rank;
    }

    public function setRank($rank) {
        $this->rank = $rank;

        return $this;
    }
}