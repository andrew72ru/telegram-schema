<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Delete media previews from the list of media previews of a bot.
 */
class DeleteBotMediaPreviews extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the target bot. The bot must be owned and must have the main Web App */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Language code of the media previews to delete */
        #[SerializedName('language_code')]
        private string $languageCode,
        /** File identifiers of the media to delete */
        #[SerializedName('file_ids')]
        private array|null $fileIds = null,
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
     * Get Language code of the media previews to delete.
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * Set Language code of the media previews to delete.
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Get File identifiers of the media to delete.
     */
    public function getFileIds(): array|null
    {
        return $this->fileIds;
    }

    /**
     * Set File identifiers of the media to delete.
     */
    public function setFileIds(array|null $fileIds): self
    {
        $this->fileIds = $fileIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteBotMediaPreviews',
            'bot_user_id' => $this->getBotUserId(),
            'language_code' => $this->getLanguageCode(),
            'file_ids' => $this->getFileIds(),
        ];
    }
}
