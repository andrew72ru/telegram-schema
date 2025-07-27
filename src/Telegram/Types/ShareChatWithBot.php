<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Shares a chat after pressing a keyboardButtonTypeRequestChat button with the bot.
 */
class ShareChatWithBot extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat with the bot */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message with the button */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Identifier of the button */
        #[SerializedName('button_id')]
        private int $buttonId,
        /** Identifier of the shared chat */
        #[SerializedName('shared_chat_id')]
        private int $sharedChatId,
        /** Pass true to check that the chat can be shared by the button instead of actually sharing it. Doesn't check bot_is_member and bot_administrator_rights restrictions. */
        #[SerializedName('only_check')]
        private bool $onlyCheck,
    ) {
    }

    /**
     * Get Identifier of the chat with the bot.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat with the bot.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message with the button.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message with the button.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Identifier of the button.
     */
    public function getButtonId(): int
    {
        return $this->buttonId;
    }

    /**
     * Set Identifier of the button.
     */
    public function setButtonId(int $buttonId): self
    {
        $this->buttonId = $buttonId;

        return $this;
    }

    /**
     * Get Identifier of the shared chat.
     */
    public function getSharedChatId(): int
    {
        return $this->sharedChatId;
    }

    /**
     * Set Identifier of the shared chat.
     */
    public function setSharedChatId(int $sharedChatId): self
    {
        $this->sharedChatId = $sharedChatId;

        return $this;
    }

    /**
     * Get Pass true to check that the chat can be shared by the button instead of actually sharing it. Doesn't check bot_is_member and bot_administrator_rights restrictions..
     */
    public function getOnlyCheck(): bool
    {
        return $this->onlyCheck;
    }

    /**
     * Set Pass true to check that the chat can be shared by the button instead of actually sharing it. Doesn't check bot_is_member and bot_administrator_rights restrictions..
     */
    public function setOnlyCheck(bool $onlyCheck): self
    {
        $this->onlyCheck = $onlyCheck;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'shareChatWithBot',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'button_id' => $this->getButtonId(),
            'shared_chat_id' => $this->getSharedChatId(),
            'only_check' => $this->getOnlyCheck(),
        ];
    }
}
