<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Invites a bot to a chat (if it is not yet a member) and sends it the /start command; requires can_invite_users member right. Bots can't be invited to a private chat other than the chat with the bot.
 */
class SendBotStartMessage extends Message implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Identifier of the target chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** A hidden parameter sent to the bot for deep linking purposes (https://core.telegram.org/bots#deep-linking) */
        #[SerializedName('parameter')]
        private string $parameter,
    ) {
    }

    /**
     * Get Identifier of the bot.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the bot.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Identifier of the target chat.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the target chat.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get A hidden parameter sent to the bot for deep linking purposes (https://core.telegram.org/bots#deep-linking).
     */
    public function getParameter(): string
    {
        return $this->parameter;
    }

    /**
     * Set A hidden parameter sent to the bot for deep linking purposes (https://core.telegram.org/bots#deep-linking).
     */
    public function setParameter(string $parameter): self
    {
        $this->parameter = $parameter;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendBotStartMessage',
            'bot_user_id' => $this->getBotUserId(),
            'chat_id' => $this->getChatId(),
            'parameter' => $this->getParameter(),
        ];
    }
}
