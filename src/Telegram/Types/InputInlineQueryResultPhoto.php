<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents link to a JPEG image
 */
class InputInlineQueryResultPhoto extends InputInlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Title of the result, if known */
        #[SerializedName('title')]
        private string $title,
        /** Represents link to a JPEG image */
        #[SerializedName('description')]
        private string $description,
        /** URL of the photo thumbnail, if it exists */
        #[SerializedName('thumbnail_url')]
        private string $thumbnailUrl,
        /** The URL of the JPEG photo (photo size must not exceed 5MB) */
        #[SerializedName('photo_url')]
        private string $photoUrl,
        /** Width of the photo */
        #[SerializedName('photo_width')]
        private int $photoWidth,
        /** Height of the photo */
        #[SerializedName('photo_height')]
        private int $photoHeight,
        /** The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessagePhoto, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact */
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
     * Get Title of the result, if known
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the result, if known
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Represents link to a JPEG image
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Represents link to a JPEG image
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get URL of the photo thumbnail, if it exists
     */
    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    /**
     * Set URL of the photo thumbnail, if it exists
     */
    public function setThumbnailUrl(string $thumbnailUrl): self
    {
        $this->thumbnailUrl = $thumbnailUrl;

        return $this;
    }

    /**
     * Get The URL of the JPEG photo (photo size must not exceed 5MB)
     */
    public function getPhotoUrl(): string
    {
        return $this->photoUrl;
    }

    /**
     * Set The URL of the JPEG photo (photo size must not exceed 5MB)
     */
    public function setPhotoUrl(string $photoUrl): self
    {
        $this->photoUrl = $photoUrl;

        return $this;
    }

    /**
     * Get Width of the photo
     */
    public function getPhotoWidth(): int
    {
        return $this->photoWidth;
    }

    /**
     * Set Width of the photo
     */
    public function setPhotoWidth(int $photoWidth): self
    {
        $this->photoWidth = $photoWidth;

        return $this;
    }

    /**
     * Get Height of the photo
     */
    public function getPhotoHeight(): int
    {
        return $this->photoHeight;
    }

    /**
     * Set Height of the photo
     */
    public function setPhotoHeight(int $photoHeight): self
    {
        $this->photoHeight = $photoHeight;

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
     * Get The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessagePhoto, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessagePhoto, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputInlineQueryResultPhoto',
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'thumbnail_url' => $this->getThumbnailUrl(),
            'photo_url' => $this->getPhotoUrl(),
            'photo_width' => $this->getPhotoWidth(),
            'photo_height' => $this->getPhotoHeight(),
            'reply_markup' => $this->getReplyMarkup(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
