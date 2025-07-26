<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a button of type inlineKeyboardButtonTypeLoginUrl. The method needs to be called when the user presses the button
 */
class GetLoginUrlInfo extends LoginUrlInfo implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier of the message with the button */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message identifier of the message with the button. The message must not be scheduled */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Button identifier */
        #[SerializedName('button_id')]
        private int $buttonId,
    ) {
    }

    /**
     * Get Chat identifier of the message with the button
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier of the message with the button
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Message identifier of the message with the button. The message must not be scheduled
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Message identifier of the message with the button. The message must not be scheduled
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Button identifier
     */
    public function getButtonId(): int
    {
        return $this->buttonId;
    }

    /**
     * Set Button identifier
     */
    public function setButtonId(int $buttonId): self
    {
        $this->buttonId = $buttonId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getLoginUrlInfo',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'button_id' => $this->getButtonId(),
        ];
    }
}
