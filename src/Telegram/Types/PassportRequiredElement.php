<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a description of the required Telegram Passport element that was requested by a service @suitable_elements List of Telegram Passport elements any of which is enough to provide.
 */
class PassportRequiredElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('suitable_elements')]
        private array|null $suitableElements = null,
    ) {
    }

    public function getSuitableElements(): array|null
    {
        return $this->suitableElements;
    }

    public function setSuitableElements(array|null $suitableElements): self
    {
        $this->suitableElements = $suitableElements;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportRequiredElement',
            'suitable_elements' => $this->getSuitableElements(),
        ];
    }
}
