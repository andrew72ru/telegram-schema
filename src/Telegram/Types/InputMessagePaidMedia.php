<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with paid media; can be used only in channel chats with supergroupFullInfo.has_paid_media_allowed.
 */
class InputMessagePaidMedia extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** The number of Telegram Stars that must be paid to see the media; 1-getOption("paid_media_message_star_count_max") */
        #[SerializedName('star_count')]
        private int $starCount,
        /** The content of the paid media */
        #[SerializedName('paid_media')]
        private array|null $paidMedia = null,
        /** Message caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
        /** True, if the caption must be shown above the media; otherwise, the caption must be shown below the media; not supported in secret chats */
        #[SerializedName('show_caption_above_media')]
        private bool $showCaptionAboveMedia,
        /** Bot-provided data for the paid media; bots only */
        #[SerializedName('payload')]
        private string $payload,
    ) {
    }

    /**
     * Get The number of Telegram Stars that must be paid to see the media; 1-getOption("paid_media_message_star_count_max").
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set The number of Telegram Stars that must be paid to see the media; 1-getOption("paid_media_message_star_count_max").
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    /**
     * Get The content of the paid media.
     */
    public function getPaidMedia(): array|null
    {
        return $this->paidMedia;
    }

    /**
     * Set The content of the paid media.
     */
    public function setPaidMedia(array|null $paidMedia): self
    {
        $this->paidMedia = $paidMedia;

        return $this;
    }

    /**
     * Get Message caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set Message caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get True, if the caption must be shown above the media; otherwise, the caption must be shown below the media; not supported in secret chats.
     */
    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    /**
     * Set True, if the caption must be shown above the media; otherwise, the caption must be shown below the media; not supported in secret chats.
     */
    public function setShowCaptionAboveMedia(bool $showCaptionAboveMedia): self
    {
        $this->showCaptionAboveMedia = $showCaptionAboveMedia;

        return $this;
    }

    /**
     * Get Bot-provided data for the paid media; bots only.
     */
    public function getPayload(): string
    {
        return $this->payload;
    }

    /**
     * Set Bot-provided data for the paid media; bots only.
     */
    public function setPayload(string $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessagePaidMedia',
            'star_count' => $this->getStarCount(),
            'paid_media' => $this->getPaidMedia(),
            'caption' => $this->getCaption(),
            'show_caption_above_media' => $this->getShowCaptionAboveMedia(),
            'payload' => $this->getPayload(),
        ];
    }
}
