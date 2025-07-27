<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A rich text URL link @text Text @url URL @is_cached True, if the URL has cached instant view server-side.
 */
class RichTextUrl extends RichText implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private RichText|null $text = null,
        #[SerializedName('url')]
        private string $url,
        #[SerializedName('is_cached')]
        private bool $isCached,
    ) {
    }

    public function getText(): RichText|null
    {
        return $this->text;
    }

    public function setText(RichText|null $text): self
    {
        $this->text = $text;

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

    public function getIsCached(): bool
    {
        return $this->isCached;
    }

    public function setIsCached(bool $isCached): self
    {
        $this->isCached = $isCached;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'richTextUrl',
            'text' => $this->getText(),
            'url' => $this->getUrl(),
            'is_cached' => $this->getIsCached(),
        ];
    }
}
