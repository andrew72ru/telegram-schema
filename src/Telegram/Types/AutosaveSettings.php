<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes autosave settings
 */
class AutosaveSettings implements \JsonSerializable
{
    public function __construct(
        /** Default autosave settings for private chats */
        #[SerializedName('private_chat_settings')]
        private ScopeAutosaveSettings|null $privateChatSettings = null,
        /** Default autosave settings for basic group and supergroup chats */
        #[SerializedName('group_settings')]
        private ScopeAutosaveSettings|null $groupSettings = null,
        /** Default autosave settings for channel chats */
        #[SerializedName('channel_settings')]
        private ScopeAutosaveSettings|null $channelSettings = null,
        /** Autosave settings for specific chats */
        #[SerializedName('exceptions')]
        private array|null $exceptions = null,
    ) {
    }

    /**
     * Get Default autosave settings for private chats
     */
    public function getPrivateChatSettings(): ScopeAutosaveSettings|null
    {
        return $this->privateChatSettings;
    }

    /**
     * Set Default autosave settings for private chats
     */
    public function setPrivateChatSettings(ScopeAutosaveSettings|null $privateChatSettings): self
    {
        $this->privateChatSettings = $privateChatSettings;

        return $this;
    }

    /**
     * Get Default autosave settings for basic group and supergroup chats
     */
    public function getGroupSettings(): ScopeAutosaveSettings|null
    {
        return $this->groupSettings;
    }

    /**
     * Set Default autosave settings for basic group and supergroup chats
     */
    public function setGroupSettings(ScopeAutosaveSettings|null $groupSettings): self
    {
        $this->groupSettings = $groupSettings;

        return $this;
    }

    /**
     * Get Default autosave settings for channel chats
     */
    public function getChannelSettings(): ScopeAutosaveSettings|null
    {
        return $this->channelSettings;
    }

    /**
     * Set Default autosave settings for channel chats
     */
    public function setChannelSettings(ScopeAutosaveSettings|null $channelSettings): self
    {
        $this->channelSettings = $channelSettings;

        return $this;
    }

    /**
     * Get Autosave settings for specific chats
     */
    public function getExceptions(): array|null
    {
        return $this->exceptions;
    }

    /**
     * Set Autosave settings for specific chats
     */
    public function setExceptions(array|null $exceptions): self
    {
        $this->exceptions = $exceptions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'autosaveSettings',
            'private_chat_settings' => $this->getPrivateChatSettings(),
            'group_settings' => $this->getGroupSettings(),
            'channel_settings' => $this->getChannelSettings(),
            'exceptions' => $this->getExceptions(),
        ];
    }
}
