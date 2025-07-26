<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A text message
 */
class InputMessageText extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Formatted text to be sent; 0-getOption("message_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, BlockQuote, ExpandableBlockQuote, */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Options to be used for generation of a link preview; may be null if none; pass null to use default link preview options */
        #[SerializedName('link_preview_options')]
        private LinkPreviewOptions|null $linkPreviewOptions = null,
        /** True, if a chat message draft must be deleted */
        #[SerializedName('clear_draft')]
        private bool $clearDraft,
    ) {
    }

    /**
     * Get Formatted text to be sent; 0-getOption("message_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, BlockQuote, ExpandableBlockQuote,
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Formatted text to be sent; 0-getOption("message_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, BlockQuote, ExpandableBlockQuote,
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Options to be used for generation of a link preview; may be null if none; pass null to use default link preview options
     */
    public function getLinkPreviewOptions(): LinkPreviewOptions|null
    {
        return $this->linkPreviewOptions;
    }

    /**
     * Set Options to be used for generation of a link preview; may be null if none; pass null to use default link preview options
     */
    public function setLinkPreviewOptions(LinkPreviewOptions|null $linkPreviewOptions): self
    {
        $this->linkPreviewOptions = $linkPreviewOptions;

        return $this;
    }

    /**
     * Get True, if a chat message draft must be deleted
     */
    public function getClearDraft(): bool
    {
        return $this->clearDraft;
    }

    /**
     * Set True, if a chat message draft must be deleted
     */
    public function setClearDraft(bool $clearDraft): self
    {
        $this->clearDraft = $clearDraft;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageText',
            'text' => $this->getText(),
            'link_preview_options' => $this->getLinkPreviewOptions(),
            'clear_draft' => $this->getClearDraft(),
        ];
    }
}
