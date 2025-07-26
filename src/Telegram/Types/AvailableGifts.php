<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of gifts that can be sent to another user or channel chat @gifts The list of gifts
 */
class AvailableGifts implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('gifts')]
        private array|null $gifts = null,
    ) {
    }

    public function getGifts(): array|null
    {
        return $this->gifts;
    }

    public function setGifts(array|null $gifts): self
    {
        $this->gifts = $gifts;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'availableGifts',
            'gifts' => $this->getGifts(),
        ];
    }
}
