<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits the caption of an inline message sent via a bot; for bots only.
 */
class EditInlineMessageCaption extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Inline message identifier */
        #[SerializedName('inline_message_id')]
        private string $inlineMessageId,
        /** The new message reply markup; pass null if none */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** New message content caption; pass null to remove caption; 0-getOption("message_caption_length_max") characters */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
        /** Pass true to show the caption above the media; otherwise, the caption will be shown below the media. May be true only for animation, photo, and video messages */
        #[SerializedName('show_caption_above_media')]
        private bool $showCaptionAboveMedia,
    ) {
    }

    /**
     * Get Inline message identifier.
     */
    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    /**
     * Set Inline message identifier.
     */
    public function setInlineMessageId(string $inlineMessageId): self
    {
        $this->inlineMessageId = $inlineMessageId;

        return $this;
    }

    /**
     * Get The new message reply markup; pass null if none.
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set The new message reply markup; pass null if none.
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    /**
     * Get New message content caption; pass null to remove caption; 0-getOption("message_caption_length_max") characters.
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set New message content caption; pass null to remove caption; 0-getOption("message_caption_length_max") characters.
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get Pass true to show the caption above the media; otherwise, the caption will be shown below the media. May be true only for animation, photo, and video messages.
     */
    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    /**
     * Set Pass true to show the caption above the media; otherwise, the caption will be shown below the media. May be true only for animation, photo, and video messages.
     */
    public function setShowCaptionAboveMedia(bool $showCaptionAboveMedia): self
    {
        $this->showCaptionAboveMedia = $showCaptionAboveMedia;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editInlineMessageCaption',
            'inline_message_id' => $this->getInlineMessageId(),
            'reply_markup' => $this->getReplyMarkup(),
            'caption' => $this->getCaption(),
            'show_caption_above_media' => $this->getShowCaptionAboveMedia(),
        ];
    }
}
