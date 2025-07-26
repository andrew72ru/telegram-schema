<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the emoji status of a user; for bots only @user_id Identifier of the user @emoji_status New emoji status; pass null to switch to the default badge
 */
class SetUserEmojiStatus extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('emoji_status')]
        private EmojiStatus|null $emojiStatus = null,
    ) {
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
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
            '@type' => 'setUserEmojiStatus',
            'user_id' => $this->getUserId(),
            'emoji_status' => $this->getEmojiStatus(),
        ];
    }
}
