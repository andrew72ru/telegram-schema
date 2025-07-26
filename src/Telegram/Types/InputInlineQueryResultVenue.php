<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents information about a venue
 */
class InputInlineQueryResultVenue extends InputInlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Venue result */
        #[SerializedName('venue')]
        private Venue|null $venue = null,
        /** URL of the result thumbnail, if it exists */
        #[SerializedName('thumbnail_url')]
        private string $thumbnailUrl,
        /** Thumbnail width, if known */
        #[SerializedName('thumbnail_width')]
        private int $thumbnailWidth,
        /** Thumbnail height, if known */
        #[SerializedName('thumbnail_height')]
        private int $thumbnailHeight,
        /** The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact */
        #[SerializedName('input_message_content')]
        private InputMessageContent|null $inputMessageContent = null,
    ) {
    }

    /**
     * Get Unique identifier of the query result
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the query result
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Venue result
     */
    public function getVenue(): Venue|null
    {
        return $this->venue;
    }

    /**
     * Set Venue result
     */
    public function setVenue(Venue|null $venue): self
    {
        $this->venue = $venue;

        return $this;
    }

    /**
     * Get URL of the result thumbnail, if it exists
     */
    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    /**
     * Set URL of the result thumbnail, if it exists
     */
    public function setThumbnailUrl(string $thumbnailUrl): self
    {
        $this->thumbnailUrl = $thumbnailUrl;

        return $this;
    }

    /**
     * Get Thumbnail width, if known
     */
    public function getThumbnailWidth(): int
    {
        return $this->thumbnailWidth;
    }

    /**
     * Set Thumbnail width, if known
     */
    public function setThumbnailWidth(int $thumbnailWidth): self
    {
        $this->thumbnailWidth = $thumbnailWidth;

        return $this;
    }

    /**
     * Get Thumbnail height, if known
     */
    public function getThumbnailHeight(): int
    {
        return $this->thumbnailHeight;
    }

    /**
     * Set Thumbnail height, if known
     */
    public function setThumbnailHeight(int $thumbnailHeight): self
    {
        $this->thumbnailHeight = $thumbnailHeight;

        return $this;
    }

    /**
     * Get The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    /**
     * Get The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputInlineQueryResultVenue',
            'id' => $this->getId(),
            'venue' => $this->getVenue(),
            'thumbnail_url' => $this->getThumbnailUrl(),
            'thumbnail_width' => $this->getThumbnailWidth(),
            'thumbnail_height' => $this->getThumbnailHeight(),
            'reply_markup' => $this->getReplyMarkup(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
