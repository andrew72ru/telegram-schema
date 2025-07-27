<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about the main Web App of a bot @url URL of the Web App to open @mode The mode in which the Web App must be opened.
 */
class MainWebApp implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('url')]
        private string $url,
        #[SerializedName('mode')]
        private WebAppOpenMode|null $mode = null,
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

    public function getMode(): WebAppOpenMode|null
    {
        return $this->mode;
    }

    public function setMode(WebAppOpenMode|null $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'mainWebApp',
            'url' => $this->getUrl(),
            'mode' => $this->getMode(),
        ];
    }
}
