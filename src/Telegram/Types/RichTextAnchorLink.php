<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A link to an anchor on the same page @text The link text @anchor_name The anchor name. If the name is empty, the link must bring back to top @url An HTTP URL, opening the anchor.
 */
class RichTextAnchorLink extends RichText implements \JsonSerializable
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
            '@type' => 'richTextAnchorLink',
            'text' => $this->getText(),
            'anchor_name' => $this->getAnchorName(),
            'url' => $this->getUrl(),
        ];
    }
}
