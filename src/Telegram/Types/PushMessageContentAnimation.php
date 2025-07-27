<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An animation message (GIF-style). @animation Message content; may be null @caption Animation caption @is_pinned True, if the message is a pinned message with the specified content.
 */
class PushMessageContentAnimation extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('animation')]
        private Animation|null $animation = null,
        #[SerializedName('caption')]
        private string $caption,
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    public function getAnimation(): Animation|null
    {
        return $this->animation;
    }

    public function setAnimation(Animation|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    public function getCaption(): string
    {
        return $this->caption;
    }

    public function setCaption(string $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentAnimation',
            'animation' => $this->getAnimation(),
            'caption' => $this->getCaption(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
