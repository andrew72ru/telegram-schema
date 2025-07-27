<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an animated emoji corresponding to a given emoji. Returns a 404 error if the emoji has no animated emoji @emoji The emoji.
 */
class GetAnimatedEmoji extends AnimatedEmoji implements \JsonSerializable
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
            '@type' => 'getAnimatedEmoji',
            'emoji' => $this->getEmoji(),
        ];
    }
}
