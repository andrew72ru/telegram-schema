<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to an attachment menu bot to be opened in the specified or a chosen chat. Process given target_chat to open the chat.
 */
class InternalLinkTypeAttachmentMenuBot extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Target chat to be opened */
        #[SerializedName('target_chat')]
        private TargetChat|null $targetChat = null,
        /** Username of the bot */
        #[SerializedName('bot_username')]
        private string $botUsername,
        /** URL to be passed to openWebApp */
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    /**
     * Get Target chat to be opened.
     */
    public function getTargetChat(): TargetChat|null
    {
        return $this->targetChat;
    }

    /**
     * Set Target chat to be opened.
     */
    public function setTargetChat(TargetChat|null $targetChat): self
    {
        $this->targetChat = $targetChat;

        return $this;
    }

    /**
     * Get Username of the bot.
     */
    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    /**
     * Set Username of the bot.
     */
    public function setBotUsername(string $botUsername): self
    {
        $this->botUsername = $botUsername;

        return $this;
    }

    /**
     * Get URL to be passed to openWebApp.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL to be passed to openWebApp.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeAttachmentMenuBot',
            'target_chat' => $this->getTargetChat(),
            'bot_username' => $this->getBotUsername(),
            'url' => $this->getUrl(),
        ];
    }
}
