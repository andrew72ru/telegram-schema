<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a message effect. Returns a 404 error if the effect is not found @effect_id Unique identifier of the effect
 */
class GetMessageEffect extends MessageEffect implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('effect_id')]
        private int $effectId,
    ) {
    }

    public function getEffectId(): int
    {
        return $this->effectId;
    }

    public function setEffectId(int $effectId): self
    {
        $this->effectId = $effectId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMessageEffect',
            'effect_id' => $this->getEffectId(),
        ];
    }
}
