<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user is watching animations sent by the other party by clicking on an animated emoji @emoji The animated emoji
 */
class ChatActionWatchingAnimations extends ChatAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('emoji')]
        private string $emoji,
    ) {
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function setEmoji(string $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionWatchingAnimations',
            'emoji' => $this->getEmoji(),
        ];
    }
}
