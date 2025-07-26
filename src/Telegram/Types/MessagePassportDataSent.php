<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Telegram Passport data has been sent to a bot @types List of Telegram Passport element types sent
 */
class MessagePassportDataSent extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('types')]
        private array|null $types = null,
    ) {
    }

    public function getTypes(): array|null
    {
        return $this->types;
    }

    public function setTypes(array|null $types): self
    {
        $this->types = $types;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messagePassportDataSent',
            'types' => $this->getTypes(),
        ];
    }
}
