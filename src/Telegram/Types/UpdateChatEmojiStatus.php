<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Chat emoji status has changed.
 */
class UpdateChatEmojiStatus extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The new chat emoji status; may be null */
        #[SerializedName('emoji_status')]
        private EmojiStatus|null $emojiStatus = null,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get The new chat emoji status; may be null.
     */
    public function getEmojiStatus(): EmojiStatus|null
    {
        return $this->emojiStatus;
    }

    /**
     * Set The new chat emoji status; may be null.
     */
    public function setEmojiStatus(EmojiStatus|null $emojiStatus): self
    {
        $this->emojiStatus = $emojiStatus;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatEmojiStatus',
            'chat_id' => $this->getChatId(),
            'emoji_status' => $this->getEmojiStatus(),
        ];
    }
}
