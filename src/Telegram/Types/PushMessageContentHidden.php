<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A general message with hidden content @is_pinned True, if the message is a pinned message with the specified content
 */
class PushMessageContentHidden extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
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
            '@type' => 'pushMessageContentHidden',
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
