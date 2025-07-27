<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a link to a file.
 */
class InputInlineQueryResultDocument extends InputInlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Title of the resulting file */
        #[SerializedName('title')]
        private string $title,
        /** Represents a link to a file */
        #[SerializedName('description')]
        private string $description,
        /** URL of the file */
        #[SerializedName('document_url')]
        private string $documentUrl,
        /** MIME type of the file content; only "application/pdf" and "application/zip" are currently allowed */
        #[SerializedName('mime_type')]
        private string $mimeType,
        /** The URL of the file thumbnail, if it exists */
        #[SerializedName('thumbnail_url')]
        private string $thumbnailUrl,
        /** Width of the thumbnail */
        #[SerializedName('thumbnail_width')]
        private int $thumbnailWidth,
        /** Height of the thumbnail */
        #[SerializedName('thumbnail_height')]
        private int $thumbnailHeight,
        /** The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageDocument, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact */
        #[SerializedName('input_message_content')]
        private InputMessageContent|null $inputMessageContent = null,
    ) {
    }

    /**
     * Get Unique identifier of the query result.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the query result.
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Title of the resulting file.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the resulting file.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Represents a link to a file.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Represents a link to a file.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get URL of the file.
     */
    public function getDocumentUrl(): string
    {
        return $this->documentUrl;
    }

    /**
     * Set URL of the file.
     */
    public function setDocumentUrl(string $documentUrl): self
    {
        $this->documentUrl = $documentUrl;

        return $this;
    }

    /**
     * Get MIME type of the file content; only "application/pdf" and "application/zip" are currently allowed.
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * Set MIME type of the file content; only "application/pdf" and "application/zip" are currently allowed.
     */
    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get The URL of the file thumbnail, if it exists.
     */
    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    /**
     * Set The URL of the file thumbnail, if it exists.
     */
    public function setThumbnailUrl(string $thumbnailUrl): self
    {
        $this->thumbnailUrl = $thumbnailUrl;

        return $this;
    }

    /**
     * Get Width of the thumbnail.
     */
    public function getThumbnailWidth(): int
    {
        return $this->thumbnailWidth;
    }

    /**
     * Set Width of the thumbnail.
     */
    public function setThumbnailWidth(int $thumbnailWidth): self
    {
        $this->thumbnailWidth = $thumbnailWidth;

        return $this;
    }

    /**
     * Get Height of the thumbnail.
     */
    public function getThumbnailHeight(): int
    {
        return $this->thumbnailHeight;
    }

    /**
     * Set Height of the thumbnail.
     */
    public function setThumbnailHeight(int $thumbnailHeight): self
    {
        $this->thumbnailHeight = $thumbnailHeight;

        return $this;
    }

    /**
     * Get The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    /**
     * Get The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageDocument, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageDocument, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputInlineQueryResultDocument',
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'document_url' => $this->getDocumentUrl(),
            'mime_type' => $this->getMimeType(),
            'thumbnail_url' => $this->getThumbnailUrl(),
            'thumbnail_width' => $this->getThumbnailWidth(),
            'thumbnail_height' => $this->getThumbnailHeight(),
            'reply_markup' => $this->getReplyMarkup(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
