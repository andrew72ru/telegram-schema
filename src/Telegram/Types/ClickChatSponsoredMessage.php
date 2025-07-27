<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs TDLib that the user opened the sponsored chat via the button, the name, the chat photo, a mention in the sponsored message text, or the media in the sponsored message.
 */
class ClickChatSponsoredMessage extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier of the sponsored message */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the sponsored message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Pass true if the media was clicked in the sponsored message */
        #[SerializedName('is_media_click')]
        private bool $isMediaClick,
        /** Pass true if the user expanded the video from the sponsored message fullscreen before the click */
        #[SerializedName('from_fullscreen')]
        private bool $fromFullscreen,
    ) {
    }

    /**
     * Get Chat identifier of the sponsored message.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier of the sponsored message.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the sponsored message.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the sponsored message.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Pass true if the media was clicked in the sponsored message.
     */
    public function getIsMediaClick(): bool
    {
        return $this->isMediaClick;
    }

    /**
     * Set Pass true if the media was clicked in the sponsored message.
     */
    public function setIsMediaClick(bool $isMediaClick): self
    {
        $this->isMediaClick = $isMediaClick;

        return $this;
    }

    /**
     * Get Pass true if the user expanded the video from the sponsored message fullscreen before the click.
     */
    public function getFromFullscreen(): bool
    {
        return $this->fromFullscreen;
    }

    /**
     * Set Pass true if the user expanded the video from the sponsored message fullscreen before the click.
     */
    public function setFromFullscreen(bool $fromFullscreen): self
    {
        $this->fromFullscreen = $fromFullscreen;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'clickChatSponsoredMessage',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'is_media_click' => $this->getIsMediaClick(),
            'from_fullscreen' => $this->getFromFullscreen(),
        ];
    }
}
