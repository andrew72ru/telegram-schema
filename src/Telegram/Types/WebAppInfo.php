<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a Web App @launch_id Unique identifier for the Web App launch @url A Web App URL to open in a web view
 */
class WebAppInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('launch_id')]
        private int $launchId,
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    public function getLaunchId(): int
    {
        return $this->launchId;
    }

    public function setLaunchId(int $launchId): self
    {
        $this->launchId = $launchId;

        return $this;
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
            '@type' => 'webAppInfo',
            'launch_id' => $this->getLaunchId(),
            'url' => $this->getUrl(),
        ];
    }
}
