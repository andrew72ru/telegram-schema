<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A button that opens a Web App by calling openWebApp @url An HTTP URL to pass to openWebApp.
 */
class InlineKeyboardButtonTypeWebApp extends InlineKeyboardButtonType implements \JsonSerializable
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
            '@type' => 'inlineKeyboardButtonTypeWebApp',
            'url' => $this->getUrl(),
        ];
    }
}
