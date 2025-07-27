<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a URL linking to an internal Telegram entity @url URL @var Type of the URL.
 */
class TMeUrl implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('url')]
        private string $url,
        #[SerializedName('type')]
        private TMeUrlType|null $type = null,
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

    public function getType(): TMeUrlType|null
    {
        return $this->type;
    }

    public function setType(TMeUrlType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'tMeUrl',
            'url' => $this->getUrl(),
            'type' => $this->getType(),
        ];
    }
}
