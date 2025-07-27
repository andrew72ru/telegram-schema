<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks whether a file can be downloaded and saved locally by Web App request.
 */
class CheckWebAppFileDownload extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the bot, providing the Web App */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Name of the file */
        #[SerializedName('file_name')]
        private string $fileName,
        /** URL of the file */
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    /**
     * Get Identifier of the bot, providing the Web App.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the bot, providing the Web App.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Name of the file.
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * Set Name of the file.
     */
    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get URL of the file.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL of the file.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkWebAppFileDownload',
            'bot_user_id' => $this->getBotUserId(),
            'file_name' => $this->getFileName(),
            'url' => $this->getUrl(),
        ];
    }
}
