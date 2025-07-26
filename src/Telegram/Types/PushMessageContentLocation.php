<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a location @is_live True, if the location is live @is_pinned True, if the message is a pinned message with the specified content
 */
class PushMessageContentLocation extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('is_live')]
        private bool $isLive,
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    public function getIsLive(): bool
    {
        return $this->isLive;
    }

    public function setIsLive(bool $isLive): self
    {
        $this->isLive = $isLive;

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
            '@type' => 'pushMessageContentLocation',
            'is_live' => $this->getIsLive(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
