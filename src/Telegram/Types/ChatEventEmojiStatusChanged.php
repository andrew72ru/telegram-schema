<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat emoji status was changed @old_emoji_status Previous emoji status; may be null if none @new_emoji_status New emoji status; may be null if none
 */
class ChatEventEmojiStatusChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_emoji_status')]
        private EmojiStatus|null $oldEmojiStatus = null,
        #[SerializedName('new_emoji_status')]
        private EmojiStatus|null $newEmojiStatus = null,
    ) {
    }

    public function getOldEmojiStatus(): EmojiStatus|null
    {
        return $this->oldEmojiStatus;
    }

    public function setOldEmojiStatus(EmojiStatus|null $oldEmojiStatus): self
    {
        $this->oldEmojiStatus = $oldEmojiStatus;

        return $this;
    }

    public function getNewEmojiStatus(): EmojiStatus|null
    {
        return $this->newEmojiStatus;
    }

    public function setNewEmojiStatus(EmojiStatus|null $newEmojiStatus): self
    {
        $this->newEmojiStatus = $newEmojiStatus;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventEmojiStatusChanged',
            'old_emoji_status' => $this->getOldEmojiStatus(),
            'new_emoji_status' => $this->getNewEmojiStatus(),
        ];
    }
}
