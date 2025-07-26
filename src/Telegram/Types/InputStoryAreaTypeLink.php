<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An area pointing to a HTTP or tg:// link
 */
class InputStoryAreaTypeLink extends InputStoryAreaType implements \JsonSerializable
{
    public function __construct(
        /** HTTP or tg:// URL to be opened when the area is clicked */
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    /**
     * Get HTTP or tg:// URL to be opened when the area is clicked
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set HTTP or tg:// URL to be opened when the area is clicked
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputStoryAreaTypeLink',
            'url' => $this->getUrl(),
        ];
    }
}
