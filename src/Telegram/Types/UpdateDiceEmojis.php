<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of supported dice emojis has changed @emojis The new list of supported dice emojis
 */
class UpdateDiceEmojis extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('emojis')]
        private array|null $emojis = null,
    ) {
    }

    public function getEmojis(): array|null
    {
        return $this->emojis;
    }

    public function setEmojis(array|null $emojis): self
    {
        $this->emojis = $emojis;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateDiceEmojis',
            'emojis' => $this->getEmojis(),
        ];
    }
}
