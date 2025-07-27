<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a link preview by the text of a message. Do not call this function too often. Returns a 404 error if the text has no link preview.
 */
class GetLinkPreview extends LinkPreview implements \JsonSerializable
{
    public function __construct(
        /** Message text with formatting */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Options to be used for generation of the link preview; pass null to use default link preview options */
        #[SerializedName('link_preview_options')]
        private LinkPreviewOptions|null $linkPreviewOptions = null,
    ) {
    }

    /**
     * Get Message text with formatting.
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Message text with formatting.
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Options to be used for generation of the link preview; pass null to use default link preview options.
     */
    public function getLinkPreviewOptions(): LinkPreviewOptions|null
    {
        return $this->linkPreviewOptions;
    }

    /**
     * Set Options to be used for generation of the link preview; pass null to use default link preview options.
     */
    public function setLinkPreviewOptions(LinkPreviewOptions|null $linkPreviewOptions): self
    {
        $this->linkPreviewOptions = $linkPreviewOptions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getLinkPreview',
            'text' => $this->getText(),
            'link_preview_options' => $this->getLinkPreviewOptions(),
        ];
    }
}
