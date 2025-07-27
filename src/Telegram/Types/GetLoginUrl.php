<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an HTTP URL which can be used to automatically authorize the user on a website after clicking an inline button of type inlineKeyboardButtonTypeLoginUrl.
 */
class GetLoginUrl extends HttpUrl implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier of the message with the button */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message identifier of the message with the button */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Button identifier */
        #[SerializedName('button_id')]
        private int $buttonId,
        /** Pass true to allow the bot to send messages to the current user */
        #[SerializedName('allow_write_access')]
        private bool $allowWriteAccess,
    ) {
    }

    /**
     * Get Chat identifier of the message with the button.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier of the message with the button.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Message identifier of the message with the button.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Message identifier of the message with the button.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Button identifier.
     */
    public function getButtonId(): int
    {
        return $this->buttonId;
    }

    /**
     * Set Button identifier.
     */
    public function setButtonId(int $buttonId): self
    {
        $this->buttonId = $buttonId;

        return $this;
    }

    /**
     * Get Pass true to allow the bot to send messages to the current user.
     */
    public function getAllowWriteAccess(): bool
    {
        return $this->allowWriteAccess;
    }

    /**
     * Set Pass true to allow the bot to send messages to the current user.
     */
    public function setAllowWriteAccess(bool $allowWriteAccess): self
    {
        $this->allowWriteAccess = $allowWriteAccess;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getLoginUrl',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'button_id' => $this->getButtonId(),
            'allow_write_access' => $this->getAllowWriteAccess(),
        ];
    }
}
