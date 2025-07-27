<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns outline of a sticker. This is an offline method. Returns a 404 error if the outline isn't known.
 */
class GetStickerOutline extends Outline implements \JsonSerializable
{
    public function __construct(
        /** File identifier of the sticker */
        #[SerializedName('sticker_file_id')]
        private int $stickerFileId,
        /** Pass true to get the outline scaled for animated emoji */
        #[SerializedName('for_animated_emoji')]
        private bool $forAnimatedEmoji,
        /** Pass true to get the outline scaled for clicked animated emoji message */
        #[SerializedName('for_clicked_animated_emoji_message')]
        private bool $forClickedAnimatedEmojiMessage,
    ) {
    }

    /**
     * Get File identifier of the sticker.
     */
    public function getStickerFileId(): int
    {
        return $this->stickerFileId;
    }

    /**
     * Set File identifier of the sticker.
     */
    public function setStickerFileId(int $stickerFileId): self
    {
        $this->stickerFileId = $stickerFileId;

        return $this;
    }

    /**
     * Get Pass true to get the outline scaled for animated emoji.
     */
    public function getForAnimatedEmoji(): bool
    {
        return $this->forAnimatedEmoji;
    }

    /**
     * Set Pass true to get the outline scaled for animated emoji.
     */
    public function setForAnimatedEmoji(bool $forAnimatedEmoji): self
    {
        $this->forAnimatedEmoji = $forAnimatedEmoji;

        return $this;
    }

    /**
     * Get Pass true to get the outline scaled for clicked animated emoji message.
     */
    public function getForClickedAnimatedEmojiMessage(): bool
    {
        return $this->forClickedAnimatedEmojiMessage;
    }

    /**
     * Set Pass true to get the outline scaled for clicked animated emoji message.
     */
    public function setForClickedAnimatedEmojiMessage(bool $forClickedAnimatedEmojiMessage): self
    {
        $this->forClickedAnimatedEmojiMessage = $forClickedAnimatedEmojiMessage;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStickerOutline',
            'sticker_file_id' => $this->getStickerFileId(),
            'for_animated_emoji' => $this->getForAnimatedEmoji(),
            'for_clicked_animated_emoji_message' => $this->getForClickedAnimatedEmojiMessage(),
        ];
    }
}
