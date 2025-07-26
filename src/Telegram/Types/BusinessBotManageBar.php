<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a business bot that manages the chat
 */
class BusinessBotManageBar implements \JsonSerializable
{
    public function __construct(
        /** User identifier of the bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** URL to be opened to manage the bot */
        #[SerializedName('manage_url')]
        private string $manageUrl,
        /** True, if the bot is paused. Use toggleBusinessConnectedBotChatIsPaused to change the value of the field */
        #[SerializedName('is_bot_paused')]
        private bool $isBotPaused,
        /** True, if the bot can reply */
        #[SerializedName('can_bot_reply')]
        private bool $canBotReply,
    ) {
    }

    /**
     * Get User identifier of the bot
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set User identifier of the bot
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get URL to be opened to manage the bot
     */
    public function getManageUrl(): string
    {
        return $this->manageUrl;
    }

    /**
     * Set URL to be opened to manage the bot
     */
    public function setManageUrl(string $manageUrl): self
    {
        $this->manageUrl = $manageUrl;

        return $this;
    }

    /**
     * Get True, if the bot is paused. Use toggleBusinessConnectedBotChatIsPaused to change the value of the field
     */
    public function getIsBotPaused(): bool
    {
        return $this->isBotPaused;
    }

    /**
     * Set True, if the bot is paused. Use toggleBusinessConnectedBotChatIsPaused to change the value of the field
     */
    public function setIsBotPaused(bool $isBotPaused): self
    {
        $this->isBotPaused = $isBotPaused;

        return $this;
    }

    /**
     * Get True, if the bot can reply
     */
    public function getCanBotReply(): bool
    {
        return $this->canBotReply;
    }

    /**
     * Set True, if the bot can reply
     */
    public function setCanBotReply(bool $canBotReply): self
    {
        $this->canBotReply = $canBotReply;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessBotManageBar',
            'bot_user_id' => $this->getBotUserId(),
            'manage_url' => $this->getManageUrl(),
            'is_bot_paused' => $this->getIsBotPaused(),
            'can_bot_reply' => $this->getCanBotReply(),
        ];
    }
}
