<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the verification status of a user or a chat by an owned bot.
 */
class SetMessageSenderBotVerification extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the owned bot, which will verify the user or the chat */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Identifier of the user or the supergroup or channel chat, which will be verified by the bot */
        #[SerializedName('verified_id')]
        private MessageSender|null $verifiedId = null,
        /** Custom description of verification reason; 0-getOption("bot_verification_custom_description_length_max"). */
        #[SerializedName('custom_description')]
        private string $customDescription,
    ) {
    }

    /**
     * Get Identifier of the owned bot, which will verify the user or the chat.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the owned bot, which will verify the user or the chat.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Identifier of the user or the supergroup or channel chat, which will be verified by the bot.
     */
    public function getVerifiedId(): MessageSender|null
    {
        return $this->verifiedId;
    }

    /**
     * Set Identifier of the user or the supergroup or channel chat, which will be verified by the bot.
     */
    public function setVerifiedId(MessageSender|null $verifiedId): self
    {
        $this->verifiedId = $verifiedId;

        return $this;
    }

    /**
     * Get Custom description of verification reason; 0-getOption("bot_verification_custom_description_length_max")..
     */
    public function getCustomDescription(): string
    {
        return $this->customDescription;
    }

    /**
     * Set Custom description of verification reason; 0-getOption("bot_verification_custom_description_length_max")..
     */
    public function setCustomDescription(string $customDescription): self
    {
        $this->customDescription = $customDescription;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setMessageSenderBotVerification',
            'bot_user_id' => $this->getBotUserId(),
            'verified_id' => $this->getVerifiedId(),
            'custom_description' => $this->getCustomDescription(),
        ];
    }
}
