<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a Web App by its short name. Returns a 404 error if the Web App is not found
 */
class SearchWebApp extends FoundWebApp implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the target bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Short name of the Web App */
        #[SerializedName('web_app_short_name')]
        private string $webAppShortName,
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
     * Get Short name of the Web App
     */
    public function getWebAppShortName(): string
    {
        return $this->webAppShortName;
    }

    /**
     * Set Short name of the Web App
     */
    public function setWebAppShortName(string $webAppShortName): self
    {
        $this->webAppShortName = $webAppShortName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchWebApp',
            'bot_user_id' => $this->getBotUserId(),
            'web_app_short_name' => $this->getWebAppShortName(),
        ];
    }
}
