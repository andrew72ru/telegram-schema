<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An audio message.
 */
class InputMessageAudio extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Audio file to be sent */
        #[SerializedName('audio')]
        private InputFile|null $audio = null,
        /** Thumbnail of the cover for the album; pass null to skip thumbnail uploading */
        #[SerializedName('album_cover_thumbnail')]
        private InputThumbnail|null $albumCoverThumbnail = null,
        /** Duration of the audio, in seconds; may be replaced by the server */
        #[SerializedName('duration')]
        private int $duration,
        /** Title of the audio; 0-64 characters; may be replaced by the server */
        #[SerializedName('title')]
        private string $title,
        /** Performer of the audio; 0-64 characters, may be replaced by the server */
        #[SerializedName('performer')]
        private string $performer,
        /** Audio caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
    ) {
    }

    /**
     * Get Audio file to be sent.
     */
    public function getAudio(): InputFile|null
    {
        return $this->audio;
    }

    /**
     * Set Audio file to be sent.
     */
    public function setAudio(InputFile|null $audio): self
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * Get Thumbnail of the cover for the album; pass null to skip thumbnail uploading.
     */
    public function getAlbumCoverThumbnail(): InputThumbnail|null
    {
        return $this->albumCoverThumbnail;
    }

    /**
     * Set Thumbnail of the cover for the album; pass null to skip thumbnail uploading.
     */
    public function setAlbumCoverThumbnail(InputThumbnail|null $albumCoverThumbnail): self
    {
        $this->albumCoverThumbnail = $albumCoverThumbnail;

        return $this;
    }

    /**
     * Get Duration of the audio, in seconds; may be replaced by the server.
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Duration of the audio, in seconds; may be replaced by the server.
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Title of the audio; 0-64 characters; may be replaced by the server.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the audio; 0-64 characters; may be replaced by the server.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Performer of the audio; 0-64 characters, may be replaced by the server.
     */
    public function getPerformer(): string
    {
        return $this->performer;
    }

    /**
     * Set Performer of the audio; 0-64 characters, may be replaced by the server.
     */
    public function setPerformer(string $performer): self
    {
        $this->performer = $performer;

        return $this;
    }

    /**
     * Get Audio caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set Audio caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageAudio',
            'audio' => $this->getAudio(),
            'album_cover_thumbnail' => $this->getAlbumCoverThumbnail(),
            'duration' => $this->getDuration(),
            'title' => $this->getTitle(),
            'performer' => $this->getPerformer(),
            'caption' => $this->getCaption(),
        ];
    }
}
