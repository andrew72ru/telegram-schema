<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of media previews for the given language and the list of languages for which the bot has dedicated previews
 */
class GetBotMediaPreviewInfo extends BotMediaPreviewInfo implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the target bot. The bot must be owned and must have the main Web App */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** A two-letter ISO 639-1 language code for which to get previews. If empty, then default previews are returned */
        #[SerializedName('language_code')]
        private string $languageCode,
    ) {
    }

    /**
     * Get Identifier of the target bot. The bot must be owned and must have the main Web App
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the target bot. The bot must be owned and must have the main Web App
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get A two-letter ISO 639-1 language code for which to get previews. If empty, then default previews are returned
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * Set A two-letter ISO 639-1 language code for which to get previews. If empty, then default previews are returned
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getBotMediaPreviewInfo',
            'bot_user_id' => $this->getBotUserId(),
            'language_code' => $this->getLanguageCode(),
        ];
    }
}
