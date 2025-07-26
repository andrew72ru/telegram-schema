<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends a message on behalf of a business account; for bots only. Returns the message after it was sent
 */
class SendBusinessMessage extends BusinessMessage implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection on behalf of which to send the request */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** Target chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Information about the message to be replied; pass null if none */
        #[SerializedName('reply_to')]
        private InputMessageReplyTo|null $replyTo = null,
        /** Pass true to disable notification for the message */
        #[SerializedName('disable_notification')]
        private bool $disableNotification,
        /** Pass true if the content of the message must be protected from forwarding and saving */
        #[SerializedName('protect_content')]
        private bool $protectContent,
        /** Identifier of the effect to apply to the message */
        #[SerializedName('effect_id')]
        private int $effectId,
        /** Markup for replying to the message; pass null if none */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** The content of the message to be sent */
        #[SerializedName('input_message_content')]
        private InputMessageContent|null $inputMessageContent = null,
    ) {
    }

    /**
     * Get Unique identifier of business connection on behalf of which to send the request
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection on behalf of which to send the request
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get Target chat
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Target chat
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Information about the message to be replied; pass null if none
     */
    public function getReplyTo(): InputMessageReplyTo|null
    {
        return $this->replyTo;
    }

    /**
     * Set Information about the message to be replied; pass null if none
     */
    public function setReplyTo(InputMessageReplyTo|null $replyTo): self
    {
        $this->replyTo = $replyTo;

        return $this;
    }

    /**
     * Get Pass true to disable notification for the message
     */
    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }

    /**
     * Set Pass true to disable notification for the message
     */
    public function setDisableNotification(bool $disableNotification): self
    {
        $this->disableNotification = $disableNotification;

        return $this;
    }

    /**
     * Get Pass true if the content of the message must be protected from forwarding and saving
     */
    public function getProtectContent(): bool
    {
        return $this->protectContent;
    }

    /**
     * Set Pass true if the content of the message must be protected from forwarding and saving
     */
    public function setProtectContent(bool $protectContent): self
    {
        $this->protectContent = $protectContent;

        return $this;
    }

    /**
     * Get Identifier of the effect to apply to the message
     */
    public function getEffectId(): int
    {
        return $this->effectId;
    }

    /**
     * Set Identifier of the effect to apply to the message
     */
    public function setEffectId(int $effectId): self
    {
        $this->effectId = $effectId;

        return $this;
    }

    /**
     * Get Markup for replying to the message; pass null if none
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set Markup for replying to the message; pass null if none
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    /**
     * Get The content of the message to be sent
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set The content of the message to be sent
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendBusinessMessage',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'chat_id' => $this->getChatId(),
            'reply_to' => $this->getReplyTo(),
            'disable_notification' => $this->getDisableNotification(),
            'protect_content' => $this->getProtectContent(),
            'effect_id' => $this->getEffectId(),
            'reply_markup' => $this->getReplyMarkup(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
