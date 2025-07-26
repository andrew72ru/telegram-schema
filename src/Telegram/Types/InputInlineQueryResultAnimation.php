<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a link to an animated GIF or an animated (i.e., without sound) H.264/MPEG-4 AVC video
 */
class InputInlineQueryResultAnimation extends InputInlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Title of the query result */
        #[SerializedName('title')]
        private string $title,
        /** URL of the result thumbnail (JPEG, GIF, or MPEG4), if it exists */
        #[SerializedName('thumbnail_url')]
        private string $thumbnailUrl,
        /** MIME type of the video thumbnail. If non-empty, must be one of "image/jpeg", "image/gif" and "video/mp4" */
        #[SerializedName('thumbnail_mime_type')]
        private string $thumbnailMimeType,
        /** The URL of the video file (file size must not exceed 1MB) */
        #[SerializedName('video_url')]
        private string $videoUrl,
        /** MIME type of the video file. Must be one of "image/gif" and "video/mp4" */
        #[SerializedName('video_mime_type')]
        private string $videoMimeType,
        /** Duration of the video, in seconds */
        #[SerializedName('video_duration')]
        private int $videoDuration,
        /** Width of the video */
        #[SerializedName('video_width')]
        private int $videoWidth,
        /** Height of the video */
        #[SerializedName('video_height')]
        private int $videoHeight,
        /** The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageAnimation, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact */
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
     * Get Title of the query result
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the query result
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get URL of the result thumbnail (JPEG, GIF, or MPEG4), if it exists
     */
    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    /**
     * Set URL of the result thumbnail (JPEG, GIF, or MPEG4), if it exists
     */
    public function setThumbnailUrl(string $thumbnailUrl): self
    {
        $this->thumbnailUrl = $thumbnailUrl;

        return $this;
    }

    /**
     * Get MIME type of the video thumbnail. If non-empty, must be one of "image/jpeg", "image/gif" and "video/mp4"
     */
    public function getThumbnailMimeType(): string
    {
        return $this->thumbnailMimeType;
    }

    /**
     * Set MIME type of the video thumbnail. If non-empty, must be one of "image/jpeg", "image/gif" and "video/mp4"
     */
    public function setThumbnailMimeType(string $thumbnailMimeType): self
    {
        $this->thumbnailMimeType = $thumbnailMimeType;

        return $this;
    }

    /**
     * Get The URL of the video file (file size must not exceed 1MB)
     */
    public function getVideoUrl(): string
    {
        return $this->videoUrl;
    }

    /**
     * Set The URL of the video file (file size must not exceed 1MB)
     */
    public function setVideoUrl(string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;

        return $this;
    }

    /**
     * Get MIME type of the video file. Must be one of "image/gif" and "video/mp4"
     */
    public function getVideoMimeType(): string
    {
        return $this->videoMimeType;
    }

    /**
     * Set MIME type of the video file. Must be one of "image/gif" and "video/mp4"
     */
    public function setVideoMimeType(string $videoMimeType): self
    {
        $this->videoMimeType = $videoMimeType;

        return $this;
    }

    /**
     * Get Duration of the video, in seconds
     */
    public function getVideoDuration(): int
    {
        return $this->videoDuration;
    }

    /**
     * Set Duration of the video, in seconds
     */
    public function setVideoDuration(int $videoDuration): self
    {
        $this->videoDuration = $videoDuration;

        return $this;
    }

    /**
     * Get Width of the video
     */
    public function getVideoWidth(): int
    {
        return $this->videoWidth;
    }

    /**
     * Set Width of the video
     */
    public function setVideoWidth(int $videoWidth): self
    {
        $this->videoWidth = $videoWidth;

        return $this;
    }

    /**
     * Get Height of the video
     */
    public function getVideoHeight(): int
    {
        return $this->videoHeight;
    }

    /**
     * Set Height of the video
     */
    public function setVideoHeight(int $videoHeight): self
    {
        $this->videoHeight = $videoHeight;

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
     * Get The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageAnimation, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageAnimation, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputInlineQueryResultAnimation',
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'thumbnail_url' => $this->getThumbnailUrl(),
            'thumbnail_mime_type' => $this->getThumbnailMimeType(),
            'video_url' => $this->getVideoUrl(),
            'video_mime_type' => $this->getVideoMimeType(),
            'video_duration' => $this->getVideoDuration(),
            'video_width' => $this->getVideoWidth(),
            'video_height' => $this->getVideoHeight(),
            'reply_markup' => $this->getReplyMarkup(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
