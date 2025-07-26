<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an audio file. Audio is usually in MP3 or M4A format
 */
class Audio implements \JsonSerializable
{
    public function __construct(
        /** Duration of the audio, in seconds; as defined by the sender */
        #[SerializedName('duration')]
        private int $duration,
        /** Title of the audio; as defined by the sender */
        #[SerializedName('title')]
        private string $title,
        /** Performer of the audio; as defined by the sender */
        #[SerializedName('performer')]
        private string $performer,
        /** Original name of the file; as defined by the sender */
        #[SerializedName('file_name')]
        private string $fileName,
        /** The MIME type of the file; as defined by the sender */
        #[SerializedName('mime_type')]
        private string $mimeType,
        /** The minithumbnail of the album cover; may be null */
        #[SerializedName('album_cover_minithumbnail')]
        private Minithumbnail|null $albumCoverMinithumbnail = null,
        /** The thumbnail of the album cover in JPEG format; as defined by the sender. The full size thumbnail is expected to be extracted from the downloaded audio file; may be null */
        #[SerializedName('album_cover_thumbnail')]
        private Thumbnail|null $albumCoverThumbnail = null,
        /** Album cover variants to use if the downloaded audio file contains no album cover. Provided thumbnail dimensions are approximate */
        #[SerializedName('external_album_covers')]
        private array|null $externalAlbumCovers = null,
        /** File containing the audio */
        #[SerializedName('audio')]
        private File|null $audio = null,
    ) {
    }

    /**
     * Get Duration of the audio, in seconds; as defined by the sender
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Duration of the audio, in seconds; as defined by the sender
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Title of the audio; as defined by the sender
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the audio; as defined by the sender
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Performer of the audio; as defined by the sender
     */
    public function getPerformer(): string
    {
        return $this->performer;
    }

    /**
     * Set Performer of the audio; as defined by the sender
     */
    public function setPerformer(string $performer): self
    {
        $this->performer = $performer;

        return $this;
    }

    /**
     * Get Original name of the file; as defined by the sender
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * Set Original name of the file; as defined by the sender
     */
    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get The MIME type of the file; as defined by the sender
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * Set The MIME type of the file; as defined by the sender
     */
    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get The minithumbnail of the album cover; may be null
     */
    public function getAlbumCoverMinithumbnail(): Minithumbnail|null
    {
        return $this->albumCoverMinithumbnail;
    }

    /**
     * Set The minithumbnail of the album cover; may be null
     */
    public function setAlbumCoverMinithumbnail(Minithumbnail|null $albumCoverMinithumbnail): self
    {
        $this->albumCoverMinithumbnail = $albumCoverMinithumbnail;

        return $this;
    }

    /**
     * Get The thumbnail of the album cover in JPEG format; as defined by the sender. The full size thumbnail is expected to be extracted from the downloaded audio file; may be null
     */
    public function getAlbumCoverThumbnail(): Thumbnail|null
    {
        return $this->albumCoverThumbnail;
    }

    /**
     * Set The thumbnail of the album cover in JPEG format; as defined by the sender. The full size thumbnail is expected to be extracted from the downloaded audio file; may be null
     */
    public function setAlbumCoverThumbnail(Thumbnail|null $albumCoverThumbnail): self
    {
        $this->albumCoverThumbnail = $albumCoverThumbnail;

        return $this;
    }

    /**
     * Get Album cover variants to use if the downloaded audio file contains no album cover. Provided thumbnail dimensions are approximate
     */
    public function getExternalAlbumCovers(): array|null
    {
        return $this->externalAlbumCovers;
    }

    /**
     * Set Album cover variants to use if the downloaded audio file contains no album cover. Provided thumbnail dimensions are approximate
     */
    public function setExternalAlbumCovers(array|null $externalAlbumCovers): self
    {
        $this->externalAlbumCovers = $externalAlbumCovers;

        return $this;
    }

    /**
     * Get File containing the audio
     */
    public function getAudio(): File|null
    {
        return $this->audio;
    }

    /**
     * Set File containing the audio
     */
    public function setAudio(File|null $audio): self
    {
        $this->audio = $audio;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'audio',
            'duration' => $this->getDuration(),
            'title' => $this->getTitle(),
            'performer' => $this->getPerformer(),
            'file_name' => $this->getFileName(),
            'mime_type' => $this->getMimeType(),
            'album_cover_minithumbnail' => $this->getAlbumCoverMinithumbnail(),
            'album_cover_thumbnail' => $this->getAlbumCoverThumbnail(),
            'external_album_covers' => $this->getExternalAlbumCovers(),
            'audio' => $this->getAudio(),
        ];
    }
}
