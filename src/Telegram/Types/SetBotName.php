<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the name of a bot. Can be called only if userTypeBot.can_be_edited == true.
 */
class SetBotName extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the target bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose languages there is no dedicated name */
        #[SerializedName('language_code')]
        private string $languageCode,
        /** New bot's name on the specified language; 0-64 characters; must be non-empty if language code is empty */
        #[SerializedName('name')]
        private string $name,
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
     * Get A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose languages there is no dedicated name.
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * Set A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose languages there is no dedicated name.
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Get New bot's name on the specified language; 0-64 characters; must be non-empty if language code is empty.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set New bot's name on the specified language; 0-64 characters; must be non-empty if language code is empty.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBotName',
            'bot_user_id' => $this->getBotUserId(),
            'language_code' => $this->getLanguageCode(),
            'name' => $this->getName(),
        ];
    }
}
