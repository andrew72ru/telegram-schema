<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of t.me URLs @urls List of URLs.
 */
class TMeUrls implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('urls')]
        private array|null $urls = null,
    ) {
    }

    public function getUrls(): array|null
    {
        return $this->urls;
    }

    public function setUrls(array|null $urls): self
    {
        $this->urls = $urls;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'tMeUrls',
            'urls' => $this->getUrls(),
        ];
    }
}
