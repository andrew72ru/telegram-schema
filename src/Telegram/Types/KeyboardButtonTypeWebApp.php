<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A button that opens a Web App by calling getWebAppUrl @url An HTTP URL to pass to getWebAppUrl.
 */
class KeyboardButtonTypeWebApp extends KeyboardButtonType implements \JsonSerializable
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
            '@type' => 'keyboardButtonTypeWebApp',
            'url' => $this->getUrl(),
        ];
    }
}
