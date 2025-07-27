<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains an HTTPS URL, which can be used to get information about a user @url The URL @expires_in Left time for which the link is valid, in seconds; 0 if the link is a public username link.
 */
class UserLink implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('url')]
        private string $url,
        #[SerializedName('expires_in')]
        private int $expiresIn,
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

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    public function setExpiresIn(int $expiresIn): self
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userLink',
            'url' => $this->getUrl(),
            'expires_in' => $this->getExpiresIn(),
        ];
    }
}
