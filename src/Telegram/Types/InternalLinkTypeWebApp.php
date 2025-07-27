<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a Web App. Call searchPublicChat with the given bot username, check that the user is a bot. If the bot is restricted for the current user, then show an error message.
 */
class InternalLinkTypeWebApp extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Username of the bot that owns the Web App */
        #[SerializedName('bot_username')]
        private string $botUsername,
        /** Short name of the Web App */
        #[SerializedName('web_app_short_name')]
        private string $webAppShortName,
        /** Start parameter to be passed to getWebAppLinkUrl */
        #[SerializedName('start_parameter')]
        private string $startParameter,
        /** The mode in which the Web App must be opened */
        #[SerializedName('mode')]
        private WebAppOpenMode|null $mode = null,
    ) {
    }

    /**
     * Get Username of the bot that owns the Web App.
     */
    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    /**
     * Set Username of the bot that owns the Web App.
     */
    public function setBotUsername(string $botUsername): self
    {
        $this->botUsername = $botUsername;

        return $this;
    }

    /**
     * Get Short name of the Web App.
     */
    public function getWebAppShortName(): string
    {
        return $this->webAppShortName;
    }

    /**
     * Set Short name of the Web App.
     */
    public function setWebAppShortName(string $webAppShortName): self
    {
        $this->webAppShortName = $webAppShortName;

        return $this;
    }

    /**
     * Get Start parameter to be passed to getWebAppLinkUrl.
     */
    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    /**
     * Set Start parameter to be passed to getWebAppLinkUrl.
     */
    public function setStartParameter(string $startParameter): self
    {
        $this->startParameter = $startParameter;

        return $this;
    }

    /**
     * Get The mode in which the Web App must be opened.
     */
    public function getMode(): WebAppOpenMode|null
    {
        return $this->mode;
    }

    /**
     * Set The mode in which the Web App must be opened.
     */
    public function setMode(WebAppOpenMode|null $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeWebApp',
            'bot_username' => $this->getBotUsername(),
            'web_app_short_name' => $this->getWebAppShortName(),
            'start_parameter' => $this->getStartParameter(),
            'mode' => $this->getMode(),
        ];
    }
}
