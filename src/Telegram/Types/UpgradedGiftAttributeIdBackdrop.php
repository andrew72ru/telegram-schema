<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Identifier of a gift backdrop @backdrop_id Identifier of the backdrop
 */
class UpgradedGiftAttributeIdBackdrop extends UpgradedGiftAttributeId implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('backdrop_id')]
        private int $backdropId,
    ) {
    }

    public function getBackdropId(): int
    {
        return $this->backdropId;
    }

    public function setBackdropId(int $backdropId): self
    {
        $this->backdropId = $backdropId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'upgradedGiftAttributeIdBackdrop',
            'backdrop_id' => $this->getBackdropId(),
        ];
    }
}
