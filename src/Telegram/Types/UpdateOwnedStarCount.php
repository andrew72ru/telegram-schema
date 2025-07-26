<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The number of Telegram Stars owned by the current user has changed @star_amount The new amount of owned Telegram Stars
 */
class UpdateOwnedStarCount extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('star_amount')]
        private StarAmount|null $starAmount = null,
    ) {
    }

    public function getStarAmount(): StarAmount|null
    {
        return $this->starAmount;
    }

    public function setStarAmount(StarAmount|null $starAmount): self
    {
        $this->starAmount = $starAmount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateOwnedStarCount',
            'star_amount' => $this->getStarAmount(),
        ];
    }
}
