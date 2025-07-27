<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a bot connected to a business account.
 */
class BusinessConnectedBot implements \JsonSerializable
{
    public function __construct(
        /** User identifier of the bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Private chats that will be accessible to the bot */
        #[SerializedName('recipients')]
        private BusinessRecipients|null $recipients = null,
        /** Rights of the bot */
        #[SerializedName('rights')]
        private BusinessBotRights|null $rights = null,
    ) {
    }

    /**
     * Get User identifier of the bot.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set User identifier of the bot.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Private chats that will be accessible to the bot.
     */
    public function getRecipients(): BusinessRecipients|null
    {
        return $this->recipients;
    }

    /**
     * Set Private chats that will be accessible to the bot.
     */
    public function setRecipients(BusinessRecipients|null $recipients): self
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * Get Rights of the bot.
     */
    public function getRights(): BusinessBotRights|null
    {
        return $this->rights;
    }

    /**
     * Set Rights of the bot.
     */
    public function setRights(BusinessBotRights|null $rights): self
    {
        $this->rights = $rights;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessConnectedBot',
            'bot_user_id' => $this->getBotUserId(),
            'recipients' => $this->getRecipients(),
            'rights' => $this->getRights(),
        ];
    }
}
