<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits the caption of a message sent on behalf of a business account; for bots only
 */
class EditBusinessMessageCaption extends BusinessMessage implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection on behalf of which the message was sent */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** The chat the message belongs to */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
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
     * Get Unique identifier of business connection on behalf of which the message was sent
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection on behalf of which the message was sent
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get The chat the message belongs to
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set The chat the message belongs to
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get The new message reply markup; pass null if none
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set The new message reply markup; pass null if none
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    /**
     * Get New message content caption; pass null to remove caption; 0-getOption("message_caption_length_max") characters
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set New message content caption; pass null to remove caption; 0-getOption("message_caption_length_max") characters
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get Pass true to show the caption above the media; otherwise, the caption will be shown below the media. May be true only for animation, photo, and video messages
     */
    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    /**
     * Set Pass true to show the caption above the media; otherwise, the caption will be shown below the media. May be true only for animation, photo, and video messages
     */
    public function setShowCaptionAboveMedia(bool $showCaptionAboveMedia): self
    {
        $this->showCaptionAboveMedia = $showCaptionAboveMedia;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editBusinessMessageCaption',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'reply_markup' => $this->getReplyMarkup(),
            'caption' => $this->getCaption(),
            'show_caption_above_media' => $this->getShowCaptionAboveMedia(),
        ];
    }
}
