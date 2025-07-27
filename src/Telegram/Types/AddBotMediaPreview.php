<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a new media preview to the beginning of the list of media previews of a bot. Returns the added preview after addition is completed server-side. The total number of previews must not exceed getOption("bot_media_preview_count_max") for the given language.
 */
class AddBotMediaPreview extends BotMediaPreview implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the target bot. The bot must be owned and must have the main Web App */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** A two-letter ISO 639-1 language code for which preview is added. If empty, then the preview will be shown to all users for whose languages there are no dedicated previews. */
        #[SerializedName('language_code')]
        private string $languageCode,
        /** Content of the added preview */
        #[SerializedName('content')]
        private InputStoryContent|null $content = null,
    ) {
    }

    /**
     * Get Identifier of the target bot. The bot must be owned and must have the main Web App.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the target bot. The bot must be owned and must have the main Web App.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get A two-letter ISO 639-1 language code for which preview is added. If empty, then the preview will be shown to all users for whose languages there are no dedicated previews..
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * Set A two-letter ISO 639-1 language code for which preview is added. If empty, then the preview will be shown to all users for whose languages there are no dedicated previews..
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Get Content of the added preview.
     */
    public function getContent(): InputStoryContent|null
    {
        return $this->content;
    }

    /**
     * Set Content of the added preview.
     */
    public function setContent(InputStoryContent|null $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addBotMediaPreview',
            'bot_user_id' => $this->getBotUserId(),
            'language_code' => $this->getLanguageCode(),
            'content' => $this->getContent(),
        ];
    }
}
