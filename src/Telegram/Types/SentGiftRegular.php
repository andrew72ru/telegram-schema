<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Regular gift @gift The gift
 */
class SentGiftRegular extends SentGift implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('gift')]
        private Gift|null $gift = null,
    ) {
    }

    public function getGift(): Gift|null
    {
        return $this->gift;
    }

    public function setGift(Gift|null $gift): self
    {
        $this->gift = $gift;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sentGiftRegular',
            'gift' => $this->getGift(),
        ];
    }
}
