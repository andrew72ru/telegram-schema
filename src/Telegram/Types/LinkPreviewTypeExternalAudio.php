<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to an audio file
 */
class LinkPreviewTypeExternalAudio extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        /** URL of the audio file */
        #[SerializedName('url')]
        private string $url,
        /** MIME type of the audio file */
        #[SerializedName('mime_type')]
        private string $mimeType,
        /** Duration of the audio, in seconds; 0 if unknown */
        #[SerializedName('duration')]
        private int $duration,
    ) {
    }

    /**
     * Get URL of the audio file
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL of the audio file
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get MIME type of the audio file
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * Set MIME type of the audio file
     */
    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get Duration of the audio, in seconds; 0 if unknown
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Duration of the audio, in seconds; 0 if unknown
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeExternalAudio',
            'url' => $this->getUrl(),
            'mime_type' => $this->getMimeType(),
            'duration' => $this->getDuration(),
        ];
    }
}
