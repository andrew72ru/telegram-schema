<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the name of a bot in the given language. Can be called only if userTypeBot.can_be_edited == true
 */
class GetBotName extends Text implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the target bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** A two-letter ISO 639-1 language code or an empty string */
        #[SerializedName('language_code')]
        private string $languageCode,
    ) {
    }

    /**
     * Get Identifier of the target bot
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the target bot
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get A two-letter ISO 639-1 language code or an empty string
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * Set A two-letter ISO 639-1 language code or an empty string
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getBotName',
            'bot_user_id' => $this->getBotUserId(),
            'language_code' => $this->getLanguageCode(),
        ];
    }
}
