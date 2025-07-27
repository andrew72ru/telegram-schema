<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a link to a page containing an embedded video player or a video file.
 */
class InputInlineQueryResultVideo extends InputInlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Title of the result */
        #[SerializedName('title')]
        private string $title,
        /** Represents a link to a page containing an embedded video player or a video file */
        #[SerializedName('description')]
        private string $description,
        /** The URL of the video thumbnail (JPEG), if it exists */
        #[SerializedName('thumbnail_url')]
        private string $thumbnailUrl,
        /** URL of the embedded video player or video file */
        #[SerializedName('video_url')]
        private string $videoUrl,
        /** MIME type of the content of the video URL, only "text/html" or "video/mp4" are currently supported */
        #[SerializedName('mime_type')]
        private string $mimeType,
        /** Width of the video */
        #[SerializedName('video_width')]
        private int $videoWidth,
        /** Height of the video */
        #[SerializedName('video_height')]
        private int $videoHeight,
        /** Video duration, in seconds */
        #[SerializedName('video_duration')]
        private int $videoDuration,
        /** The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageVideo, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact */
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
     * Get Title of the result.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the result.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Represents a link to a page containing an embedded video player or a video file.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Represents a link to a page containing an embedded video player or a video file.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get The URL of the video thumbnail (JPEG), if it exists.
     */
    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    /**
     * Set The URL of the video thumbnail (JPEG), if it exists.
     */
    public function setThumbnailUrl(string $thumbnailUrl): self
    {
        $this->thumbnailUrl = $thumbnailUrl;

        return $this;
    }

    /**
     * Get URL of the embedded video player or video file.
     */
    public function getVideoUrl(): string
    {
        return $this->videoUrl;
    }

    /**
     * Set URL of the embedded video player or video file.
     */
    public function setVideoUrl(string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;

        return $this;
    }

    /**
     * Get MIME type of the content of the video URL, only "text/html" or "video/mp4" are currently supported.
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * Set MIME type of the content of the video URL, only "text/html" or "video/mp4" are currently supported.
     */
    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get Width of the video.
     */
    public function getVideoWidth(): int
    {
        return $this->videoWidth;
    }

    /**
     * Set Width of the video.
     */
    public function setVideoWidth(int $videoWidth): self
    {
        $this->videoWidth = $videoWidth;

        return $this;
    }

    /**
     * Get Height of the video.
     */
    public function getVideoHeight(): int
    {
        return $this->videoHeight;
    }

    /**
     * Set Height of the video.
     */
    public function setVideoHeight(int $videoHeight): self
    {
        $this->videoHeight = $videoHeight;

        return $this;
    }

    /**
     * Get Video duration, in seconds.
     */
    public function getVideoDuration(): int
    {
        return $this->videoDuration;
    }

    /**
     * Set Video duration, in seconds.
     */
    public function setVideoDuration(int $videoDuration): self
    {
        $this->videoDuration = $videoDuration;

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
     * Get The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageVideo, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageVideo, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputInlineQueryResultVideo',
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'thumbnail_url' => $this->getThumbnailUrl(),
            'video_url' => $this->getVideoUrl(),
            'mime_type' => $this->getMimeType(),
            'video_width' => $this->getVideoWidth(),
            'video_height' => $this->getVideoHeight(),
            'video_duration' => $this->getVideoDuration(),
            'reply_markup' => $this->getReplyMarkup(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
