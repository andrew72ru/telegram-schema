<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes the verification status of a user or a chat by an owned bot
 */
class RemoveMessageSenderBotVerification extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the owned bot, which verified the user or the chat */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Identifier of the user or the supergroup or channel chat, which verification is removed */
        #[SerializedName('verified_id')]
        private MessageSender|null $verifiedId = null,
    ) {
    }

    /**
     * Get Identifier of the owned bot, which verified the user or the chat
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the owned bot, which verified the user or the chat
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Identifier of the user or the supergroup or channel chat, which verification is removed
     */
    public function getVerifiedId(): MessageSender|null
    {
        return $this->verifiedId;
    }

    /**
     * Set Identifier of the user or the supergroup or channel chat, which verification is removed
     */
    public function setVerifiedId(MessageSender|null $verifiedId): self
    {
        $this->verifiedId = $verifiedId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'removeMessageSenderBotVerification',
            'bot_user_id' => $this->getBotUserId(),
            'verified_id' => $this->getVerifiedId(),
        ];
    }
}
