<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A text message.
 */
class MessageText extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Text of the message */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** A link preview attached to the message; may be null */
        #[SerializedName('link_preview')]
        private LinkPreview|null $linkPreview = null,
        /** Options which were used for generation of the link preview; may be null if default options were used */
        #[SerializedName('link_preview_options')]
        private LinkPreviewOptions|null $linkPreviewOptions = null,
    ) {
    }

    /**
     * Get Text of the message.
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Text of the message.
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get A link preview attached to the message; may be null.
     */
    public function getLinkPreview(): LinkPreview|null
    {
        return $this->linkPreview;
    }

    /**
     * Set A link preview attached to the message; may be null.
     */
    public function setLinkPreview(LinkPreview|null $linkPreview): self
    {
        $this->linkPreview = $linkPreview;

        return $this;
    }

    /**
     * Get Options which were used for generation of the link preview; may be null if default options were used.
     */
    public function getLinkPreviewOptions(): LinkPreviewOptions|null
    {
        return $this->linkPreviewOptions;
    }

    /**
     * Set Options which were used for generation of the link preview; may be null if default options were used.
     */
    public function setLinkPreviewOptions(LinkPreviewOptions|null $linkPreviewOptions): self
    {
        $this->linkPreviewOptions = $linkPreviewOptions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageText',
            'text' => $this->getText(),
            'link_preview' => $this->getLinkPreview(),
            'link_preview_options' => $this->getLinkPreviewOptions(),
        ];
    }
}
