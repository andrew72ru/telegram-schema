<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about saved Telegram Passport elements @elements Telegram Passport elements
 */
class PassportElements implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('elements')]
        private array|null $elements = null,
    ) {
    }

    public function getElements(): array|null
    {
        return $this->elements;
    }

    public function setElements(array|null $elements): self
    {
        $this->elements = $elements;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElements',
            'elements' => $this->getElements(),
        ];
    }
}
