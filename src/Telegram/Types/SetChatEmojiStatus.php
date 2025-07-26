<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the emoji status of a chat. Use chatBoostLevelFeatures.can_set_emoji_status to check whether an emoji status can be set. Requires can_change_info administrator right
 */
class SetChatEmojiStatus extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** New emoji status; pass null to remove emoji status */
        #[SerializedName('emoji_status')]
        private EmojiStatus|null $emojiStatus = null,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get New emoji status; pass null to remove emoji status
     */
    public function getEmojiStatus(): EmojiStatus|null
    {
        return $this->emojiStatus;
    }

    /**
     * Set New emoji status; pass null to remove emoji status
     */
    public function setEmojiStatus(EmojiStatus|null $emojiStatus): self
    {
        $this->emojiStatus = $emojiStatus;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatEmojiStatus',
            'chat_id' => $this->getChatId(),
            'emoji_status' => $this->getEmojiStatus(),
        ];
    }
}
