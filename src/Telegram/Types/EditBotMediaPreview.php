<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Replaces media preview in the list of media previews of a bot. Returns the new preview after edit is completed server-side
 */
class EditBotMediaPreview extends BotMediaPreview implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the target bot. The bot must be owned and must have the main Web App */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Language code of the media preview to edit */
        #[SerializedName('language_code')]
        private string $languageCode,
        /** File identifier of the media to replace */
        #[SerializedName('file_id')]
        private int $fileId,
        /** Content of the new preview */
        #[SerializedName('content')]
        private InputStoryContent|null $content = null,
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
     * Get Language code of the media preview to edit
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * Set Language code of the media preview to edit
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Get File identifier of the media to replace
     */
    public function getFileId(): int
    {
        return $this->fileId;
    }

    /**
     * Set File identifier of the media to replace
     */
    public function setFileId(int $fileId): self
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * Get Content of the new preview
     */
    public function getContent(): InputStoryContent|null
    {
        return $this->content;
    }

    /**
     * Set Content of the new preview
     */
    public function setContent(InputStoryContent|null $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editBotMediaPreview',
            'bot_user_id' => $this->getBotUserId(),
            'language_code' => $this->getLanguageCode(),
            'file_id' => $this->getFileId(),
            'content' => $this->getContent(),
        ];
    }
}
