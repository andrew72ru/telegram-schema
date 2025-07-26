<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A text description shown instead of a raw URL @url HTTP or tg:// URL to be opened when the link is clicked
 */
class TextEntityTypeTextUrl extends TextEntityType implements \JsonSerializable
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
            '@type' => 'textEntityTypeTextUrl',
            'url' => $this->getUrl(),
        ];
    }
}
