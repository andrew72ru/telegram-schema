<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with an animated emoji @animated_emoji The animated emoji @emoji The corresponding emoji.
 */
class MessageAnimatedEmoji extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('animated_emoji')]
        private AnimatedEmoji|null $animatedEmoji = null,
        #[SerializedName('emoji')]
        private string $emoji,
    ) {
    }

    public function getAnimatedEmoji(): AnimatedEmoji|null
    {
        return $this->animatedEmoji;
    }

    public function setAnimatedEmoji(AnimatedEmoji|null $animatedEmoji): self
    {
        $this->animatedEmoji = $animatedEmoji;

        return $this;
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
            '@type' => 'messageAnimatedEmoji',
            'animated_emoji' => $this->getAnimatedEmoji(),
            'emoji' => $this->getEmoji(),
        ];
    }
}
