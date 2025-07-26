<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A button that opens a specified URL @url HTTP or tg:// URL to open. If the link is of the type internalLinkTypeWebApp, then the button must be marked as a Web App button
 */
class InlineKeyboardButtonTypeUrl extends InlineKeyboardButtonType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineKeyboardButtonTypeUrl',
            'url' => $this->getUrl(),
        ];
    }
}
