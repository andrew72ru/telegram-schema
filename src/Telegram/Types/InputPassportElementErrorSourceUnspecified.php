<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The element contains an error in an unspecified place. The error will be considered resolved when new data is added @element_hash Current hash of the entire element
 */
class InputPassportElementErrorSourceUnspecified extends InputPassportElementErrorSource implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('element_hash')]
        private string $elementHash,
    ) {
    }

    public function getElementHash(): string
    {
        return $this->elementHash;
    }

    public function setElementHash(string $elementHash): self
    {
        $this->elementHash = $elementHash;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementErrorSourceUnspecified',
            'element_hash' => $this->getElementHash(),
        ];
    }
}
