<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A media album
 */
class PushMessageContentMediaAlbum extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Number of messages in the album */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** True, if the album has at least one photo */
        #[SerializedName('has_photos')]
        private bool $hasPhotos,
        /** True, if the album has at least one video file */
        #[SerializedName('has_videos')]
        private bool $hasVideos,
        /** True, if the album has at least one audio file */
        #[SerializedName('has_audios')]
        private bool $hasAudios,
        /** True, if the album has at least one document */
        #[SerializedName('has_documents')]
        private bool $hasDocuments,
    ) {
    }

    /**
     * Get Number of messages in the album
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set Number of messages in the album
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get True, if the album has at least one photo
     */
    public function getHasPhotos(): bool
    {
        return $this->hasPhotos;
    }

    /**
     * Set True, if the album has at least one photo
     */
    public function setHasPhotos(bool $hasPhotos): self
    {
        $this->hasPhotos = $hasPhotos;

        return $this;
    }

    /**
     * Get True, if the album has at least one video file
     */
    public function getHasVideos(): bool
    {
        return $this->hasVideos;
    }

    /**
     * Set True, if the album has at least one video file
     */
    public function setHasVideos(bool $hasVideos): self
    {
        $this->hasVideos = $hasVideos;

        return $this;
    }

    /**
     * Get True, if the album has at least one audio file
     */
    public function getHasAudios(): bool
    {
        return $this->hasAudios;
    }

    /**
     * Set True, if the album has at least one audio file
     */
    public function setHasAudios(bool $hasAudios): self
    {
        $this->hasAudios = $hasAudios;

        return $this;
    }

    /**
     * Get True, if the album has at least one document
     */
    public function getHasDocuments(): bool
    {
        return $this->hasDocuments;
    }

    /**
     * Set True, if the album has at least one document
     */
    public function setHasDocuments(bool $hasDocuments): self
    {
        $this->hasDocuments = $hasDocuments;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentMediaAlbum',
            'total_count' => $this->getTotalCount(),
            'has_photos' => $this->getHasPhotos(),
            'has_videos' => $this->getHasVideos(),
            'has_audios' => $this->getHasAudios(),
            'has_documents' => $this->getHasDocuments(),
        ];
    }
}
