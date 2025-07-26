<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to the main Web App of a bot. Call searchPublicChat with the given bot username, check that the user is a bot and has the main Web App.
 */
class InternalLinkTypeMainWebApp extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Username of the bot */
        #[SerializedName('bot_username')]
        private string $botUsername,
        /** Start parameter to be passed to getMainWebApp */
        #[SerializedName('start_parameter')]
        private string $startParameter,
        /** The mode to be passed to getMainWebApp */
        #[SerializedName('mode')]
        private WebAppOpenMode|null $mode = null,
    ) {
    }

    /**
     * Get Username of the bot
     */
    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    /**
     * Set Username of the bot
     */
    public function setBotUsername(string $botUsername): self
    {
        $this->botUsername = $botUsername;

        return $this;
    }

    /**
     * Get Start parameter to be passed to getMainWebApp
     */
    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    /**
     * Set Start parameter to be passed to getMainWebApp
     */
    public function setStartParameter(string $startParameter): self
    {
        $this->startParameter = $startParameter;

        return $this;
    }

    /**
     * Get The mode to be passed to getMainWebApp
     */
    public function getMode(): WebAppOpenMode|null
    {
        return $this->mode;
    }

    /**
     * Set The mode to be passed to getMainWebApp
     */
    public function setMode(WebAppOpenMode|null $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeMainWebApp',
            'bot_username' => $this->getBotUsername(),
            'start_parameter' => $this->getStartParameter(),
            'mode' => $this->getMode(),
        ];
    }
}
