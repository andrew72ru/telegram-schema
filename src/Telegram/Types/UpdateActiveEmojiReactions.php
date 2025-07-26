<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of active emoji reactions has changed @emojis The new list of active emoji reactions
 */
class UpdateActiveEmojiReactions extends Update implements \JsonSerializable
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
            '@type' => 'updateActiveEmojiReactions',
            'emojis' => $this->getEmojis(),
        ];
    }
}
