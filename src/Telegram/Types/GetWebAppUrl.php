<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an HTTPS URL of a Web App to open from the side menu, a keyboardButtonTypeWebApp button, or an inlineQueryResultsButtonTypeWebApp button.
 */
class GetWebAppUrl extends HttpUrl implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the target bot. If the bot is restricted for the current user, then show an error instead of calling the method */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** The URL from a keyboardButtonTypeWebApp button, inlineQueryResultsButtonTypeWebApp button, or an empty string when the bot is opened from the side menu */
        #[SerializedName('url')]
        private string $url,
        /** Parameters to use to open the Web App */
        #[SerializedName('parameters')]
        private WebAppOpenParameters|null $parameters = null,
    ) {
    }

    /**
     * Get Identifier of the target bot. If the bot is restricted for the current user, then show an error instead of calling the method.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the target bot. If the bot is restricted for the current user, then show an error instead of calling the method.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get The URL from a keyboardButtonTypeWebApp button, inlineQueryResultsButtonTypeWebApp button, or an empty string when the bot is opened from the side menu.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set The URL from a keyboardButtonTypeWebApp button, inlineQueryResultsButtonTypeWebApp button, or an empty string when the bot is opened from the side menu.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get Parameters to use to open the Web App.
     */
    public function getParameters(): WebAppOpenParameters|null
    {
        return $this->parameters;
    }

    /**
     * Set Parameters to use to open the Web App.
     */
    public function setParameters(WebAppOpenParameters|null $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getWebAppUrl',
            'bot_user_id' => $this->getBotUserId(),
            'url' => $this->getUrl(),
            'parameters' => $this->getParameters(),
        ];
    }
}
