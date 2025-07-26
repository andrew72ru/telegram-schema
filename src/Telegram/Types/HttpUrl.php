<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains an HTTP URL @url The URL
 */
class HttpUrl implements \JsonSerializable
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
            '@type' => 'httpUrl',
            'url' => $this->getUrl(),
        ];
    }
}
