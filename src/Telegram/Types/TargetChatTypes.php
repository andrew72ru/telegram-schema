<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes allowed types for the target chat
 */
class TargetChatTypes implements \JsonSerializable
{
    public function __construct(
        /** True, if private chats with ordinary users are allowed */
        #[SerializedName('allow_user_chats')]
        private bool $allowUserChats,
        /** True, if private chats with other bots are allowed */
        #[SerializedName('allow_bot_chats')]
        private bool $allowBotChats,
        /** True, if basic group and supergroup chats are allowed */
        #[SerializedName('allow_group_chats')]
        private bool $allowGroupChats,
        /** True, if channel chats are allowed */
        #[SerializedName('allow_channel_chats')]
        private bool $allowChannelChats,
    ) {
    }

    /**
     * Get True, if private chats with ordinary users are allowed
     */
    public function getAllowUserChats(): bool
    {
        return $this->allowUserChats;
    }

    /**
     * Set True, if private chats with ordinary users are allowed
     */
    public function setAllowUserChats(bool $allowUserChats): self
    {
        $this->allowUserChats = $allowUserChats;

        return $this;
    }

    /**
     * Get True, if private chats with other bots are allowed
     */
    public function getAllowBotChats(): bool
    {
        return $this->allowBotChats;
    }

    /**
     * Set True, if private chats with other bots are allowed
     */
    public function setAllowBotChats(bool $allowBotChats): self
    {
        $this->allowBotChats = $allowBotChats;

        return $this;
    }

    /**
     * Get True, if basic group and supergroup chats are allowed
     */
    public function getAllowGroupChats(): bool
    {
        return $this->allowGroupChats;
    }

    /**
     * Set True, if basic group and supergroup chats are allowed
     */
    public function setAllowGroupChats(bool $allowGroupChats): self
    {
        $this->allowGroupChats = $allowGroupChats;

        return $this;
    }

    /**
     * Get True, if channel chats are allowed
     */
    public function getAllowChannelChats(): bool
    {
        return $this->allowChannelChats;
    }

    /**
     * Set True, if channel chats are allowed
     */
    public function setAllowChannelChats(bool $allowChannelChats): self
    {
        $this->allowChannelChats = $allowChannelChats;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'targetChatTypes',
            'allow_user_chats' => $this->getAllowUserChats(),
            'allow_bot_chats' => $this->getAllowBotChats(),
            'allow_group_chats' => $this->getAllowGroupChats(),
            'allow_channel_chats' => $this->getAllowChannelChats(),
        ];
    }
}
