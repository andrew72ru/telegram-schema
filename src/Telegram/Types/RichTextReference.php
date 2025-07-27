<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A reference to a richTexts object on the same page @text The text @anchor_name The name of a richTextAnchor object, which is the first element of the target richTexts object @url An HTTP URL, opening the reference.
 */
class RichTextReference extends RichText implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private RichText|null $text = null,
        #[SerializedName('anchor_name')]
        private string $anchorName,
        #[SerializedName('url')]
        private string $url,
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

    public function getAnchorName(): string
    {
        return $this->anchorName;
    }

    public function setAnchorName(string $anchorName): self
    {
        $this->anchorName = $anchorName;

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
            '@type' => 'richTextReference',
            'text' => $this->getText(),
            'anchor_name' => $this->getAnchorName(),
            'url' => $this->getUrl(),
        ];
    }
}
