<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of chat boost slots @slots List of boost slots
 */
class ChatBoostSlots implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('slots')]
        private array|null $slots = null,
    ) {
    }

    public function getSlots(): array|null
    {
        return $this->slots;
    }

    public function setSlots(array|null $slots): self
    {
        $this->slots = $slots;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatBoostSlots',
            'slots' => $this->getSlots(),
        ];
    }
}
