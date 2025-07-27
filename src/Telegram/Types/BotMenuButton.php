<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a button to be shown instead of bot commands menu button.
 */
class BotMenuButton implements \JsonSerializable
{
    public function __construct(
        /** Text of the button */
        #[SerializedName('text')]
        private string $text,
        /** URL of a Web App to open when the button is pressed. If the link is of the type internalLinkTypeWebApp, then it must be processed accordingly. Otherwise, the link must be passed to openWebApp */
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    /**
     * Get Text of the button.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Set Text of the button.
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get URL of a Web App to open when the button is pressed. If the link is of the type internalLinkTypeWebApp, then it must be processed accordingly. Otherwise, the link must be passed to openWebApp.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL of a Web App to open when the button is pressed. If the link is of the type internalLinkTypeWebApp, then it must be processed accordingly. Otherwise, the link must be passed to openWebApp.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botMenuButton',
            'text' => $this->getText(),
            'url' => $this->getUrl(),
        ];
    }
}
