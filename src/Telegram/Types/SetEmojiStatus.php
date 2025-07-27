<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the emoji status of the current user; for Telegram Premium users only @emoji_status New emoji status; pass null to switch to the default badge.
 */
class SetEmojiStatus extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('emoji_status')]
        private EmojiStatus|null $emojiStatus = null,
    ) {
    }

    public function getEmojiStatus(): EmojiStatus|null
    {
        return $this->emojiStatus;
    }

    public function setEmojiStatus(EmojiStatus|null $emojiStatus): self
    {
        $this->emojiStatus = $emojiStatus;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setEmojiStatus',
            'emoji_status' => $this->getEmojiStatus(),
        ];
    }
}
