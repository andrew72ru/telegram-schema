<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains autosave settings for a chat, which overrides default settings for the corresponding scope.
 */
class AutosaveSettingsException implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Autosave settings for the chat */
        #[SerializedName('settings')]
        private ScopeAutosaveSettings|null $settings = null,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Autosave settings for the chat.
     */
    public function getSettings(): ScopeAutosaveSettings|null
    {
        return $this->settings;
    }

    /**
     * Set Autosave settings for the chat.
     */
    public function setSettings(ScopeAutosaveSettings|null $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'autosaveSettingsException',
            'chat_id' => $this->getChatId(),
            'settings' => $this->getSettings(),
        ];
    }
}
