<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the text shown on a bot's profile page and sent together with the link when users share the bot. Can be called only if userTypeBot.can_be_edited == true.
 */
class SetBotInfoShortDescription extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the target bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** A two-letter ISO 639-1 language code. If empty, the short description will be shown to all users for whose languages there is no dedicated description */
        #[SerializedName('language_code')]
        private string $languageCode,
        /** New bot's short description on the specified language */
        #[SerializedName('short_description')]
        private string $shortDescription,
    ) {
    }

    /**
     * Get Identifier of the target bot.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the target bot.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get A two-letter ISO 639-1 language code. If empty, the short description will be shown to all users for whose languages there is no dedicated description.
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * Set A two-letter ISO 639-1 language code. If empty, the short description will be shown to all users for whose languages there is no dedicated description.
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Get New bot's short description on the specified language.
     */
    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    /**
     * Set New bot's short description on the specified language.
     */
    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBotInfoShortDescription',
            'bot_user_id' => $this->getBotUserId(),
            'language_code' => $this->getLanguageCode(),
            'short_description' => $this->getShortDescription(),
        ];
    }
}
